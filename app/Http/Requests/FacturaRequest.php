<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FacturaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'fechaEmision' => 'required|date',
            'montoTotal' => 'required|numeric',
            'idUsuarios' => 'required|exists:usuarios,id',
        ];
    }

    public function messages(): array
    {
        return [
            'fechaEmision.required' => 'La fecha de emisión es obligatoria.',
            'fechaEmision.date' => 'Debe ser una fecha válida.',
            'montoTotal.required' => 'El monto total es obligatorio.',
            'montoTotal.numeric' => 'El monto debe ser un número.',
            'idUsuarios.required' => 'Debe seleccionar un usuario.',
            'idUsuarios.exists' => 'El usuario seleccionado no existe.',
        ];
    }
}