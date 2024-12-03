<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VolunteerRequest extends FormRequest
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
            'name'=>'string|required|min:2',
            'email'=>'email|required|unique:volunteers,email',
            'bio'=>'required|min:10',
            'way_to_volunteer'=>'required|min:10',
            'country'=>'string|required',
            'phone'=>'string|nullable',
            'address'=>'string|required',
        ];
    }
}
