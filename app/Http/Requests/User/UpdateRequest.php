<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required|min:3|max:255',
            'last_name' => 'required|min:3|max:255',
            'middle_name' => 'nullable|string|min:3|max:255',
            'phone' => 'required|digits:9',
            'email' => 'nullable|email:rfc,dns|unique:users,email,'.$this->route('user'),
            'filial_id' => 'nullable|numeric|exists:filials,id',
            'birth_date' => 'required|date_format:Y-m-d',
            'username' => 'required|min:3|max:255|unique:users,username,'.$this->route('user'),
            'role_id' => 'required|numeric|exists:roles,id',
            'password' => 'required|min:6|max:255',
            'status_id' => 'nullable|numeric|min:0',
        ];
    }
}
