<?php

namespace App\Http\Controllers;
use App\Models\Usuarios;
use App\Models\Factura;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $factura = Factura::all();
        return view('Factura.index', compact('factura'));
    }

    /**
     * Show the form for creating a new resource.
     */
public function create()
{
    $usuarios = Usuarios::all();
    return view('Factura.create', compact('usuarios'));
}



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Factura::create($request->all());
        return redirect()->route('Factura.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
   public function edit($id)
{
    $factura = Factura::findOrFail($id);
    $usuarios = Usuarios::all(); 

    return view('Factura.edit', compact('factura', 'usuarios'));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $factura = Factura::findOrFail($id);
        $factura->update($request->all());
        return redirect()->route('Factura.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $factura = Factura::findOrFail($id);
        $factura->delete();
        return redirect()->route('Factura.index');
    }
}
