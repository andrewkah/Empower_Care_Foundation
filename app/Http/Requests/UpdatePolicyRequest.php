<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePolicyRequest extends FormRequest
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
            'file' => 'file|mimes:pdf,doc,docx,txt|max:3048',
        ];
    }
    public function messages(){
        return [
            'title.required'=>'The title is required',
            'title.string' => 'The title should be a valid text',
            'file.file' => 'Please provide a valid format',
            'file.max' => 'The file should be at least 3MB',
            'file.mimes' => 'The file should be of pdf, doc, docx format',
        ];
    }
}
