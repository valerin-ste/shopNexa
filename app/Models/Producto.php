<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = "productos";

    protected $fillable = [  
        'nombre',
        'descripcion',
        'precio',
        'cantidad',
        'fechaCompra',
        'idCategorias',
        'idMarcas'
    ];

    // Relación con Categorias (un producto pertenece a una categoría)
    public function categorias()
    {
        return $this->belongsTo(Categorias::class, 'idCategorias');
    }

    // Relación con Marca (un producto pertenece a una marca)
    public function marcas()
    {
        return $this->belongsTo(Marca::class, 'idMarcas');
    }
}
