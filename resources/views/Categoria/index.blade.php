@extends('layouts.app')

@section('title')
    Categorías
@endsection

@section('titleContent')
    <h1 class="text-center my-4 fw-bold">
        <i class="bi bi-tags-fill" style="color: #6b7280;"></i> Administrar Categorías
    </h1>
@endsection

@section('Content')
<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<div class="container">
    <div class="row">

        <!-- Botón crear -->
        <div class="mb-3">
            <a href="{{ route('Categoria.create')}}" class="btn text-white rounded-pill shadow-sm"
               style="background-color: #6b7280;">
                <i class="bi bi-plus-circle"></i> Crear nueva categoría
            </a>
        </div>

        <!-- Tabla de categorías -->
        <div class="card shadow-sm border-0 rounded-4">
            <div class="card-body">
                <table class="table table-hover align-middle">
                    <thead style="background-color: #9ca3af; color: white;">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th class="text-center">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categorias as $categoria)
                        <tr>
                            <td>{{ $categoria->id }}</td>
                            <td>{{ $categoria->nombre }}</td>
                            <td>{{ $categoria->descripcion }}</td>
                            <td class="text-center">
                                <a href="{{ route('Categoria.edit',$categoria->id) }}" 
                                   class="btn btn-sm text-white rounded-pill" style="background-color: #6b7280;">
                                    <i class="bi bi-pencil-square"></i> Editar
                                </a>

                                <form action="{{ route('Categoria.destroy', $categoria->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    <button class="btn btn-danger btn-sm rounded-pill">
                                        <i class="bi bi-trash-fill"></i> Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Botón volver -->
        <div class="mt-3"> 
            <a href="{{ route('welcome') }}" class="btn btn-outline-secondary rounded-pill">
                <i class="bi bi-arrow-left-circle"></i> Volver
            </a>
        </div>

    </div>
</div>
@endsection