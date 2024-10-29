<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlbumRequest extends FormRequest
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
            'cover_photo'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'string|max:350',
            'photos' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ];
    }
    public function messages(){
        return [
            'title.required'=>'The title is required',
            'title.string' => 'The title should be a valid text',
            'cover_photo.required' => 'Image is required',
            'cover_photo.max' => 'Image should be at least 2MB',
            'cover_photo.mimes' => 'Image should be of jpeg, png, jpg or gif format',
            'description.required'=>'Description is required',
            'description.string'=>'Description should be a valid text',
            'photos.max' => 'Image should be at least 2MB',
            'photos.mimes' => 'Image should be of jpeg, png, jpg or gif format',
        ];
    }
}
