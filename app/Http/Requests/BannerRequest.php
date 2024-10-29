<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
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
            'title'=>'required|string|max:255',
            'button_one'=>'required|string',
            'link_one'=>'required|string',
            'description' => 'string|max:350',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
    public function messages(){
        return [
            'title.required'=>'The title is required',
            'title.string' => 'The title should be a valid text',
            'button_one.required' => 'Button is required',
            'link_one.required' => 'Link is required',
            'description.string'=>'Description should be a valid text',
            'photo.max' => 'Image should be at least 2MB',
            'photo.mimes' => 'Image should be of jpeg, png, jpg or gif format',
        ];
    }
}
