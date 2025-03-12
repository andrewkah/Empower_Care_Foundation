<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
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
            'name'=>'required|string|max:255',
            'email'=>'email|max:255',
            'phone' => 'nullable',
            'position' => 'string|max:255',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,webp,svg|max:3048',
        ];
    }
    public function messages(){
        return [
            'name.required'=>'The name is required',
            'name.string' => 'The name should be a valid text',
            'email.email' => 'Please provide a valid email address',
            'email.unique' => 'Email address already exists',
            'position.string'=>'Position should be a valid text',
            'photo.max' => 'Image should be at least 3MB',
            'photo.mimes' => 'Image should be of jpeg, png, jpg or gif format',
        ];
    }
}
