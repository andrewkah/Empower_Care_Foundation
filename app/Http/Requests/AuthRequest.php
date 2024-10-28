<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
        return [
            'email'=> "required|email",
            'password'=>"required|min:8"
        ];
    }
    public function messages()
    {
        return [          
            'email.required'=> "Email Address is required",
            'email.email'=> "Please provide a valid email address",
            'password.required' => 'Password is required',
            'password.min' => 'Password must be at least 8 characters long',
        ];
    }
}