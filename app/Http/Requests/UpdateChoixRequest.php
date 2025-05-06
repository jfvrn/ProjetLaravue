<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateChoixRequest extends FormRequest
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
            'passage_id' => ['sometimes', 'integer', 'exists:passages,id'],
            'texte' => ['sometimes', 'string', 'max:255'],
            'suivant_id' => ['nullable', 'integer', 'exists:passages,id'],
        ];
    }
}