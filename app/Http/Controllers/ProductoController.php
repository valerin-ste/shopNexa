<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductoRequest;
use App\Models\Producto;
use App\Models\Categorias;
use App\Models\Marca;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Mostrar la lista de productos.
     */
    public function index()
    {
        // Trae todos los productos con sus relaciones categoria y marca
        $productos = Producto::with(['categorias', 'marcas'])->get();
        return view('Producto.index', compact('productos'));
    }

    /**
     * Mostrar el formulario para crear un nuevo producto.
     */
    public function create()
    {
        $categorias = Categorias::all();
        $marcas = Marca::all();
        return view('Producto.create', compact('categorias', 'marcas'));
    }

    /**
     * Guardar un nuevo producto en la base de datos.
     */
    public function store(ProductoRequest $request)
    {
        Producto::create($request->validated());

        return redirect()
            ->route('Producto.index')
            ->with('success', 'Producto creado correctamente.');
    }

    /**
     * Mostrar formulario de edición.
     */
    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        $categorias = Categorias::all();
        $marcas = Marca::all();

        return view('Producto.edit', compact('producto','categorias','marcas'));
    }

    /**
     * Actualizar producto.
     */
    public function update(ProductoRequest $request, $id)
    {
        $producto = Producto::findOrFail($id);
        $producto->update($request->validated());

        return redirect()
            ->route('Producto.index')
            ->with('success', 'Producto actualizado correctamente.');
    }

    /**
     * Eliminar producto.
     */
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
}
