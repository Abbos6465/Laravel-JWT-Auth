<?php

namespace App\Http\Requests\Application;

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
            'first_name' => 'required|string|min:3|max:255',
            'last_name' => 'required|string|min:3|max:255',
            'middle_name' => 'nullable|string|min:3|max:255',
            'phone' => 'required|digits:9',
            'email' => 'nullable|email:rfc,dns|unique:applications,email,'.$this->route('application'),
            'gender' => 'required|boolean',
            'discipline_id' => 'required|numeric|min:1',
            'filial_id' => 'nullable|numeric|exists:filials,id',
            'status_id' => 'required|numeric|min:1',
            'group_id' => 'required|numeric|min:1',
            'notice' => 'nullable|string|min:3'
        ];
    }
}
