<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'email' => 'required|email|unique:users,email,'.$userId,
            'password' => 'min:8',
        ];
    }
    public function messages(){
        return [
            'name.required'=>'Full Name  is required',
            'email.required'=>'Email is required',
            'email.email'=>'Email is invalid',
            'email.unique'=>'Email already exists',
            'password.same'=>'Password does not match',
        ];
    }
}
