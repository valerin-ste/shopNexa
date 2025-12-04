<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsuarioRequest;
use App\Models\Usuarios;
use Illuminate\Http\Request;
use PDF;

class UsuarioController extends Controller
{
    public function index(Request $request)
    {
        $usuarios = Usuarios::query()

            ->when($request->nombre, function($q) use ($request) {
                $q->where('nombre', 'LIKE', "%{$request->nombre}%");
            })

            ->when($request->direccion, function($q) use ($request) {
                $q->where('direccion', 'LIKE', "%{$request->direccion}%");
            })

            ->when($request->telefono, function($q) use ($request) {
                $q->where('telefono', 'LIKE', "%{$request->telefono}%");
            })

            ->when($request->correoElectronico, function($q) use ($request) {
                $q->where('correoElectronico', 'LIKE', "%{$request->correoElectronico}%");
            })

            ->get();

        return view('Usuario.index', compact('usuarios'));
    }

    public function create()
    {
        return view('Usuario.create');
    }

    public function store(UsuarioRequest $request)
    {
        Usuarios::create($request->validated());
        return redirect()->route('Usuario.index')->with('success', 'Usuario creado correctamente.');
    }

    public function edit($id)
    {
        $usuario = Usuarios::findOrFail($id);
        return view('Usuario.edit', compact('usuario'));
    }

    public function update(UsuarioRequest $request, $id)
    {
        $usuario = Usuarios::findOrFail($id);
        $usuario->update($request->validated());
        return redirect()->route('Usuario.index')->with('success', 'Usuario actualizado correctamente.');
    }

    public function destroy($id)
    {
        $usuario = Usuarios::findOrFail($id);
        $usuario->delete();
        return redirect()->route('Usuario.index')->with('success', 'Usuario eliminado correctamente.');
    }

    public function pdfView()
    {
        $usuarios = Usuarios::all();
        return view('Usuario.pdf', compact('usuarios'));
    }

    public function pdfDownload()
    {
        $usuarios = Usuarios::all();
        $pdf = PDF::loadView('Usuario.pdf', compact('usuarios'));
        return $pdf->download('usuarios.pdf');
    }
}
