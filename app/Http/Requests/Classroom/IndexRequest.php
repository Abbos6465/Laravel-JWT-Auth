<?php

namespace App\Http\Requests\Classroom;

use Illuminate\Foundation\Http\FormRequest;

class IndexRequest extends FormRequest
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
            'sort_key' => 'nullable',
            'sort_type' => 'required_with:sort_key',
            'name' => 'nullable|string',
            'filial_id' => 'nullable|numeric',
            'capacity' => 'nullable|numeric',
            'page' => 'nullable|numeric',
            'per_page' => 'nullable|numeric'
        ];
    }
}
