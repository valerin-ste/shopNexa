<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Marca;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Marca::create([
            'nombre' => 'California',
            'descripcion' => 'Marca de granos secos como lentejas, garbanzos y alverjas, reconocida por sus productos básicos de cocina.'
        ]);

        Marca::create([
            'nombre' => 'La Soberana',
            'descripcion' => 'Marca de granos, enlatados y productos alimenticios esenciales para preparaciones caseras.'
        ]);

        Marca::create([
            'nombre' => 'Molinos Julián',
            'descripcion' => 'Ofrece harinas tradicionales, cuchuco y granos molidos típicos para la cocina colombiana.'
        ]);

        Marca::create([
            'nombre' => 'Riopaila',
            'descripcion' => 'Marca de azúcar morena y blanca elaborada a partir de caña de alta calidad.'
        ]);

        Marca::create([
            'nombre' => 'El Palacio',
            'descripcion' => 'Marca especializada en azúcares refinados y panela procesada.'
        ]);

        Marca::create([
            'nombre' => 'Lagunera',
            'descripcion' => 'Marca reconocida por producir panela blanca y panela negra en diferentes presentaciones.'
        ]);

        Marca::create([
            'nombre' => 'PAN',
            'descripcion' => 'Harina de maíz precocida ideal para arepas y recetas tradicionales.'
        ]);

        Marca::create([
            'nombre' => 'Arepasán',
            'descripcion' => 'Harina de maíz precocida para preparación de arepas y masas típicas.'
        ]);

        Marca::create([
            'nombre' => 'Robinson',
            'descripcion' => 'Marca de harinas de trigo: leudante, tradicional e integral, usada para repostería y panadería.'
        ]);

        Marca::create([
            'nombre' => 'Sabrina',
            'descripcion' => 'Mantequillas y margarinas para cocinar, untar y repostería.'
        ]);

        Marca::create([
            'nombre' => 'Mavesa',
            'descripcion' => 'Marca de mantequillas y margarinas suaves para uso diario y culinario.'
        ]);

        Marca::create([
            'nombre' => 'Andi Aliñado',
            'descripcion' => 'Mantequilla aliñada lista para cocinar y sazonar platos.'
        ]);

        Marca::create([
            'nombre' => 'Aroma',
            'descripcion' => 'Marca de chocolate para bebida y también de café. Muy usada para preparaciones calientes tradicionales.'
        ]);

        Marca::create([
            'nombre' => 'La Especial',
            'descripcion' => 'Marca de chocolate tradicional para preparar bebidas calientes.'
        ]);

        Marca::create([
            'nombre' => 'San José',
            'descripcion' => 'Chocolate en pastilla para bebidas tradicionales colombianas.'
        ]);

        Marca::create([
            'nombre' => 'D’Chucurí',
            'descripcion' => 'Chocolate artesanal para preparar bebidas espesas con sabor tradicional.'
        ]);

        Marca::create([
            'nombre' => 'Casero',
            'descripcion' => 'Chocolate artesanal elaborado de forma tradicional para bebidas hechas en casa.'
        ]);

        Marca::create([
            'nombre' => 'Cacao en pepa',
            'descripcion' => 'Cacao puro en grano o pepa para tostar, moler y preparar chocolate artesanal.'
        ]);

        Marca::create([
            'nombre' => 'Sello Rojo',
            'descripcion' => 'Café tradicional colombiano en varias presentaciones.'
        ]);

        Marca::create([
            'nombre' => 'Colcafé',
            'descripcion' => 'Café instantáneo y productos derivados del café de preparación rápida.'
        ]);

        Marca::create([
            'nombre' => 'NESCAFÉ',
            'descripcion' => 'Café instantáneo, granulado o en sobres de preparación inmediata.'
        ]);

        Marca::create([
            'nombre' => 'Don Pacho',
            'descripcion' => 'Avena tradicional y productos derivados como hojuelas y tostados.'
        ]);

        Marca::create([
            'nombre' => 'Pronalce del Sur',
            'descripcion' => 'Marca de avenas en hojuelas y productos hechos a base de avena.'
        ]);

        Marca::create([
            'nombre' => 'Rey',
            'descripcion' => 'Jabón de lavar ropa, reconocido por su alto rendimiento.'
        ]);

        Marca::create([
            'nombre' => 'Dersa',
            'descripcion' => 'Productos de jabón para lavar ropa y detergentes de uso doméstico.'
        ]);

        Marca::create([
            'nombre' => 'Barrigón',
            'descripcion' => 'Jabón para lavar ropa, tradicional en hogares.'
        ]);

        Marca::create([
            'nombre' => 'Supremo',
            'descripcion' => 'Jabón multiusos para lavado de ropa.'
        ]);

        Marca::create([
            'nombre' => 'FAB',
            'descripcion' => 'Detergentes en polvo para lavado profundo de prendas.'
        ]);

        Marca::create([
            'nombre' => 'PURO',
            'descripcion' => 'Jabón de lavar con fórmulas fuertes para limpieza profunda.'
        ]);

        Marca::create([
            'nombre' => 'Rexona',
            'descripcion' => 'Marca de jabones de baño y desodorantes.'
        ]);

        Marca::create([
            'nombre' => 'Protex',
            'descripcion' => 'Jabones de baño antibacteriales.'
        ]);

        Marca::create([
            'nombre' => '3D',
            'descripcion' => 'Detergentes en polvo multiusos.'
        ]);

        Marca::create([
            'nombre' => 'DeterK',
            'descripcion' => 'Detergente para ropa en polvo.'
        ]);

        Marca::create([
            'nombre' => 'Ariel',
            'descripcion' => 'Detergente premium para ropa con alto poder de limpieza.'
        ]);

        Marca::create([
            'nombre' => 'Ideal',
            'descripcion' => 'Aceite vegetal para cocina, freír y preparación de alimentos.'
        ]);

        Marca::create([
            'nombre' => 'Casanare',
            'descripcion' => 'es una marca de arroz producida en Colombia, que se caracteriza por ser un alimento saludable, natural y libre de gluten.'
        ]);

        Marca::create([
            'nombre' => 'Gavassa',
            'descripcion' => 'Marca de pastas económicas y rendidoras, reconocida por su buena textura y variedad de presentaciones como spaghetti, fideos, macarrón y conchas. Ideal para preparaciones cotidianas.'
        ]);

        Marca::create([
            'nombre' => 'Doria',
            'descripcion' => 'Marca reconocida por su calidad y sabor, elaborada con trigo seleccionado. Ofrece pastas nutritivas y de cocción uniforme, ideales para recetas familiares.'
        ]);
 
    }
}
