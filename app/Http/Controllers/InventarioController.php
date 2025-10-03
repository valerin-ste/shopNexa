<?php

namespace App\Http\Controllers;


use App\Models\Inventario;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventarios = Inventario::all();

        return view('Inventario.index',compact('inventarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Inventario.create', compact('productos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Inventario::create(
            $request->all()
        );

        return redirect()->route('Inventario.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
      $inventarios = Inventario::findOrFail($id);
       
      return view('Inventario.edit', compact('productos'));  
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $inventarios = Inventario::findorfail($id);
        
        $inventarios->update( $request->all() );

        return redirect()->route('Inventario.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $inventarios = Inventario::findorFail($id);
        $inventarios->delete();
        return redirect()->route('Inventario.index');
    }
}

