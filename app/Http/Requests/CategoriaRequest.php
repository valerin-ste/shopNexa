<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "nombre" => "required|max:100",
            "descripcion" => "required",
            "imagen" => "nullable|image|mimes:jpg,jpeg,png,webp"
        ];
    }

    public function messages(): array
    {
        return [
            "nombre.required" => "El nombre de la categoría es obligatorio.",
            "nombre.max" => "El nombre no puede superar los 100 caracteres.",

            "descripcion.required" => "La descripción es obligatoria.",

            "imagen.image" => "El archivo debe ser una imagen.",
            "imagen.mimes" => "La imagen debe ser JPG, JPEG, PNG o WEBP.",
        ];
    }

    public function attributes(): array
    {
        return [
            "nombre" => "nombre de la categoría",
            "descripcion" => "descripción",
            "imagen" => "imagen de la categoría",
        ];
    }
}