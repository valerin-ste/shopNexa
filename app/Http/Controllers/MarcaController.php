<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $marcas = Marca::all();

        return view('Marca.index',compact('marcas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Marca.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Marca::create(
            $request->all()
        );

        return redirect()->route('Marca.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
      $marca = Marca::findOrFail($id);
       
      return view('Marca.edit', compact('marca'));  
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $marca = Marca::findorfail($id);
        
        $marca->update( $request->all() );

        return redirect()->route('Marca.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $marca = Marca::findorFail($id);
        $marca->delete();
        return redirect()->route('Marca.index');
    }
}

