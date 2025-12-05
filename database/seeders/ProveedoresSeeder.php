<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Proveedor;

class ProveedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Proveedor::create(['nombre' => 'Distribuciones Alfa', 'telefono' => '3101234567', 'correoElectronico' => 'contacto@alfa.com', 'direccion' => 'Calle 10 #12-34']);
        Proveedor::create(['nombre' => 'Comercial Beta', 'telefono' => '3129876543', 'correoElectronico' => 'ventas@beta.com', 'direccion' => 'Carrera 8 #45-10']);
        Proveedor::create(['nombre' => 'Suministros Gamma', 'telefono' => '3154567890', 'correoElectronico' => 'info@gamma.com', 'direccion' => 'Av. 30 #20-15']);
        Proveedor::create(['nombre' => 'Proveedora Delta', 'telefono' => '3172345678', 'correoElectronico' => 'contacto@delta.com', 'direccion' => 'Calle 5 #7-25']);
        Proveedor::create(['nombre' => 'Importadora Épsilon', 'telefono' => '3198765432', 'correoElectronico' => 'ventas@epsilon.com', 'direccion' => 'Carrera 12 #33-50']);
        Proveedor::create(['nombre' => 'Logística Zeta', 'telefono' => '3011234567', 'correoElectronico' => 'info@zeta.com', 'direccion' => 'Calle 22 #18-60']);
        Proveedor::create(['nombre' => 'Distribuciones Eta', 'telefono' => '3029876543', 'correoElectronico' => 'contacto@eta.com', 'direccion' => 'Carrera 9 #44-21']);
        Proveedor::create(['nombre' => 'Comercial cacao', 'telefono' => '3034567890', 'correoElectronico' => 'ventas@theta.com', 'direccion' => 'Av. 6 #11-30']);
        Proveedor::create(['nombre' => 'Suministros Iota', 'telefono' => '3042345678', 'correoElectronico' => 'info@iota.com', 'direccion' => 'Calle 19 #14-70']);
        Proveedor::create(['nombre' => 'Proveedora Kappa', 'telefono' => '3058765432', 'correoElectronico' => 'contacto@kappa.com', 'direccion' => 'Carrera 21 #50-15']);
        Proveedor::create(['nombre' => 'Importadora Lambda', 'telefono' => '3061234567', 'correoElectronico' => 'ventas@lambda.com', 'direccion' => 'Calle 4 #3-12']);
        Proveedor::create(['nombre' => 'Logística Mu', 'telefono' => '3079876543', 'correoElectronico' => 'info@mu.com', 'direccion' => 'Carrera 18 #22-41']);
        Proveedor::create(['nombre' => 'Distribuciones Nu', 'telefono' => '3084567890', 'correoElectronico' => 'contacto@nu.com', 'direccion' => 'Av. 32 #14-08']);
        Proveedor::create(['nombre' => 'Comercial Xi', 'telefono' => '3092345678', 'correoElectronico' => 'ventas@xi.com', 'direccion' => 'Calle 16 #10-22']);
        Proveedor::create(['nombre' => 'Suministros Omicron', 'telefono' => '3008765432', 'correoElectronico' => 'info@omicron.com', 'direccion' => 'Carrera 27 #41-09']);
        Proveedor::create(['nombre' => 'Proveedora Sigma', 'telefono' => '3112233445', 'correoElectronico' => 'contacto@sigma.com', 'direccion' => 'Calle 8 #23-41']);
        Proveedor::create(['nombre' => 'Importadora Tau', 'telefono' => '3135566778', 'correoElectronico' => 'ventas@tau.com', 'direccion' => 'Carrera 4 #33-20']);
        Proveedor::create(['nombre' => 'Suministros Upsilon', 'telefono' => '3146677889', 'correoElectronico' => 'info@upsilon.com', 'direccion' => 'Av. 9 #27-15']);
        Proveedor::create(['nombre' => 'Comercial Phi', 'telefono' => '3167788990', 'correoElectronico' => 'contacto@phi.com', 'direccion' => 'Calle 12 #45-01']);
        Proveedor::create(['nombre' => 'Distribuciones Chi', 'telefono' => '3188899001', 'correoElectronico' => 'ventas@chi.com', 'direccion' => 'Carrera 30 #12-03']);
        Proveedor::create(['nombre' => 'Proveedora Psi', 'telefono' => '3201122334', 'correoElectronico' => 'info@psi.com', 'direccion' => 'Av. 15 #7-44']);
        Proveedor::create(['nombre' => 'Logística Omega', 'telefono' => '3212233445', 'correoElectronico' => 'contacto@omega.com', 'direccion' => 'Calle 40 #22-18']);
        Proveedor::create(['nombre' => 'Distribuciones Atlas', 'telefono' => '3223344556', 'correoElectronico' => 'ventas@atlas.com', 'direccion' => 'Carrera 2 #5-60']);
        Proveedor::create(['nombre' => 'Comercial Boreal', 'telefono' => '3234455667', 'correoElectronico' => 'info@boreal.com', 'direccion' => 'Calle 17 #9-33']);
        Proveedor::create(['nombre' => 'Suministros Nova', 'telefono' => '3245566778', 'correoElectronico' => 'contacto@nova.com', 'direccion' => 'Av. 18 #11-72']);
        Proveedor::create(['nombre' => 'Importadora Solaris', 'telefono' => '3256677889', 'correoElectronico' => 'ventas@solaris.com', 'direccion' => 'Calle 25 #70-19']);
        Proveedor::create(['nombre' => 'Proveedora Orion', 'telefono' => '3267788990', 'correoElectronico' => 'info@orion.com', 'direccion' => 'Carrera 14 #33-02']);
        Proveedor::create(['nombre' => 'Logística Zenith', 'telefono' => '3278899001', 'correoElectronico' => 'contacto@zenith.com', 'direccion' => 'Av. 20 #8-10']);
        Proveedor::create(['nombre' => 'Distribuciones Aurora', 'telefono' => '3289900112', 'correoElectronico' => 'ventas@aurora.com', 'direccion' => 'Calle 37 #22-05']);
        Proveedor::create(['nombre' => 'Comercial Prisma', 'telefono' => '3291001223', 'correoElectronico' => 'info@prisma.com', 'direccion' => 'Carrera 6 #19-14']);
    }
}