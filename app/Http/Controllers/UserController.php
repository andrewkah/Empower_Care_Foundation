<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(private UserService $userService)
    {
        
    }

    public function index(){
        $data = $this->userService->get_all_users_except_admin();
        return view('backend.pages.users.index', compact('data'));
    }

    public function create(){
        return view('backend.pages.users.create');
    }

    public function store(UserRequest $request){
        $users = $this->userService->create_user($request);
        if ($users) return redirect()->route('users.index')->with('success', "User created successfully.");
        return redirect()->back()->with('error', "Something went wrong");
    }

    public function edit($id){
        $user = $this->userService->get_user_by_id($id);
        return view('backend.pages.users.edit', compact('user'));
    }

    public function update($id, UserRequest $request){
        $user = $this->userService->update_user($request, $id);
        if($user) return redirect()->route('users.index')->with('success', 'User updated successfully');
        return redirect()->back()->with('error', 'Something went wrong');
    }

    public function destroy($id){
        $user = $this->userService->delete_user($id);
        if($user) return redirect()->route('users.index')->with('success', 'User deleted successfully');
        return redirect()->back()->with('error', 'Something went wrong');
    }
}
