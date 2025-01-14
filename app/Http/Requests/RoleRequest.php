<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RoleRequest extends FormRequest
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

        // Determine if we are creating or updating
        // This assumes your route has a {role} parameter for updates
        $role_id = $this->route('role');  
        return [
            'name' => [
                'required',
                'string',
                'max:255',
                // Unique constraint, ignore the current role ID during updates
                Rule::unique('roles', 'name')->ignore($role_id),
            ], 
            'permissions' => 'required|array|exists:permissions,id',
            'permissions.*' => 'required|string',
        ];
    }
}