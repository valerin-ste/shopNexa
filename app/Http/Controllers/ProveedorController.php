<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $proveedor = Proveedor::all();

         return view('Proveedores.index',compact('proveedor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Proveedores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Proveedor::create(
            $request->all()
        );

        return redirect()->route('Proveedores.index');
    }

   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
         $proveedor = Proveedor::findorfail($id);

        return view('Proveedores.edit',compact('proveedor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $proveedor = Proveedor::findorfail($id);
        
        $proveedor->update( $request->all() );

        return redirect()->route('Proveedores.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $proveedor = Proveedor::findorFail($id);
        $proveedor->delete();

        return redirect()->route('Proveedores.index');
    }
}
