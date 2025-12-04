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
            'numeroFactura'     => 'required|string|max:50',
            'fechaEmision'      => 'required|date',
            'idUsuarios'        => 'required|exists:usuarios,id',
            'direccionCliente'  => 'required|string|max:255',
            'metodoPago'        => 'required|string',
            'estadoPago'        => 'required|string',
            'montoTotal'        => 'required|numeric',
            'notas'             => 'nullable|string',
        ];
    }

    public function messages(): array
    {
        return [
            'numeroFactura.required'     => 'El número de factura es obligatorio.',
            'fechaEmision.required'      => 'La fecha de emisión es obligatoria.',
            'idUsuarios.required'        => 'Debe seleccionar un usuario.',
            'idUsuarios.exists'          => 'El usuario seleccionado no es válido.',
            'direccionCliente.required'  => 'La dirección del cliente es obligatoria.',
            'metodoPago.required'        => 'Debe seleccionar un método de pago.',
            'estadoPago.required'        => 'Debe seleccionar un estado de pago.',
            'montoTotal.required'        => 'Debe ingresar el monto total.',
            'montoTotal.numeric'         => 'El monto total debe ser un número.',
        ];
    }
}