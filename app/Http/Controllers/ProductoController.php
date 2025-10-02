<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\Marca;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::all();

        return view('Producto.index',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    $categorias = Categorias::all();
    $marcas = Marca::all();

    return view('Producto.create', compact('categorias', 'marcas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Producto::create(
            $request->all()
        );

        return redirect()->route('Producto.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
    $producto = Producto::findOrFail($id);
    $categorias = Categorias::all();
    $marcas = Marca::all();

    return view('Producto.edit', compact('producto', 'categorias', 'marcas'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $producto = Producto::findorfail($id);
        
        $producto->update( $request->all() );

        return redirect()->route('Producto.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $producto = Producto::findorFail($id);
        $producto->delete();

        return redirect()->route('Producto.index');
    }
}
