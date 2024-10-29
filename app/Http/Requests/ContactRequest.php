<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'subject'=>'required|string|max:255',
            'email'=>'required|email',
            'phone' => 'regex:/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/',
            'message' => 'required|string|max:450',
        ];
    }
    public function messages(){
        return [
            'name.required'=>'The name is required',
            'name.string' => 'The name should be a valid text',
            'subject.string'=>'Subject should be a valid text',
            'subject.required'=>'Subject is required',
            'email.required'=>'Email Address is required',
            'email.email'=>'Email Address should be of valid format',
            'phone.regex' => 'Phone number should be in a valid format',
            'message.required'=>'Message is required',
            'photo.mimes' => 'Image should be of jpeg, png, jpg or gif format',
        ];
    }
}
