<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CicloFormativoRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'codigo_familia' => ['required', 'string', 'max:50', 'regex:/^[A-Z0-9_-]+$/i'],
            'grado' => ['required', 'in:basico,medio,superior'],
            'codigo' => ['required', 'string', 'max:50', 'regex:/^[A-Z0-9_-]+$/i'],
            'nombre' => ['required', 'string', 'max:255'],
            'descripcion' => ['nullable', 'string'],
        ];
    }
    public function messages(): array
    {
        return [
            'nombre.required' => 'El nombre del proyecto es obligatorio.',
            'nombre.string' => 'El nombre del proyecto debe ser una cadena de texto.',
            'nombre.max' => 'El nombre del proyecto no puede tener más de 255 caracteres.',
            'codigo.required' => 'El código del proyecto es obligatorio.',
            'codigo.string' => 'El código del proyecto debe ser una cadena de texto.',
            'codigo.max' => 'El código del proyecto no puede tener más de 50 caracteres.',
            'codigo.regex' => 'El código del proyecto solo puede contener letras, números, guiones y guiones bajos.',
            'codigo_familia.required' => 'El código de la familia profesional es obligatorio.',
            'codigo_familia.string' => 'El código de la familia profesional debe ser una cadena de texto.',
            'codigo_familia.max' => 'El código de la familia profesional no puede tener más de 50 caracteres.',
            'codigo_familia.regex' => 'El código de la familia profesional solo puede contener letras, números, guiones y guiones bajos.',
            'grado.required' => 'El grado del ciclo formativo es obligatorio.',
            'grado.in' => 'El grado debe ser básico, medio o superior.',
            'descripcion.string' => 'La descripción del proyecto debe ser una cadena de texto.',
        ];
    }
}
