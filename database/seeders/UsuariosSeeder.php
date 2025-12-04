<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuarios;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Usuarios::create([
    'nombre' => 'Ana Salazar',
    'direccion' => 'Calle 12 #34-56',
    'telefono' => '3001112233',
    'correoElectronico' => 'ana.salazar@example.com'
]);

Usuarios::create([
    'nombre' => 'Brayan Cifuentes',
    'direccion' => 'Carrera 9 #45-78',
    'telefono' => '3012223344',
    'correoElectronico' => 'brayan.cifuentes@example.com'
]);

Usuarios::create([
    'nombre' => 'Claudia Peña',
    'direccion' => 'Avenida 5 #22-11',
    'telefono' => '3023334455',
    'correoElectronico' => 'claudia.pena@example.com'
]);

Usuarios::create([
    'nombre' => 'Diego Cortés',
    'direccion' => 'Transversal 17 #30-40',
    'telefono' => '3034445566',
    'correoElectronico' => 'diego.cortes@example.com'
]);

Usuarios::create([
    'nombre' => 'Elisa Romero',
    'direccion' => 'Calle 100 #15-20',
    'telefono' => '3045556677',
    'correoElectronico' => 'elisa.romero@example.com'
]);

Usuarios::create([
    'nombre' => 'Fernando Lozano',
    'direccion' => 'Carrera 30 #80-55',
    'telefono' => '3056667788',
    'correoElectronico' => 'fernando.lozano@example.com'
]);

Usuarios::create([
    'nombre' => 'Gabriela Fuentes',
    'direccion' => 'Calle 45 #27-19',
    'telefono' => '3067778899',
    'correoElectronico' => 'gabriela.fuentes@example.com'
]);

Usuarios::create([
    'nombre' => 'Héctor Morales',
    'direccion' => 'Avenida Central #90-12',
    'telefono' => '3078889900',
    'correoElectronico' => 'hector.morales@example.com'
]);

Usuarios::create([
    'nombre' => 'Isabela Cruz',
    'direccion' => 'Calle 2 #10-08',
    'telefono' => '3081234567',
    'correoElectronico' => 'isabela.cruz@example.com'
]);

Usuarios::create([
    'nombre' => 'Javier Niño',
    'direccion' => 'Carrera 18 #77-44',
    'telefono' => '3092345678',
    'correoElectronico' => 'javier.nino@example.com'
]);

Usuarios::create([
    'nombre' => 'Kelly Montaño',
    'direccion' => 'Calle 56 #41-32',
    'telefono' => '3103456789',
    'correoElectronico' => 'kelly.montano@example.com'
]);

Usuarios::create([
    'nombre' => 'Luis Barrios',
    'direccion' => 'Carrera 70 #22-99',
    'telefono' => '3114567890',
    'correoElectronico' => 'luis.barrios@example.com'
]);

Usuarios::create([
    'nombre' => 'Mariana Castro',
    'direccion' => 'Avenida Norte #110-05',
    'telefono' => '3125678901',
    'correoElectronico' => 'mariana.castro@example.com'
]);

Usuarios::create([
    'nombre' => 'Nelson Prada',
    'direccion' => 'Calle 77 #12-13',
    'telefono' => '3136789012',
    'correoElectronico' => 'nelson.prada@example.com'
]);

Usuarios::create([
    'nombre' => 'Olivia Rojas',
    'direccion' => 'Carrera 12 #98-04',
    'telefono' => '3147890123',
    'correoElectronico' => 'olivia.rojas@example.com'
]);

Usuarios::create([
    'nombre' => 'Pablo Serrano',
    'direccion' => 'Calle 9 #23-71',
    'telefono' => '3158901234',
    'correoElectronico' => 'pablo.serrano@example.com'
]);

Usuarios::create([
    'nombre' => 'Rosa Andrade',
    'direccion' => 'Carrera 5 #45-16',
    'telefono' => '3169012345',
    'correoElectronico' => 'rosa.andrade@example.com'
]);

Usuarios::create([
    'nombre' => 'Samuel Patiño',
    'direccion' => 'Avenida Sur #60-30',
    'telefono' => '3170123456',
    'correoElectronico' => 'samuel.patino@example.com'
]);

Usuarios::create([
    'nombre' => 'Tatiana Mora',
    'direccion' => 'Calle 33 #70-27',
    'telefono' => '3181230987',
    'correoElectronico' => 'tatiana.mora@example.com'
]);

Usuarios::create([
    'nombre' => 'Ulises Vargas',
    'direccion' => 'Carrera 55 #25-19',
    'telefono' => '3192341098',
    'correoElectronico' => 'ulises.vargas@example.com'
]);

    }
}