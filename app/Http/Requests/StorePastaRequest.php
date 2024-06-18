<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePastaRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array {
        return [
            'title' => ['required', 'min:3'],
            'type' => ['required'],
            'cooking_time' => ['required'],
            'weight' => ['required'],
            'description' => ['min:10']
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages() {
        return [
            'title.required' => 'Il titolo non può essere vuoto'
        ];
    }
}
