<?php

namespace App\Http\Controllers;
use App\Http\Requests\UsuarioRequest;
use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = Usuarios::all();

        return view('Usuario.index',compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Usuarios::create(
            $request->all()
        );

        return redirect()->route('Usuario.index');
    }

   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
         $usuario = Usuarios::findorfail($id);

        return view('Usuario.edit',compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $usuario = Usuarios::findorfail($id);
        
        $usuario->update( $request->all() );

        return redirect()->route('Usuario.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $usuario = Usuarios::findorFail($id);
        $usuario->delete();

        return redirect()->route('Usuario.index');
    }

}