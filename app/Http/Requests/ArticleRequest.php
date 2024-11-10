<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'summary'=>'required|string',
            'description' => 'string',
            'quote' => 'string|max:255',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3048',
            'tags' => 'string|max:255',
            'article_cat_id'=>'required|exists:article_categories,id',
        ];
    }
    public function messages(){
        return [
            'title.required'=>'The title is required',
            'title.string' => 'The title should be a valid text',
            'summary.required' => 'Summary is required',
            'quote.string'=>'Quote should be a valid text',
            'photo.max' => 'Image should be at least 3MB',
            'photo.mimes' => 'Image should be of jpeg, png, jpg or gif format',
            'tags.string'=>'Tags should be a valid text',
        ];
    }
}
