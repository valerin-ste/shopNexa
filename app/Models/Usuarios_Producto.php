<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuarios_Producto extends Model
{
    protected $table = "usuarios__productos";

    protected $fillable= [
        'idUsuarios',
        'idProductos'
    ];

      public function productos()
    {
        return $this->belongsTo(Producto::class, 'idProductos');
    }

      public function usuarios()
    {
        return $this->belongsTo(Usuarios::class, 'idUsuarios');
    }


}
