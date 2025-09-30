<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Productos_Proveedor extends Model
{
    protected $table = "producto_proveedor";

    protected $fillable= [
        'idProductos',
        'idProveedores'
    ];

       public function productos()
    {
        return $this->belongsTo(Producto::class, 'idProductos');
    }

        public function proveedores()
    {
        return $this->belongsTo(Proveedor::class, 'idProveedores');
    }


    

 
}
