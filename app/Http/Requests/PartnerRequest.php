<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartnerRequest extends FormRequest
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
            'address'=>'string|max:255',
            'website' => 'url|max:350',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
    public function messages(){
        return [
            'name.required'=>'The name is required',
            'name.string' => 'The name should be a valid text',
            'website.url'=>'Website should be a valid url',
            'photo.max' => 'Image should be at least 2MB',
            'photo.mimes' => 'Image should be of jpeg, png, jpg or gif format',
        ];
    }
}
