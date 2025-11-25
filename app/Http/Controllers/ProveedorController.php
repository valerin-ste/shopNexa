<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use App\Http\Requests\ProveedorRequest;

class ProveedorController extends Controller
{
    public function index()
    {
        $proveedor = Proveedor::all();
        return view('Proveedores.index', compact('proveedor'));
    }

    public function create()
    {
        return view('Proveedores.create');
    }

    public function store(ProveedorRequest $request)
    {
        Proveedor::create($request->validated());

        return redirect()
            ->route('Proveedores.index')
            ->with('success', 'Proveedor creado correctamente.');
    }

    public function edit($id)
    {
        $proveedor = Proveedor::findOrFail($id);
        return view('Proveedores.edit', compact('proveedor'));
    }

    public function update(ProveedorRequest $request, $id)
    {
        $proveedor = Proveedor::findOrFail($id);
        $proveedor->update($request->validated());

        return redirect()
            ->route('Proveedores.index')
            ->with('success', 'Proveedor actualizado correctamente.');
    }

    public function destroy($id)
    {
        $proveedor = Proveedor::findOrFail($id);
        $proveedor->delete();

        return redirect()
            ->route('Proveedores.index')
            ->with('success', 'Proveedor eliminado correctamente.');
    }
}