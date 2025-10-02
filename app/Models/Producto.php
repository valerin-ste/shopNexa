<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = "productos";

    protected $fillable= [  
        'nombre',
        'descripcion',
        'precio',
        'cantidad',
        'fechaCompra',
        'idCategorias',
        'idMarcas'
    ];

    

     public function categorias()
    {
        return $this->belongsTo(Categorias::class, 'idCategorias');
    }

     public function marcas()
    {
        return $this->belongsTo(Marca::class, 'idMarcas');
    }

      public function inventarios()
    {
        return $this->hasMany(Inventario::class, 'idProductos');
        
    }

      public function productos_proveedores()
    {
        return $this->hasMany(Productos_Proveedor::class, 'idProductos');  
    }

      public function usuarios_productos()
    {
        return $this->hasMany(Usuarios_Producto::class, 'idProductos');  
    }

}
