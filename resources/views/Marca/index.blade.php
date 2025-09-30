@extends('layouts.app')

@section('title')
    Marcas
@endsection

@section('titleContent')
    <h1 class="text-center my-4 fw-light">Gestión de Marcas</h1>
@endsection

@section('Content')

<div class="container">
    <div class="row mb-4">
        <div class="col text-end">
            <a href="{{ route('Marca.create') }}" class="btn text-white" 
               style="background-color: #1d4ed8;"> <!-- azul igual al welcome -->
                <i class="bi bi-plus-circle"></i> Crear Marca
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <table class="table table-bordered text-center align-middle shadow-sm">
                <thead class="text-white" style="background-color: #1e40af;"> <!-- azul más oscuro -->
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($marcas as $marca)
                        <tr>
                            <td>{{ $marca->id }}</td>
                            <td>{{ $marca->nombre }}</td>
                            <td>{{ $marca->descripcion }}</td>
                            <td>
                                <a href="{{ route('Marca.edit', $marca->id) }}" 
                                   class="btn btn-sm text-white" style="background-color: #2563eb;">
                                    <i class="bi bi-pencil-square"></i> Editar
                                </a>
                                <form action="{{ route('Marca.destroy', $marca->id) }}" method="POST" 
                                      style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="btn btn-sm text-white" style="background-color: #dc2626;"
                                            onclick="return confirm('¿Seguro que deseas eliminar esta marca?')">
                                        <i class="bi bi-trash"></i> Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection