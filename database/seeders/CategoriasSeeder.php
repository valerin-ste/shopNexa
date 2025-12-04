<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categorias;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categorias::create([
            'nombre' => 'Granos y Harinas',
            'descripcion' => 'Incluye marcas de granos secos, harinas de maíz y trigo para preparaciones tradicionales.'
        ]);

        Categorias::create([
            'nombre' => 'Azúcares y Panela',
            'descripcion' => 'Productos derivados de la caña como azúcar blanca, morena y diferentes tipos de panela.'
        ]);

        Categorias::create([
            'nombre' => 'Mantequillas y Margarinas',
            'descripcion' => 'Incluye mantequillas, margarinas y productos aliñados para cocinar y untar.'
        ]);

        Categorias::create([
            'nombre' => 'Chocolates y Cacao',
            'descripcion' => 'Chocolate tradicional, artesanal y cacao en diversas presentaciones para bebidas.'
        ]);

        Categorias::create([
            'nombre' => 'Cafés',
            'descripcion' => 'Café tostado, molido e instantáneo en diferentes tipos y presentaciones.'
        ]);

        Categorias::create([
            'nombre' => 'Avenas',
            'descripcion' => 'Avenas tradicionales, hojuelas y productos derivados para consumo diario.'
        ]);

        Categorias::create([
            'nombre' => 'Jabones y Detergentes',
            'descripcion' => 'Detergentes, jabones de lavar ropa y productos multiusos de limpieza.'
        ]);

        Categorias::create([
            'nombre' => 'Jabones y Cuidado Personal',
            'descripcion' => 'Jabones de baño, productos antibacteriales y artículos para el aseo personal.'
        ]);

        Categorias::create([
            'nombre' => 'Aceites',
            'descripcion' => 'Aceites vegetales utilizados para freír, cocinar y preparar alimentos.'
        ]);
    }
}
