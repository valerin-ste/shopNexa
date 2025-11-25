<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\usersController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//RUTA PRINCIPAL
Route::get('/login', function () {
    return redirect()->route('login');
});

// Página inicial (landing con el logo de FitBoost)
Route::get('/', function () {
    return view('landing');
});


Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');


//rutas para login
Route::get('/login',[usersController::class,'verlogin'])->name('login');
Route::post('/loginsubmit',[usersController::class,'login'])->name('login.submit');

Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('login');
})->name('logout');

//RUTAS REGISTRO
Route::get('/registro', [usersController::class, 'verRegistro'])->name('registro');
Route::post('/registro-submit', [usersController::class, 'registro'])->name('registro.submit');

// ==========================
// Rutas Usuarios
// ==========================
Route::get('/usuarios/index',[UsuarioController::class,'index'])->name('Usuario.index');
Route::get('/usuarios/create',[UsuarioController::class,'create'])->name('Usuario.create');
Route::post('/usuarios/store',[UsuarioController::class,'store'])->name('Usuario.store');
Route::get('/usuarios/edit/{id}',[UsuarioController::class,'edit'])->name('Usuario.edit');
Route::post('/usuarios/update/{id}',[UsuarioController::class,'update'])->name('Usuario.update');
Route::delete('/usuarios/destroy/{id}',[UsuarioController::class,'destroy'])->name('Usuario.destroy');

// ==========================
// Rutas Marcas
// ==========================
Route::get('/marcas/index',[MarcaController::class,'index'])->name('Marca.index');
Route::get('/marcas/create',[MarcaController::class,'create'])->name('Marca.create');
Route::post('/marcas/store',[MarcaController::class,'store'])->name('Marca.store');
Route::get('/marcas/edit/{id}',[MarcaController::class,'edit'])->name('Marca.edit');
Route::post('/marcas/update/{id}',[MarcaController::class,'update'])->name('Marca.update');
Route::delete('/marcas/destroy/{id}', [MarcaController::class, 'destroy'])->name('Marca.destroy');

// ==========================
// Rutas Categorías
// ==========================
Route::get('/categorias/index',[CategoriasController::class,'index'])->name('Categoria.index');
Route::get('/categorias/create',[CategoriasController::class,'create'])->name('Categoria.create');
Route::post('/categorias/store',[CategoriasController::class,'store'])->name('Categoria.store');
Route::get('/categorias/edit/{id}',[CategoriasController::class,'edit'])->name('Categoria.edit');
Route::post('/categorias/update/{id}',[CategoriasController::class,'update'])->name('Categoria.update');
Route::delete('/categorias/destroy/{id}',[CategoriasController::class,'destroy'])->name('Categoria.destroy');

// ==========================
// Rutas Productos
// ==========================
Route::get('/productos/index',[ProductoController::class,'index'])->name('Producto.index');
Route::get('/productos/create',[ProductoController::class,'create'])->name('Producto.create');
Route::post('/productos/store',[ProductoController::class,'store'])->name('Producto.store');
Route::get('/productos/edit/{id}',[ProductoController::class,'edit'])->name('Producto.edit');
Route::post('/productos/update/{id}',[ProductoController::class,'update'])->name('Producto.update');
Route::delete('/productos/destroy/{id}',[ProductoController::class,'destroy'])->name('Producto.destroy');

// ==========================
// Rutas Inventario
// ==========================
Route::get('/inventario/index',[InventarioController::class,'index'])->name('Inventario.index');
Route::get('/inventario/create',[InventarioController::class,'create'])->name('Inventario.create');
Route::post('/inventario/store',[InventarioController::class,'store'])->name('Inventario.store');
Route::get('/inventario/edit/{id}',[InventarioController::class,'edit'])->name('Inventario.edit');
Route::post('/inventario/update/{id}',[InventarioController::class,'update'])->name('Inventario.update');
Route::delete('/inventario/destroy/{id}',[InventarioController::class,'destroy'])->name('Inventario.destroy');

// ==========================
// Rutas Proveedores
// ==========================
Route::get('/proveedor/index',[ProveedorController::class,'index'])->name('Proveedores.index');
Route::get('/proveedor/create',[ProveedorController::class,'create'])->name('Proveedores.create');
Route::post('/proveedor/store',[ProveedorController::class,'store'])->name('Proveedores.store');
Route::get('/proveedor/edit/{id}',[ProveedorController::class,'edit'])->name('Proveedores.edit');
Route::post('/proveedor/update/{id}',[ProveedorController::class,'update'])->name('Proveedores.update');
Route::delete('/proveedor/destroy/{id}',[ProveedorController::class,'destroy'])->name('Proveedores.destroy');

// ==========================
// Rutas Facturas
// ==========================
Route::get('/factura/index',[FacturaController::class,'index'])->name('Factura.index');
Route::get('/factura/create',[FacturaController::class,'create'])->name('Factura.create');
Route::post('/factura/store',[FacturaController::class,'store'])->name('Factura.store');
Route::get('/factura/edit/{id}',[FacturaController::class,'edit'])->name('Factura.edit');
Route::post('/factura/update/{id}',[FacturaController::class,'update'])->name('Factura.update');
Route::delete('/factura/destroy/{id}',[FacturaController::class,'destroy'])->name('Factura.destroy');

// ==========================
// Dashboard
// ==========================
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');
