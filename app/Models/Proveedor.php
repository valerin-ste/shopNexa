<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = "Proveedores";

    protected $fillable = [
    'nombre',
    'direccion',
    'telefono',
    'correoElectronico'
];

       public function productos_proveedores()
    {
        return $this->hasMany(Productos_Proveedor::class, 'idProveedores');  
    }
}
