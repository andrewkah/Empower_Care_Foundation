<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $userId = $this->route('user');
        return [
            'name'=>'required',
            'username'=>'required',
            'email' => 'required|email|unique:users,email,'.$userId,
            'roles' => 'required',
            'phone'=>'nullable'
        ];
    }
    public function messages(){
        return [
            'name.required'=>'Full Name  is required',
            'username.required'=>'Username is required',
            'email.required'=>'Email is required',
            'email.email'=>'Email is invalid',
            'email.unique'=>'Email already exists',
            'password.required'=>'Password is required',
            'password.same'=>'Password does not match',
            'roles.required'=>'Role is required'
        ];
    }
}
