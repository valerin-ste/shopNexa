<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductoRequest;
use App\Models\Producto;
use App\Models\Categorias;
use App\Models\Marca;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ProductoController extends Controller
{
    /**
     * Mostrar la lista de productos con filtros.
     */
    public function index(Request $request)
    {
        $productos = Producto::with(['categorias', 'marcas'])
            ->when($request->nombre, function($q) use ($request) {
                $q->where('nombre', 'LIKE', "%{$request->nombre}%");
            })
            ->when($request->descripcion, function($q) use ($request) {
                $q->where('descripcion', 'LIKE', "%{$request->descripcion}%");
            })
            ->when($request->categoria_id, function($q) use ($request) {
                $q->where('categoria_id', $request->categoria_id);
            })
            ->when($request->marca_id, function($q) use ($request) {
                $q->where('marca_id', $request->marca_id);
            })
            ->get();

        $categorias = Categorias::all();
        $marcas = Marca::all();

        return view('Producto.index', compact('productos', 'categorias', 'marcas'));
    }

    public function create()
    {
        $categorias = Categorias::all();
        $marcas = Marca::all();
        return view('Producto.create', compact('categorias', 'marcas'));
    }

    public function store(ProductoRequest $request)
    {
        Producto::create($request->validated());

        return redirect()
            ->route('Producto.index')
            ->with('success', 'Producto creado correctamente.');
    }

    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        $categorias = Categorias::all();
        $marcas = Marca::all();

        return view('Producto.edit', compact('producto','categorias','marcas'));
    }

    public function update(ProductoRequest $request, $id)
    {
        $producto = Producto::findOrFail($id);
        $producto->update($request->validated());

        return redirect()
            ->route('Producto.index')
            ->with('success', 'Producto actualizado correctamente.');
    }

    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);

        try {
            $producto->delete();
            return redirect()
                ->route('Producto.index')
                ->with('success', 'Producto eliminado correctamente.');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()
                ->route('Producto.index')
                ->with('error', 'No se puede eliminar este producto porque tiene registros asociados.');
        }
    }

    public function pdf()
    {
        $productos = Producto::with(['categorias', 'marcas'])->get();
        $pdf = Pdf::loadView('Producto.pdf', compact('productos'));
        return $pdf->stream('ListadoProductos.pdf');
    }

    public function pdfDownload()
    {
        $productos = Producto::with(['categorias', 'marcas'])->get();
        $pdf = Pdf::loadView('Producto.pdf', compact('productos'));
        return $pdf->download('ListadoProductos.pdf');
    }
}
