<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use App\Http\Requests\ProveedorRequest;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function index(Request $request)
    {
        $query = Proveedor::query();

        // FILTRO POR NOMBRE
        if ($request->filled('nombre')) {
            $query->where('nombre', 'LIKE', '%' . $request->nombre . '%');
        }

        // FILTRO POR TELÉFONO
        if ($request->filled('telefono')) {
            $query->where('telefono', 'LIKE', '%' . $request->telefono . '%');
        }

        // FILTRO POR CORREO
        if ($request->filled('correoElectronico')) {
            $query->where('correoElectronico', 'LIKE', '%' . $request->correoElectronico . '%');
        }

        $proveedor = $query->get();

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

    public function pdf()
    {
        $proveedores = Proveedor::all();
        $pdf = Pdf::loadView('Proveedores.pdf', compact('proveedores'));
        return $pdf->stream('ListadoProveedores.pdf');
    }

    public function pdfDownload()
    {
        $proveedores = Proveedor::all();
        $pdf = Pdf::loadView('Proveedores.pdf', compact('proveedores'));
        return $pdf->download('ListadoProveedores.pdf');
    }
}
