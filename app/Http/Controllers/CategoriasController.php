<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
   
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categorias::all();

        return view('Categoria.index',compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Categorias::create(
            $request->all()
        );

        return redirect()->route('Categoria.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
         $categorias = Categorias::findorfail($id);

        return view('Categoria.edit',compact('categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $categorias = Categorias::findorfail($id);
        
        $categorias->update( $request->all() );

        return redirect()->route('Categoria.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $categorias = Categorias::findorFail($id);
        $categorias->delete();

        return redirect()->route('Categoria.index');
    }
}
