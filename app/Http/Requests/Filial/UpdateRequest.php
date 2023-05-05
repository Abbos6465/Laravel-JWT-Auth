<?php

namespace App\Http\Requests\Filial;

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
            'location_id' => 'required|numeric',
            'name' => 'required|string|min:3|max:255|unique:filials,name,'.$this->route('filial'),
            'start_work_time' => 'required|date_format:Y-m-d H:i:s',
            'end_work_time' => 'required|date_format:Y-m-d H:i:s',
            'phones' => 'required|array',
            'email' => 'nullable|email:rfc,dns|unique:filials,email,'.$this->route('filial'),
            'timezone' => 'required|string|min:3|max:255'
        ];
    }
}
