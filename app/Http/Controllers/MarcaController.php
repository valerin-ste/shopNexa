<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use App\Http\Requests\MarcaRequest;

class MarcaController extends Controller
{
    public function index()
    {
        // FILTRO
        $buscar = request()->input('buscar');

        $marcas = Marca::when($buscar, function ($query) use ($buscar) {
            $query->where('nombre', 'LIKE', "%$buscar%")
                  ->orWhere('descripcion', 'LIKE', "%$buscar%");
        })->get();

        return view('Marca.index', compact('marcas', 'buscar'));
    }

    public function create()
    {
        return view('Marca.create');
    }

    public function store(MarcaRequest $request)
    {
        Marca::create($request->validated());

        return redirect()
            ->route('Marca.index')
            ->with('success', 'Marca creada correctamente.');
    }

    public function edit($id)
    {
        $marca = Marca::findOrFail($id);
        return view('Marca.edit', compact('marca'));
    }

    public function update(MarcaRequest $request, $id)
    {
        $marca = Marca::findOrFail($id);
        $marca->update($request->validated());

        return redirect()
            ->route('Marca.index')
            ->with('success', 'Marca actualizada correctamente.');
    }

    public function destroy($id)
    {
        $marca = Marca::findOrFail($id);
        $marca->delete();

        return redirect()
            ->route('Marca.index')
            ->with('success', 'Marca eliminada correctamente.');
    }
}
