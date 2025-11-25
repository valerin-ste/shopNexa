<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use App\Models\Usuarios;
use App\Http\Requests\FacturaRequest;

class FacturaController extends Controller
{
    public function index()
    {
        $facturas = Factura::with('usuario')->get();
        return view('Factura.index', compact('facturas'));
    }

    public function create()
    {
        $usuarios = Usuarios::all();
        return view('Factura.create', compact('usuarios'));
    }

    public function store(FacturaRequest $request)
    {
        Factura::create($request->validated());
        return redirect()->route('Factura.index')
                         ->with('success', 'Factura creada correctamente.');
    }

    public function edit($id)
    {
        $factura = Factura::findOrFail($id);
        $usuarios = Usuarios::all();

        return view('Factura.edit', compact('factura', 'usuarios'));
    }

    public function update(FacturaRequest $request, $id)
    {
        $factura = Factura::findOrFail($id);
        $factura->update($request->validated());

        return redirect()->route('Factura.index')
                         ->with('success', 'Factura actualizada correctamente.');
    }

    public function destroy($id)
    {
        $factura = Factura::findOrFail($id);
        $factura->delete();

        return redirect()->route('Factura.index')
                         ->with('success', 'Factura eliminada correctamente.');
    }
}