<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use App\Models\Producto; 
use Illuminate\Http\Request;
use App\Http\Requests\InventarioRequest;
use Barryvdh\DomPDF\Facade\Pdf; 

class InventarioController extends Controller
{
    public function index(Request $request)
    {            
        $query = Inventario::with('productos');

        // FILTRO POR NOMBRE DE PRODUCTO
        if ($request->filled('producto')) {
            $query->whereHas('productos', function ($q) use ($request) {
                $q->where('nombre', 'LIKE', '%' . $request->producto . '%');
            });
        }

        // FILTRO POR CANTIDAD
        if ($request->filled('cantidad')) {
            $query->where('cantidad', $request->cantidad);
        }

        $inventarios = $query->get();

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

    public function destroy($id)
    {
        $inventarios = Inventario::findOrFail($id);
        $inventarios->delete();

        return redirect()->route('Inventario.index')
            ->with('success', 'Inventario eliminado correctamente.');
    }

    public function pdfView()
    {
        $inventarios = Inventario::with('productos')->get();
        $pdf = Pdf::loadView('Inventario.pdf', compact('inventarios'));
        return $pdf->stream('Inventario.pdf');
    }

    public function pdfDownload()
    {
        $inventarios = Inventario::with('productos')->get();
        $pdf = Pdf::loadView('Inventario.pdf', compact('inventarios'));
        return $pdf->download('Inventario.pdf');
    }
}
