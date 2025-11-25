<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $table = "categorias";

    protected $fillable = [
        'nombre',
        'descripcion',
        'imagen'
    ];

    public function productos()
    {
        return $this->hasMany(Producto::class, 'idCategorias');
    }
}
