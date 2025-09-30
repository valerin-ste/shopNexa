<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
     protected $table = "usuarios";

    protected $fillable= [
        'nombre',
        'direccion',
        'telefono',
        'correoElectronico'
    ];

     public function facturas()
    {
        return $this->hasMany(Factura::class, 'idUsuarios'); 
    }

      public function usuarios_productos()
    {
        return $this->hasMany(Usuarios_Producto::class, 'idUsuarios');  
    }
}
