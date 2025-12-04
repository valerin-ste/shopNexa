<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Http\Requests\CategoriaRequest;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function index(Request $request)
    {
        $buscar = $request->input('buscar');

        // Cargar categorías + productos (necesario para los modales)
        $categorias = Categorias::with('productos')
            ->when($buscar, function ($query, $buscar) {
                return $query->where('nombre', 'LIKE', "%$buscar%");
            })
            ->get();

        return view('Categoria.index', compact('categorias', 'buscar'));
    }

    public function create()
    {
        return view('Categoria.create');
    }

    public function store(CategoriaRequest $request)
    {
        $categoria = new Categorias();
        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;

        if ($request->hasFile("imagen")) {
            $archivo = $request->file("imagen");
            $nombreImagen = time() . "_" . $archivo->getClientOriginalName();
            $archivo->move(public_path("categorias"), $nombreImagen);
            $categoria->imagen = $nombreImagen;
        }

        $categoria->save();

        return redirect()->route('Categoria.index')->with('success', 'Categoría creada correctamente.');
    }

    public function edit($id)
    {
        $categorias = Categorias::findOrFail($id);
        return view('Categoria.edit', compact('categorias'));
    }

    public function update(CategoriaRequest $request, $id)
    {
        $categoria = Categorias::findOrFail($id);

        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;

        if ($request->hasFile("imagen")) {

            if ($categoria->imagen && file_exists(public_path("categorias/" . $categoria->imagen))) {
                unlink(public_path("categorias/" . $categoria->imagen));
            }

            $archivo = $request->file("imagen");
            $nombreImagen = time() . "_" . $archivo->getClientOriginalName();
            $archivo->move(public_path("categorias"), $nombreImagen);
            $categoria->imagen = $nombreImagen;
        }

        $categoria->save();

        return redirect()->route('Categoria.index')->with('success', 'Categoría actualizada correctamente.');
    }

    public function destroy($id)
    {
        $categoria = Categorias::findOrFail($id);

        if ($categoria->imagen && file_exists(public_path("categorias/" . $categoria->imagen))) {
            unlink(public_path("categorias/" . $categoria->imagen));
        }

        $categoria->delete();

        return redirect()->route('Categoria.index')->with('success', 'Categoría eliminada correctamente.');
    }
}