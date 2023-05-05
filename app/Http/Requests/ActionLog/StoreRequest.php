<?php

namespace App\Http\Requests\ActionLog;

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
            'user_id' => 'required|numeric',
            'date' => 'required|date',
            'action' => 'required|string|max:255',
            'action_object_id' => 'required|numeric',
            'action_object' => 'required|string|max:255',
            'description' => 'required|string',
        ];
    }
}
