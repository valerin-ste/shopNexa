<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    protected $table = "inventarios";

    protected $fillable = [
        'idProductos', 
        'cantidad',
        'fechaActualizacion'
    ];

    public function productos()
    {
        return $this->belongsTo(Producto::class, 'idProductos');
    }
}
