<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table = "facturas";

    protected $fillable= [
        'fechaEmision',
        'montoTotal',
        'idUsuarios'

    ];

    public function usuario()
    {
        return $this->belongsTo(Usuarios::class, 'idUsuarios');
    }
}
