<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Factura;

class FacturaSeeder extends Seeder
{
    public function run(): void
    {
        Factura::create([
            'numeroFactura' => 'FAC-001',
            'idUsuarios' => 1,
            'fechaEmision' => '2025-01-10',
            'metodoPago' => 'Efectivo',
            'estadoPago' => 'Pagada',
            'montoTotal' => 45000,
        ]);

        Factura::create([
            'numeroFactura' => 'FAC-002',
            'idUsuarios' => 2,
            'fechaEmision' => '2025-01-11',
            'metodoPago' => 'Transferencia',
            'estadoPago' => 'Pendiente',
            'montoTotal' => 62000,
        ]);

        Factura::create([
            'numeroFactura' => 'FAC-003',
            'idUsuarios' => 1,
            'fechaEmision' => '2025-01-12',
            'metodoPago' => 'Nequi',
            'estadoPago' => 'Pagada',
            'montoTotal' => 38000,
        ]);

        Factura::create([
            'numeroFactura' => 'FAC-004',
                'idUsuarios' => 3,
                'fechaEmision' => '2025-01-13',
                'metodoPago' => 'Efectivo',
                'estadoPago' => 'Cancelada',
                'montoTotal' => 15000,
        ]);

        Factura::create([
            'numeroFactura' => 'FAC-005',
                'idUsuarios' => 2,
                'fechaEmision' => '2025-01-14',
                'metodoPago' => 'Daviplata',
                'estadoPago' => 'Pendiente',
                'montoTotal' => 78000,
        ]);

        Factura::create([
             'numeroFactura' => 'FAC-006',
                'idUsuarios' => 1,
                'fechaEmision' => '2025-01-15',
                'metodoPago' => 'Transferencia',
                'estadoPago' => 'Pagada',
                'montoTotal' => 52000,
        ]);

        Factura::create([
            'numeroFactura' => 'FAC-007',
                'idUsuarios' => 3,
                'fechaEmision' => '2025-01-16',
                'metodoPago' => 'Efectivo',
                'estadoPago' => 'Pagada',
                'montoTotal' => 29000,
        ]);

        Factura::create([
            'numeroFactura' => 'FAC-008',
                'idUsuarios' => 2,
                'fechaEmision' => '2025-01-17',
                'metodoPago' => 'Nequi',
                'estadoPago' => 'Pendiente',
                'montoTotal' => 31000,
        ]);

        Factura::create([
            'numeroFactura' => 'FAC-009',
                'idUsuarios' => 1,
                'fechaEmision' => '2025-01-18',
                'metodoPago' => 'Efectivo',
                'estadoPago' => 'Pagada',
                'montoTotal' => 43000,
        ]);

        Factura::create([
            'numeroFactura' => 'FAC-010',
                'idUsuarios' => 3,
                'fechaEmision' => '2025-01-19',
                'metodoPago' => 'Transferencia',
                'estadoPago' => 'Pendiente',
                'montoTotal' => 55000,
        ]);

    }
}