<?php

namespace App\Http\Requests\Task;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'start_date' => 'required|date_format:Y-m-d H:i:s',
            'end_date' => 'required|date_format:Y-m-d H:i:s',
            'degree' => 'required|numeric',
            'assignee_id' => 'required|numeric|exists:users,id',
            'communication' => 'required|array',
            'type_id' => 'required|numeric|min:1',
            'date' => 'required|date_format:Y-m-d',
            'description' => 'nullable|string|min:3'
        ];
    }
}
