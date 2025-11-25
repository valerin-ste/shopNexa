<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Http\Requests\CategoriaRequest;

class CategoriasController extends Controller
{
    public function index()
    {
        $categorias = Categorias::all();
        return view('Categoria.index', compact('categorias'));
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