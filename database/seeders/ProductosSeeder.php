<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;
use Carbon\Carbon;

class ProductosSeeder extends Seeder
{
    public function run(): void
    {
        Producto::create([
            'nombre' => 'Arroz Casanare 500g',
            'descripcion' => 'Arroz blanco Casanare en presentación de 500 gramos, ideal para porciones pequeñas.',
            'precio' => 2800,
            'cantidad' => 50,
            'fechaCompra' => 14/03/2025,
            'cantidad'=>20,
            'idCategorias' => 1,   // Granos y Harinas
            'idMarcas' => 36      // Marca Casanare
        ]);

        Producto::create([
            'nombre' => 'Arroz Casanare 1000g',
            'descripcion' => 'Arroz blanco Casanare de alta calidad en empaque de 1 kilo.',
            'precio' => 5200,
            'cantidad' => 40,
            'fechaCompra' => Carbon::now(),
            'cantidad'=>20,
            'idCategorias' => 1,
            'idMarcas' => 36
        ]);

        Producto::create([
            'nombre' => 'Arroz Casanare 2500g',
            'descripcion' => 'Arroz Casanare en bolsa de 2.5 kg, rendimiento y calidad garantizada.',
            'precio' => 11000,
            'cantidad' => 30,
            'fechaCompra' => Carbon::now(),
            'idCategorias' => 1,
            'idMarcas' => 36
        ]);

        Producto::create([
            'nombre' => 'Arroz Casanare 3000g',
            'descripcion' => 'Arroz Casanare presentación familiar de 3 kilos, ideal para el hogar.',
            'precio' => 13500,
            'cantidad' => 25,
            'fechaCompra' => Carbon::now(),
            'idCategorias' => 1,
            'idMarcas' => 36
        ]);

        // ================================
        // Pastas Gavassa
        // ================================
        Producto::create([
            'nombre' => 'Pasta Gavassa Spaghetti 125g',
            'descripcion' => 'Spaghetti Gavassa presentación de 125 gramos, ideal para porciones personales.',
            'precio' => 1500,
            'cantidad' => 60,
            'fechaCompra' => Carbon::now(),
            'idCategorias' => 1,
            'idMarcas' => 37
        ]);

        Producto::create([
            'nombre' => 'Pasta Gavassa Spaghetti 1000g',
            'descripcion' => 'Spaghetti Gavassa en presentación familiar de 1 kilo.',
            'precio' => 6500,
            'cantidad' => 40,
            'fechaCompra' => Carbon::now(),
            'idCategorias' => 1,
            'idMarcas' => 37
        ]);

        Producto::create([
            'nombre' => 'Pasta Gavassa Macarrón Corto 125g',
            'descripcion' => 'Macarrón corto Gavassa de 125 gramos, especial para preparar recetas rápidas.',
            'precio' => 1500,
            'cantidad' => 50,
            'fechaCompra' => Carbon::now(),
            'idCategorias' => 1,
            'idMarcas' => 37
        ]);

        Producto::create([
            'nombre' => 'Pasta Gavassa Fideos 125g',
            'descripcion' => 'Fideos Gavassa en empaque de 125 gramos, ideales para sopas.',
            'precio' => 1200,
            'cantidad' => 70,
            'fechaCompra' => Carbon::now(),
            'idCategorias' => 1,
            'idMarcas' => 37
        ]);

        Producto::create([
            'nombre' => 'Pasta Gavassa Concha 125g',
            'descripcion' => 'Pasta tipo concha Gavassa en presentación de 125 gramos.',
            'precio' => 1300,
            'cantidad' => 65,
            'fechaCompra' => Carbon::now(),
            'idCategorias' => 1,
            'idMarcas' => 37
        ]);

        // ================================
        // Pastas Doria
        // ================================
        Producto::create([
            'nombre' => 'Pasta Doria Spaghetti 125g',
            'descripcion' => 'Spaghetti Doria de 125 gramos, reconocido por su excelente textura.',
            'precio' => 1800,
            'cantidad' => 55,
            'fechaCompra' => Carbon::now(),
            'idCategorias' => 1,
            'idMarcas' => 38
        ]);

        Producto::create([
            'nombre' => 'Pasta Doria Conchas 250g',
            'descripcion' => 'Pasta tipo conchas Doria en presentación de 250 gramos.',
            'precio' => 2600,
            'cantidad' => 45,
            'fechaCompra' => Carbon::now(),
            'idCategorias' => 1,
            'idMarcas' => 38
        ]);

        Producto::create([
            'nombre' => 'Pasta Doria Fideos 250g',
            'descripcion' => 'Fideos Doria de 250 gramos, ideales para sopas caseras.',
            'precio' => 2400,
            'cantidad' => 50,
            'fechaCompra' => Carbon::now(),
            'idCategorias' => 1,
            'idMarcas' => 38
        ]);

        Producto::create([
            'nombre' => 'Pasta Doria Macarrón 250g',
            'descripcion' => 'Pasta macarrón Doria en presentación de 250 gramos, perfecta para ensaladas y pastas gratinadas.',
            'precio' => 2500,
            'cantidad' => 50,
            'fechaCompra' => Carbon::now(),
            'idCategorias' => 1,
            'idMarcas' => 38
        ]);

        // ================================
// Granos California
// ================================
Producto::create([
    'nombre' => 'Granos California Garbanzo 500g',
    'descripcion' => 'Garbanzo California en presentación de 500 gramos, ideal para preparaciones nutritivas.',
    'precio' => 3800,
    'cantidad' => 40,
    'fechaCompra' => Carbon::now(),
    'idCategorias' => 1,
    'idMarcas' => 1
]);

Producto::create([
    'nombre' => 'Granos California Lenteja 500g',
    'descripcion' => 'Lenteja California de 500 gramos, grano seleccionado de alta calidad.',
    'precio' => 3200,
    'cantidad' => 50,
    'fechaCompra' => Carbon::now(),
    'idCategorias' => 1,
    'idMarcas' => 1
]);

Producto::create([
    'nombre' => 'Granos California Alverja 500g',
    'descripcion' => 'Alverja partida California en empaque de 500 gramos.',
    'precio' => 3500,
    'cantidad' => 45,
    'fechaCompra' => Carbon::now(),
    'idCategorias' => 1,
    'idMarcas' => 1
]);

// ================================
// Granos La Soberana
// ================================
Producto::create([
    'nombre' => 'Granos La Soberana Lenteja 500g',
    'descripcion' => 'Lenteja La Soberana de 500 gramos, reconocida por su suavidad y rendimiento.',
    'precio' => 3000,
    'cantidad' => 55,
    'fechaCompra' => Carbon::now(),
    'idCategorias' => 1,
    'idMarcas' => 2
]);

// ================================
// Azúcares Riopaila
// ================================
Producto::create([
    'nombre' => 'Azúcar Riopaila Morena 1000g',
    'descripcion' => 'Azúcar morena Riopaila de 1000 gramos, ideal para repostería y bebidas.',
    'precio' => 4200,
    'cantidad' => 30,
    'fechaCompra' => Carbon::now(),
    'idCategorias' => 2,
    'idMarcas' => 4
]);

Producto::create([
    'nombre' => 'Azúcar Riopaila Morena 500g',
    'descripcion' => 'Azúcar morena Riopaila en presentación de 500 gramos, con sabor natural.',
    'precio' => 2500,
    'cantidad' => 45,
    'fechaCompra' => Carbon::now(),
    'idCategorias' => 2,
    'idMarcas' => 4
]);

Producto::create([
    'nombre' => 'Azúcar Riopaila Blanca 1000g',
    'descripcion' => 'Azúcar blanca Riopaila de 1000 gramos, refinada y de alta pureza.',
    'precio' => 3900,
    'cantidad' => 35,
    'fechaCompra' => Carbon::now(),
    'idCategorias' => 2,
    'idMarcas' => 4
]);

// ================================
// Azúcar Palacio
// ================================
Producto::create([
    'nombre' => 'Azúcar Palacio Blanca 500g',
    'descripcion' => 'Azúcar blanca Palacio en presentación de 500 gramos, ideal para uso diario.',
    'precio' => 2100,
    'cantidad' => 40,
    'fechaCompra' => Carbon::now(),
    'idCategorias' => 2,
    'idMarcas' => 5
]);


// ================================
// Panelas Lagunera
// ================================
Producto::create([
    'nombre' => 'Panela Lagunera Blanca 1000g',
    'descripcion' => 'Panela Lagunera blanca en bloque de 1000 gramos, ideal para bebidas y preparaciones tradicionales.',
    'precio' => 4800,
    'cantidad' => 25,
    'fechaCompra' => Carbon::now(),
    'idCategorias' => 2,
    'idMarcas' => 6
]);

Producto::create([
    'nombre' => 'Panela Lagunera Negra 1000g',
    'descripcion' => 'Panela Lagunera negra de 1000 gramos, con sabor más intenso y natural.',
    'precio' => 4700,
    'cantidad' => 30,
    'fechaCompra' => Carbon::now(),
    'idCategorias' => 2,
    'idMarcas' => 6
]);

Producto::create([
    'nombre' => 'Panela Lagunera Blanca 500g',
    'descripcion' => 'Panela Lagunera blanca en presentación de 500 gramos, ideal para endulzar bebidas.',
    'precio' => 2600,
    'cantidad' => 40,
    'fechaCompra' => Carbon::now(),
    'idCategorias' => 2,
    'idMarcas' => 6
]);


// ==========================================
// Harinas PAN – Arepasán – Robinson – Molinos Julián
// ==========================================

// Harina PAN
Producto::create([
    'nombre' => 'Harina PAN de Maíz Blanco 1000g',
    'descripcion' => 'Harina de maíz blanco precocida PAN en presentación de 1000g, ideal para arepas y masas tradicionales.',
    'precio' => 5200,
    'cantidad' => 40,
    'fechaCompra' => Carbon::now(),
    'idCategorias' => 1,
    'idMarcas' => 7
]);

// Harina Arepasán
Producto::create([
    'nombre' => 'Harina Arepasán de Maíz Blanco 1000g',
    'descripcion' => 'Harina precocida Arepasán de maíz blanco en paquete de 1000g, perfecta para preparación de arepas.',
    'precio' => 5000,
    'cantidad' => 35,
    'fechaCompra' => Carbon::now(),
    'idCategorias' => 1,
    'idMarcas' => 8
]);

// Harina Robinson Tradicional
Producto::create([
    'nombre' => 'Harina Robinson de Trigo Tradicional 1000g',
    'descripcion' => 'Harina de trigo Robinson tradicional de 1000g, ideal para panadería, repostería y uso diario.',
    'precio' => 4300,
    'cantidad' => 28,
    'fechaCompra' => Carbon::now(),
    'idCategorias' => 1,
    'idMarcas' => 9
]);

// Harina Robinson Leudante
Producto::create([
    'nombre' => 'Harina Robinson de Trigo Leudante 1000g',
    'descripcion' => 'Harina Robinson leudante de 1000g, perfecta para tortas, ponqués y preparaciones que requieren levadura.',
    'precio' => 4500,
    'cantidad' => 30,
    'fechaCompra' => Carbon::now(),
    'idCategorias' => 1,
    'idMarcas' => 9
]);

// Harina Robinson Integral
Producto::create([
    'nombre' => 'Harina Robinson de Trigo Integral 1000g',
    'descripcion' => 'Harina integral Robinson de 1000g, rica en fibra y recomendada para recetas saludables.',
    'precio' => 4700,
    'cantidad' => 22,
    'fechaCompra' => Carbon::now(),
    'idCategorias' => 1,
    'idMarcas' => 9
]);

// Harina Molinos Julián Pinto
Producto::create([
    'nombre' => 'Harina Molinos Julián de Pinto 500g',
    'descripcion' => 'Harina Molinos Julián de pinto en presentación de 500g, ideal para sopas y recetas tradicionales.',
    'precio' => 2800,
    'cantidad' => 20,
    'fechaCompra' => Carbon::now(),
    'idCategorias' => 1,
    'idMarcas' => 3
]);

// Harina Molinos Julián Crudo
Producto::create([
    'nombre' => 'Harina Molinos Julián de Crudo 500g',
    'descripcion' => 'Harina Molinos Julián cruda en bolsa de 500g, utilizada para preparaciones típicas de la región.',
    'precio' => 2700,
    'cantidad' => 18,
    'fechaCompra' => Carbon::now(),
    'idCategorias' => 1,
    'idMarcas' => 3
]);

// ==========================================
// MANTEQUILLAS Y MARGARINAS
// ==========================================

// Mantequilla Sabrina caja x4 barras 125g
Producto::create([
    'nombre' => 'Mantequilla Sabrina Caja de 4 Barras de 125g',
    'descripcion' => 'Presentación de mantequilla Sabrina que incluye 4 barras de 125g, ideal para cocinar, untar y repostería.',
    'precio' => 9800,
    'cantidad' => 15,
    'fechaCompra' => Carbon::now(),
    'idCategorias' => 3,
    'idMarcas' => 10
]);

// Mantequilla Mavesa pote 250g
Producto::create([
    'nombre' => 'Mantequilla Mavesa Pote 250g',
    'descripcion' => 'Margarina Mavesa en pote de 250g, suave y perfecta para uso diario en la cocina.',
    'precio' => 4500,
    'cantidad' => 25,
    'fechaCompra' => Carbon::now(),
    'idCategorias' => 3,
    'idMarcas' => 11
]);

// Mantequilla Mavesa pote 500g
Producto::create([
    'nombre' => 'Mantequilla Mavesa Pote 500g',
    'descripcion' => 'Pote de margarina Mavesa de 500g, ideal para preparar recetas y uso familiar.',
    'precio' => 7800,
    'cantidad' => 20,
    'fechaCompra' => Carbon::now(),
    'idCategorias' => 3,
    'idMarcas' => 11
]);

// Mantequilla Gradesa Aliñada 500g
Producto::create([
    'nombre' => 'Mantequilla Gradesa Aliñada 500g',
    'descripcion' => 'Mantequilla aliñada tipo Gradesa de 500g, perfecta para sazonar comidas y dar más sabor.',
    'precio' => 8200,
    'cantidad' => 18,
    'fechaCompra' => Carbon::now(),
    'idCategorias' => 3,
    'idMarcas' => 12 // Asignada a Andi Aliñado
]);

// ==========================================
// CHOCOLATES Y CACAO
// ==========================================

// Chocolate Aroma pastilla 500g
Producto::create([
    'nombre' => 'Chocolate Aroma Pastilla 500g',
    'descripcion' => 'Chocolate Aroma en pastilla de 500g, ideal para preparar bebidas calientes tradicionales.',
    'precio' => 8500,
    'cantidad' => 20,
    'fechaCompra' => Carbon::now(),
    'idCategorias' => 4,
    'idMarcas' => 13
]);

// Chocolate La Especial pastilla 400g
Producto::create([
    'nombre' => 'Chocolate La Especial Pastilla 400g',
    'descripcion' => 'Chocolate La Especial en pastilla de 400g, perfecto para preparar chocolate caliente espeso.',
    'precio' => 7800,
    'cantidad' => 18,
    'fechaCompra' => Carbon::now(),
    'idCategorias' => 4,
    'idMarcas' => 14
]);

// Chocolate San José pastilla 400g
Producto::create([
    'nombre' => 'Chocolate San José Pastilla 400g',
    'descripcion' => 'Pastilla de chocolate San José de 400g, tradicional para bebidas calientes en el hogar.',
    'precio' => 7600,
    'cantidad' => 15,
    'fechaCompra' => Carbon::now(),
    'idCategorias' => 4,
    'idMarcas' => 15
]);

// Chocolate D’Chucurí tradicional pastilla 500g
Producto::create([
    'nombre' => 'Chocolate D’Chucurí Tradicional Pastilla 500g',
    'descripcion' => 'Chocolate artesanal D’Chucurí en presentación de 500g, con sabor auténtico tradicional.',
    'precio' => 9200,
    'cantidad' => 16,
    'fechaCompra' => Carbon::now(),
    'idCategorias' => 4,
    'idMarcas' => 16
]);

// Chocolate de bola 500g (Marca Casero)
Producto::create([
    'nombre' => 'Chocolate de Bola 500g',
    'descripcion' => 'Chocolate de bola artesanal de 500g, ideal para moler y preparar chocolate casero.',
    'precio' => 6800,
    'cantidad' => 22,
    'fechaCompra' => Carbon::now(),
    'idCategorias' => 4,
    'idMarcas' => 17
]);

// Chocolate en pepa 500g (Marca Cacao en pepa)
Producto::create([
    'nombre' => 'Chocolate en Pepa 500g',
    'descripcion' => 'Cacao puro en pepa de 500g, perfecto para tostar, moler y preparar chocolate artesanal.',
    'precio' => 7500,
    'cantidad' => 14,
    'fechaCompra' => Carbon::now(),
    'idCategorias' => 4,
    'idMarcas' => 18
]);


        Producto::create([
            'nombre' => 'Avena Don Pacho en hojuelas 180g',
            'descripcion' => 'Avena Don Pacho en hojuelas en presentación de 180 g, ideal para bebidas y preparaciones nutritivas.',
            'precio' => 2500,
            'cantidad' => 30,
            'fechaCompra' => '2025-01-15',
            'categoria_id' => 6,   // Avena / Cereales (cambia si usas otro ID)
            'marca_id' => 22     // Cambia al ID correcto de la marca Don Pacho
        ]);

        Producto::create([
            'nombre' => 'Avena Del Sur en hojuelas 500g',
            'descripcion' => 'Avena Del Sur en hojuelas en presentación familiar de 500 g, rica en fibra y perfecta para el desayuno.',
            'precio' => 5200,
            'cantidad' => 25,
            'fechaCompra' => '2025-01-15',
            'categoria_id' => 6,
            'marca_id' => 23       // Cambia al ID de Del Sur
        ]);

        Producto::create([
            'nombre' => 'Avena Del Sur en hojuelas 250g',
            'descripcion' => 'Avena Del Sur en hojuelas en presentación de 250 g, ideal para recetas rápidas y saludables.',
            'precio' => 3200,
            'cantidad' => 20,
            'fechaCompra' => '2025-01-15',
            'categoria_id' => 6,
            'marca_id' => 23
        ]);

        Producto::create([
            'nombre' => 'Cuchuco Molinos Julián maíz blanco 500g',
            'descripcion' => 'Cuchuco de maíz blanco Molinos Julián en presentación de 500 g, ideal para sopas tradicionales.',
            'precio' => 3800,
            'cantidad' => 40,
            'fechaCompra' => '2025-01-20',
            'categoria_id' => 1,   // Granos y harinas (ajusta si usas otro ID)
            'marca_id' => 3      // ID ficticio de Molinos Julián (cámbialo si es otro)
        ]);

        Producto::create([
            'nombre' => 'Cuchuco Molinos Julián cebada perlada 500g',
            'descripcion' => 'Cuchuco de cebada perlada Molinos Julián en presentación de 500 g, perfecto para sopas espesas y nutritivas.',
            'precio' => 4200,
            'cantidad' => 35,
            'fechaCompra' => '2025-01-20',
            'categoria_id' => 1,
            'marca_id' => 3
        ]);

        Producto::create([
            'nombre' => 'Cuchuco Molinos Julián de cebada 500g',
            'descripcion' => 'Cuchuco de cebada Molinos Julián en empaque de 500 g, tradicional para recetas caseras.',
            'precio' => 4000,
            'cantidad' => 33,
            'fechaCompra' => '2025-01-20',
            'categoria_id' => 1,
            'marca_id' => 3
        ]);

        // SELLO ROJO
        Producto::create([
            'nombre' => 'Café Sello Rojo tradicional 425g',
            'descripcion' => 'Café Sello Rojo tradicional en presentación de 425 g, sabor intenso y aroma clásico.',
            'precio' => 14500,
            'cantidad' => 30,
            'fechaCompra' => '2025-01-22',
            'categoria_id' => 5,
            'marca_id' => 19
        ]);

        Producto::create([
            'nombre' => 'Café Sello Rojo tradicional 212g',
            'descripcion' => 'Café Sello Rojo tradicional en presentación de 212 g, ideal para consumo diario.',
            'precio' => 8200,
            'cantidad' => 42,
            'fechaCompra' => '2025-01-22',
            'categoria_id' => 5,
            'marca_id' => 19
        ]);

        Producto::create([
            'nombre' => 'Café Sello Rojo tradicional 110g',
            'descripcion' => 'Café Sello Rojo tradicional de 110 g, práctico y rendidor.',
            'precio' => 4500,
            'cantidad' => 55,
            'fechaCompra' => '2025-01-22',
            'categoria_id' => 5,
            'marca_id' => 19
        ]);

        Producto::create([
            'nombre' => 'Café Sello Rojo tradicional 40g',
            'descripcion' => 'Café Sello Rojo tradicional de 40 g, ideal para viajes o uso rápido.',
            'precio' => 1800,
            'cantidad' => 70,
            'fechaCompra' => '2025-01-22',
            'categoria_id' => 5,
            'marca_id' => 19
        ]);

        // COLCAFE
        Producto::create([
            'nombre' => 'Café Colcafé suave clásico 8g',
            'descripcion' => 'Café Colcafé suave clásico en sobre de 8 g, práctico y delicioso.',
            'precio' => 600,
            'cantidad' => 100,
            'fechaCompra' => '2025-01-22',
            'categoria_id' => 5,
            'marca_id' => 20
        ]);

        Producto::create([
            'nombre' => 'Café Colcafé granulado intenso instantáneo 170g',
            'descripcion' => 'Café Colcafé granulado intenso instantáneo 170 g, sabor fuerte y aroma profundo.',
            'precio' => 16500,
            'cantidad' => 28,
            'fechaCompra' => '2025-01-22',
            'categoria_id' => 5,
            'marca_id' => 20
        ]);

        Producto::create([
            'nombre' => 'Café Colcafé granulado intenso instantáneo 85g',
            'descripcion' => 'Café Colcafé granulado intenso instantáneo 85 g, ideal para preparar rápidamente.',
            'precio' => 9500,
            'cantidad' => 40,
            'fechaCompra' => '2025-01-22',
            'categoria_id' => 5,
            'marca_id' => 20
        ]);

        // NESCAFÉ
        Producto::create([
            'nombre' => 'Café Nescafé tradicional 10g',
            'descripcion' => 'Café Nescafé tradicional en sobre de 10 g, práctico y de sabor clásico.',
            'precio' => 700,
            'cantidad' => 90,
            'fechaCompra' => '2025-01-22',
            'categoria_id' => 5,
            'marca_id' => 21
        ]);

         // ❖ Jabones Dersa
        Producto::create([
            'nombre' => 'Jabón barra Dersa Rey 300g',
            'descripcion' => 'Jabón en barra Dersa Rey de 300 g, ideal para lavado general y multiusos.',
            'precio' => 2500,
            'cantidad' => 80,
            'fechaCompra' => '2025-01-22',
            'categoria_id' => 7,
            'marca_id' => 24
        ]);

        Producto::create([
            'nombre' => 'Jabón barra Dersa Azul puro 320g',
            'descripcion' => 'Jabón en barra Dersa Azul Puro de 320 g, efectivo para ropa y limpieza.',
            'precio' => 2600,
            'cantidad' => 75,
            'fechaCompra' => '2025-01-22',
            'categoria_id' => 7,
            'marca_id' => 25
        ]);

        // ❖ Barrigón
        Producto::create([
            'nombre' => 'Jabón barra barrigón 400g',
            'descripcion' => 'Jabón barrigón de 400 g, reconocido por su alto rendimiento en el lavado.',
            'precio' => 3200,
            'cantidad' => 60,
            'fechaCompra' => '2025-01-22',
            'categoria_id' => 7,
            'marca_id' => 26
        ]);

        // ❖ Supremo
        Producto::create([
            'nombre' => 'Jabón barra supremo multiusos 300g',
            'descripcion' => 'Jabón supremo multiusos de 300 g, perfecto para limpieza general.',
            'precio' => 2400,
            'cantidad' => 65,
            'fechaCompra' => '2025-01-22',
            'categoria_id' => 7,
            'marca_id' => 27
        ]);

        // ❖ Fab
        Producto::create([
            'nombre' => 'Jabón fab barra ultra flash limón 300g',
            'descripcion' => 'Jabón Fab Ultra Flash aroma limón, 300 g, ideal para eliminar manchas.',
            'precio' => 2900,
            'cantidad' => 70,
            'fechaCompra' => '2025-01-22',
            'categoria_id' => 7,
            'marca_id' => 28
        ]);

        Producto::create([
            'nombre' => 'Jabón fab barra ultra flash floral 300g',
            'descripcion' => 'Jabón Fab Ultra Flash floral de 300 g, eficiente y con aroma agradable.',
            'precio' => 2900,
            'cantidad' => 70,
            'fechaCompra' => '2025-01-22',
            'categoria_id' => 7,
            'marca_id' => 28
        ]);

        // ❖ Puro
        Producto::create([
            'nombre' => 'Jabón barra puro con bicarbonato 360g',
            'descripcion' => 'Jabón Puro con bicarbonato de 360 g, ideal para eliminar olores y limpieza profunda.',
            'precio' => 3000,
            'cantidad' => 50,
            'fechaCompra' => '2025-01-22',
            'categoria_id' => 7,
            'marca_id' => 29
        ]);

        // ❖ Jabones corporales
        Producto::create([
            'nombre' => 'Jabón Rexona de baño antibacterial 110g',
            'descripcion' => 'Jabón Rexona antibacterial de 110 g, protección y frescura para la piel.',
            'precio' => 3500,
            'cantidad' => 90,
            'fechaCompra' => '2025-01-22',
            'categoria_id' => 8,
            'marca_id' => 30
        ]);

        Producto::create([
            'nombre' => 'Jabón Protex de baño Nutri protector 110g',
            'descripcion' => 'Jabón Protex Nutri Protector 110 g, protección antibacterial avanzada.',
            'precio' => 3800,
            'cantidad' => 85,
            'fechaCompra' => '2025-01-22',
            'categoria_id' => 8,
            'marca_id' => 31
        ]);

        Producto::create([
            'nombre' => 'Jabón Protex de baño limpieza profunda 110g',
            'descripcion' => 'Jabón Protex limpieza profunda de 110 g, elimina impurezas y protege la piel.',
            'precio' => 3800,
            'cantidad' => 85,
            'fechaCompra' => '2025-01-22',
            'categoria_id' => 8,
            'marca_id' => 31
        ]);

        // ❖ Jabones en polvo 3D
        Producto::create([
            'nombre' => 'Jabón de polvo 3D Multiusos aloe vera 1000g',
            'descripcion' => 'Jabón en polvo 3D multiusos aloe vera, presentación de 1000 g.',
            'precio' => 9500,
            'cantidad' => 40,
            'fechaCompra' => '2025-01-22',
            'categoria_id' => 7,
            'marca_id' => 32
        ]);

        Producto::create([
            'nombre' => 'Jabón de polvo 3D Multiusos aloe vera 500g',
            'descripcion' => 'Jabón en polvo 3D aloe vera de 500 g, limpieza efectiva.',
            'precio' => 5200,
            'cantidad' => 50,
            'fechaCompra' => '2025-01-22',
            'categoria_id' => 7,
            'marca_id' => 32
        ]);

        Producto::create([
            'nombre' => 'Jabón de polvo multiusos aloe vera 250g',
            'descripcion' => 'Jabón en polvo multiusos aloe vera de 250 g, ideal para usos rápidos.',
            'precio' => 3000,
            'cantidad' => 60,
            'fechaCompra' => '2025-01-22',
            'categoria_id' => 7,
            'marca_id' => 32
        ]);

        Producto::create([
            'nombre' => 'Jabón de polvo 3D Multiusos aloe vera 125g',
            'descripcion' => 'Jabón en polvo 3D aloe vera en presentación de 125 g.',
            'precio' => 1800,
            'cantidad' => 75,
            'fechaCompra' => '2025-01-22',
            'categoria_id' => 7,
            'marca_id' => 32
        ]);

        // ❖ Dersa polvo
        Producto::create([
            'nombre' => 'Jabón en polvo Dersa bicarbonato manzana 1000g',
            'descripcion' => 'Jabón en polvo Dersa bicarbonato aroma manzana, presentación de 1000 g.',
            'precio' => 9200,
            'cantidad' => 45,
            'fechaCompra' => '2025-01-22',
            'categoria_id' => 7,
            'marca_id' => 25
        ]);

        Producto::create([
            'nombre' => 'Jabón en polvo Dersa bicarbonato manzana 500g',
            'descripcion' => 'Jabón en polvo Dersa bicarbonato aroma manzana 500 g.',
            'precio' => 4800,
            'cantidad' => 55,
            'fechaCompra' => '2025-01-22',
            'categoria_id' => 7,
            'marca_id' => 25
        ]);

        Producto::create([
            'nombre' => 'Jabón en polvo Dersa bicarbonato más jabón rey 250g',
            'descripcion' => 'Jabón Dersa con bicarbonato y Jabón Rey en presentación de 250 g.',
            'precio' => 3200,
            'cantidad' => 65,
            'fechaCompra' => '2025-01-22',
            'categoria_id' => 7,
            'marca_id' => 25
        ]);

        Producto::create([
            'nombre' => 'Jabón en polvo Dersa vinagre limón 1000g',
            'descripcion' => 'Jabón en polvo Dersa vinagre limón 1000 g, limpieza profunda.',
            'precio' => 9500,
            'cantidad' => 42,
            'fechaCompra' => '2025-01-22',
            'categoria_id' => 7,
            'marca_id' => 25
        ]);

        // ❖ DeterK
        Producto::create([
            'nombre' => 'Jabón en polvo DeterK floral 100g',
            'descripcion' => 'Jabón en polvo DeterK floral de 100 g, ideal para pequeñas cargas de lavado.',
            'precio' => 1200,
            'cantidad' => 90,
            'fechaCompra' => '2025-01-22',
            'categoria_id' => 7,
            'marca_id' => 33
        ]);

        // ❖ Ariel
        Producto::create([
            'nombre' => 'Jabón en polvo Ariel triple poder 1000g',
            'descripcion' => 'Jabón en polvo Ariel triple poder 1000 g, limpieza avanzada contra manchas.',
            'precio' => 13800,
            'cantidad' => 40,
            'fechaCompra' => '2025-01-22',
            'categoria_id' => 7,
            'marca_id' => 34
        ]);

        Producto::create([
            'nombre' => 'Jabón en polvo Ariel triple poder 450g',
            'descripcion' => 'Jabón en polvo Ariel triple poder 450 g, ideal para uso diario.',
            'precio' => 7200,
            'cantidad' => 55,
            'fechaCompra' => '2025-01-22',
            'categoria_id' => 7,
            'marca_id' => 34
        ]);

        Producto::create([
            'nombre' => 'Jabón en polvo Ariel triple poder 225g',
            'descripcion' => 'Jabón en polvo Ariel triple poder 225 g, rendimiento garantizado.',
            'precio' => 4100,
            'cantidad' => 70,
            'fechaCompra' => '2025-01-22',
            'categoria_id' => 7,
            'marca_id' => 34
        ]);

         // Aceite Ideal 1000ml
        Producto::create([
            'nombre' => 'Aceite Ideal 1000ml',
            'descripcion' => 'Aceite Ideal de 1000 ml, perfecto para frituras y preparaciones diarias.',
            'precio' => 9800,
            'cantidad' => 60,
            'fechaCompra' => '2025-01-24',
            'categoria_id' => 9,
            'marca_id' => 35
        ]);

        // Aceite Ideal garrafa 3000ml
        Producto::create([
            'nombre' => 'Aceite Ideal garrafa 3000ml',
            'descripcion' => 'Aceite Ideal en garrafa de 3000 ml, ideal para familias y negocios.',
            'precio' => 26500,
            'cantidad' => 40,
            'fechaCompra' => '2025-01-24',
            'categoria_id' => 9,
            'marca_id' => 35
        ]);

        // Aceite Ideal garrafa 4800ml
        Producto::create([
            'nombre' => 'Aceite Ideal garrafa 4800ml',
            'descripcion' => 'Aceite Ideal en presentación económica de 4800 ml, alto rendimiento.',
            'precio' => 39800,
            'cantidad' => 35,
            'fechaCompra' => '2025-01-24',
            'categoria_id' => 9,
            'marca_id' => 35
        ]);
    }
}


    

    

