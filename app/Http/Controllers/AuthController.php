<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\View\View;

class AuthController extends Controller
{
    // use AuthenticatesUsers;

    public function showLoginForm(): View
    {
        if (Auth::user()) {
            Auth::logout();
        }
        return view('backend.auth.login');
    }

    public function login(AuthRequest $request): RedirectResponse
    {
        if (Auth::attempt($request->validated())) {
            // Authentication successful
            return redirect()->intended(route('admin-home'));
        }

        // Authentication failed
        return redirect()->back()->with('error', 'These credentials do not match our records.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function showRegister(): View
    {
        if (Auth::user()) {
            Auth::logout();
        }
        return view('backend.auth.register');
    }

    public function register(AuthRequest $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['required','string','email','max:255','unique:'.User::class],
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);
        event(new User($user));

        Auth::login($user);
        return redirect(route('admin-home'));
    }

    
    public function forgotPasswordPage()
    {
        return view('backend.auth.forgot-password');
    }

    public function sendResetRequest(Request $request)
    {
        $request->validate([
            'email'=>'required|email|exists:users,email'
        ]);
        $status = Password::sendResetLink($request->only('email'));
        return $status === Password::RESET_LINK_SENT ? back()->with(['status' => __($status)]) : back()->withErrors(['email' => __($status)]);
    }

    public function showResetForm(Request $request, $token = null)
    {
        $request->validate([
            'email' => 'required|email',
        ]);
        DB::table('password_reset_tokens')->updateOrInsert(
            ['email' => $request->email], 
            [
                'token' => Hash::make($token),
                'created_at' => Carbon::now()
            ]
        );
        return view('backend.auth.reset-password', ['token' => $token, 'email' => $request->email]);
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);

        $record = DB::table('password_reset_tokens')->where('email', $request->email)->first();
        if ($record && Hash::check($request->token, $record->token)){
            $status = Password::reset(
                $request->only('email', 'password', 'password_confirmation', 'token'),
                function (User $user, string $password) {
                    $user->forceFill([
                        'password' => Hash::make($password),
                    ])->setRememberToken(Str::random(60));
    
                    $user->save();
    
                    event(new PasswordReset($user));
                }
            );
            DB::table('password_reset_tokens')->where('email', $request->email)->delete();
            return redirect()->route('login')->with('status', 'Password has been reset successfully!');
        } else return back()->withErrors(['email' => 'Invalid token or email.']);
    }
}
