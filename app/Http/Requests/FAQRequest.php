<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FAQRequest extends FormRequest
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
            'question'=>'required|string|max:255',
            'answer' => 'required|string|max:350',
        ];
    }
    public function messages(){
        return [
            'question.required'=>'The question is required',
            'question.string' => 'The question should be a valid text',
            'answer.required'=>'The answer is required',
            'answer.string' => 'The answer should be a valid text',
        ];
    }
}
