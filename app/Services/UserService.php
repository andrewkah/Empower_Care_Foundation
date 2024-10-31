<?php

namespace App\Services;

use App\Http\Requests\ForgotPasswordRequest;
use App\Http\Requests\ResetPasswordRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class UserService{

    private $userQuery;

    public function __construct()
    {
        $this->userQuery = new User();
    }
     //request for forgot password 
     public function forgot_password(ForgotPasswordRequest $request)
     {
         $token = Str::random(64);
         DB::table('password_reset_tokens')->insert([
             'email' => $request->email,
             'token' => $token,
             'created_at' => Carbon::now()
         ]);
         Mail::send('email.forgetPassword', ['token' => $token], function ($message) use ($request) {
             $message->to($request->email);
             $message->subject('Reset Password');
         });
     }
     public function get_email_by_token($token)
     {
         $email = DB::table('password_reset_tokens')->where('token', $token)->first();
         return $email;
     }
     public function reset_password(ResetPasswordRequest $request)
     {
         $updatePassword = DB::table('password_reset_tokens')
             ->where([
                 'email' => $request->email,
                 'token' => $request->token
             ])->first();
         if (!$updatePassword) {
             return false;
         }
         $user = User::where('email', $request->email)->update(['password'=>Hash::make($request->password)]);
         DB::table('password_reset_tokens')->where(['email' => $request->email])->delete();
         if ($user) {
             return true;
         }
         return false;
     }
     // function get all users
     public function get_all_users()
     {
         $users = $this->userQuery->get_all_users();
         return $users;
     }
     // function to get user by id
     public function get_user_by_id($id)
     {
         $user = $this->userQuery->get_user_by_id($id);
         return $user;
     }
     //get all users expect admin user 
     public function get_all_users_except_admin()
     {
         $users = $this->userQuery->get_all_user_except_admin();
         return $users;
     }
     // function to create user
     public function create_user(UserRequest $request)
     {
         $path = null;
         if ($request->hasFile('avatar')) $path = $request->file('avatar')->store('public/avatars');
         $user = $this->userQuery->create_user($request->validated(), $path);
         return $user;
     }
     public function update_user_profile(Request $request , $id){
         $path = null;
         if ($request->avatar != null) $path = $request->file('avatar')->store('public/avatars');
         $user = $this->userQuery->update_user_profile($request->validated(), $id, $path);
         return $user;
     }
     //function to update user
     public function update_user(UserRequest $request, $id)
     {
         $path = null;
         if ($request->hasFile('avatar')) $path= $request->file('avatar')->store('public/avatars');
         $user = $this->userQuery->update_user($request->validated(), $id, $path);
         return $user;
     }
     //function to delete user
     public function delete_user($id)
     {
         $user = $this->userQuery->delete_user($id);
         return $user;
     }
     // function to create new role 
    //  public function create_role(StoreRoleRequest $request)
    //  {
    //      $role = Role::create(['name' => $request->input('name')]);
    //      $role->syncPermissions($request->input('permission'));
    //      return $role;
    //  }
    //  // function to get all roles    
    //  public function get_all_roles()
    //  {
    //      $roles = Role::where('name', '!=','Super admin')->get();
    //      return $roles;
    //  }
    //  // function to get single role
    //  public function get_role_by_id($id)
    //  {
    //      $role = Role::findOrFail($id);
    //      return $role;
    //  }
    //  // function to update role
    //  public function update_role(UpdateRoleRequest $request, $id)
    //  {
    //      $role = Role::findOrFail($id);
    //      $role->update($request->validated());
    //      $role->syncPermissions($request->input('permission'));
    //      return $role;
    //  }
    //  // function to delete role
    //  public function delete_role($id)
    //  {
    //      $role = Role::findOrFail($id);
    //      $role->delete();
    //      return $role;
    //  }
    //  // function get inactive roles 
    //  public function get_all_inactive_roles()
    //  {
    //      $roles = Role::whereNotNull('deleted_at')->get();;
    //      return $roles;
    //  }
     //function get all inactive users
     public function get_all_inactive_users()
     {
         return $this->userQuery->get_all_inactive_users();
     }
     //function to reactive user 
     public function reactive_user($id)
     {
         $user = $this->userQuery->reactive_user($id);
         return $user;
     }
}
?>