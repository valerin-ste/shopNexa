<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InventarioRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'cantidad' => 'required|integer|min:1',
            'fechaActualizacion' => 'required|date',
            'idProductos' => 'required|exists:productos,id',
        ];
    }

    public function messages(): array
    {
        return [
            'cantidad.required' => 'La cantidad es obligatoria.',
            'cantidad.integer' => 'La cantidad debe ser un número entero.',
            'cantidad.min' => 'La cantidad mínima es 1.',

            'fechaActualizacion.required' => 'La fecha es obligatoria.',

            'idProductos.required' => 'Debe seleccionar un producto.',
            'idProductos.exists' => 'El producto seleccionado no existe.',
        ];
    }
}