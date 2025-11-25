<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use App\Models\Producto; 
use Illuminate\Http\Request;
use App\Http\Requests\InventarioRequest;

class InventarioController extends Controller
{
    public function index()
    {            
        $inventarios = Inventario::all();
        return view('Inventario.index', compact('inventarios'));
    }

    public function create()
    {
        $productos = Producto::all();
        return view('Inventario.create', compact('productos'));
    }

    public function store(InventarioRequest $request)
    {
        Inventario::create($request->validated());
        return redirect()->route('Inventario.index')
            ->with('success', 'Inventario creado correctamente.');
    }

    public function edit($id)
    {
        $inventarios = Inventario::findOrFail($id);
        $productos = Producto::all();
        return view('Inventario.edit', compact('inventarios', 'productos'));
    }

    public function update(InventarioRequest $request, $id)
    {
        $inventarios = Inventario::findOrFail($id);
        $inventarios->update($request->validated());

        return redirect()->route('Inventario.index')
            ->with('success', 'Inventario actualizado correctamente.');
    }

    // 🔥 DELETE SIN MÉTODO DELETE — SOLO GET
    public function destroy($id)
    {
        $inventarios = Inventario::findOrFail($id);
        $inventarios->delete();

        return redirect()->route('Inventario.index')
            ->with('success', 'Inventario eliminado correctamente.');
    }
}