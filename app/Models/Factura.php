<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    protected $table = 'facturas';

    protected $fillable = [
        'numeroFactura',
        'fechaEmision',
        'idUsuarios',
        'metodoPago',
        'estadoPago',
        'montoTotal',
        'notas',
    ];

    // RELACIÓN CORRECTA
    public function usuario()
    {
        return $this->belongsTo(Usuarios::class, 'idUsuarios', 'id');
    }
}