<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre'        => 'required|string|min:3|max:100',
            'descripcion'   => 'required|string|min:10|max:500',
            'precio'        => 'required|numeric|min:0',
            'fechaCompra'   => 'required|date',
            'cantidad'      => 'required|integer|min:1',

            'idCategorias'  => 'required|exists:categorias,id',
            'idMarcas'      => 'required|exists:marcas,id',
        ];
    }

    public function messages(): array
    {
        return [
            'nombre.required'      => 'El nombre del producto es obligatorio.',
            'nombre.min'           => 'El nombre debe tener al menos 3 caracteres.',
            'nombre.max'           => 'El nombre no puede superar los 100 caracteres.',

            'descripcion.required' => 'La descripción es obligatoria.',
            'descripcion.min'      => 'La descripción debe tener mínimo 10 caracteres.',
            'descripcion.max'      => 'La descripción no puede superar 500 caracteres.',

            'precio.required'      => 'El precio es obligatorio.',
            'precio.numeric'       => 'El precio debe ser un número válido.',
            'precio.min'           => 'El precio no puede ser negativo.',

            'fechaCompra.required' => 'Debe ingresar la fecha de compra.',
            'fechaCompra.date'     => 'Debe ingresar una fecha válida.',

            'cantidad.required'    => 'La cantidad es obligatoria.',
            'cantidad.integer'     => 'La cantidad debe ser un número entero.',
            'cantidad.min'         => 'La cantidad mínima es 1.',

            'idCategorias.required' => 'Debe seleccionar una categoría.',
            'idCategorias.exists'   => 'La categoría seleccionada no existe.',

            'idMarcas.required'    => 'Debe seleccionar una marca.',
            'idMarcas.exists'      => 'La marca seleccionada no existe.',
        ];
    }
}