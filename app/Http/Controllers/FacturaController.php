<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use App\Models\Usuarios;   
use App\Http\Requests\FacturaRequest;
use Barryvdh\DomPDF\Facade\Pdf;

class FacturaController extends Controller
{
    public function index()
    {
        $usuarios = Usuarios::all();

        $facturas = Factura::with('usuario')
            ->when(request('usuario'), function ($query) {
                $query->where('idUsuarios', request('usuario'));
            })
            ->get();

        return view('Factura.index', compact('facturas', 'usuarios'));
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
            ->with('success', 'Factura creada exitosamente.');
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

    public function verPDF($id)
    {
        $factura = Factura::with('usuario')->findOrFail($id);

        $pdf = Pdf::loadView('Factura.pdf', compact('factura'))
                  ->setPaper('letter', 'portrait');

        return $pdf->stream("Factura_{$factura->id}.pdf");
    }

    public function descargarPDF($id)
    {
        $factura = Factura::with('usuario')->findOrFail($id);

        $pdf = Pdf::loadView('Factura.pdf', compact('factura'))
                  ->setPaper('letter', 'portrait');

        return $pdf->download("Factura_{$factura->id}.pdf");
    }
}
