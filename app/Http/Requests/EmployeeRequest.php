<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
			'nombre' => 'required|string',
			'apellido_paterno' => 'required|string',
			'apellido_materno' => 'required|string',
			'CI' => 'required|string',
			'direccion' => 'required|string',
			'telefono' => 'required|string',
			'fecha_ingreso' => 'required|string',
			'fecha_nacimiento' => 'required|string',
			'cargo_actual' => 'required|string',
        ];
    }
}