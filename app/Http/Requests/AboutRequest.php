<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
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
            'vision' => 'required|string',
            'mission' => 'required|string',
            'value'=> 'required|string',
            'title' => 'required|string',
            'description' => 'required|string',
            // 'about_intro_images.*' => 'required|string',
            
            // 'about_content_images.*' => 'required|string',
        ];
    }
}
