<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

//Rutas Usuarios
Route::get('/usuarios/index',[UsuarioController::class,'index'])->name('Usuario.index');
Route::get('/usuarios/create',[UsuarioController::class,'create'])->name('Usuario.create');
Route::post('/usuarios/store',[UsuarioController::class,'store'])->name('Usuario.store');
Route::get('/usuarios/edit/{id}',[UsuarioController::class,'edit'])->name('Usuario.edit');
Route::post('/usuarios/update/{id}',[UsuarioController::class,'update'])->name('Usuario.update');
Route::post('/usuarios/destroy/{id}',[UsuarioController::class,'destroy'])->name('Usuario.destroy');

//Rutas Marcas
Route::get('/marcas/index',[MarcaController::class,'index'])->name('Marca.index');
Route::get('/marcas/create',[MarcaController::class,'create'])->name('Marca.create');
Route::post('/marcas/store',[MarcaController::class,'store'])->name('Marca.store');
Route::get('/marcas/edit/{id}',[MarcaController::class,'edit'])->name('Marca.edit');
Route::post('/marcas/update/{id}',[MarcaController::class,'update'])->name('Marca.update');
Route::post('/marcas/destroy/{id}', [MarcaController::class, 'destroy'])->name('Marca.destroy');


//Rutas Categorias
Route::get('/categorias/index',[CategoriasController::class,'index'])->name('Categoria.index');
Route::get('/categorias/create',[CategoriasController::class,'create'])->name('Categoria.create');
Route::post('/categorias/store',[CategoriasController::class,'store'])->name('Categoria.store');
Route::get('/categorias/edit/{id}',[CategoriasController::class,'edit'])->name('Categoria.edit');
Route::post('/categorias/update/{id}',[CategoriasController::class,'update'])->name('Categoria.update');
Route::post('/categorias/destroy/{id}',[CategoriasController::class,'destroy'])->name('Categoria.destroy');

//Rutas Producto
Route::get('/productos/index',[ProductoController::class,'index'])->name('Producto.index');
Route::get('/productos/create',[ProductoController::class,'create'])->name('Producto.create');
Route::post('/productos/store',[ProductoController::class,'store'])->name('Producto.store');
Route::get('/productos/edit/{id}',[ProductoController::class,'edit'])->name('Producto.edit');
Route::post('/productos/update/{id}',[ProductoController::class,'update'])->name('Producto.update');
Route::post('/productos/destroy/{id}',[ProductoController::class,'destroy'])->name('Producto.destroy');

