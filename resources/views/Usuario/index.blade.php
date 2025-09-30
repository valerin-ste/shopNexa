@extends('layouts.app')

@section('title')
    Administrar Usuarios
@endsection

@section('titleContent')
    <h1 class="text-center my-4 fw-bold">
        <i class="bi bi-people-fill text-primary"></i> Administrar Usuarios
    </h1>
@endsection

@section('Content')
<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<div class="container">
    <div class="row">

        <!-- Botón crear -->
        <div class="mb-3">
            <a href="{{ route('Usuario.create')}}" class="btn btn-primary rounded-pill shadow-sm">
                <i class="bi bi-person-plus-fill"></i> Crear un nuevo usuario
            </a>
        </div>

        <!-- Tabla de usuarios -->
        <div class="card shadow-sm border-0 rounded-4">
            <div class="card-body">
                <table class="table table-hover align-middle">
                    <thead class="table-primary">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Dirección</th>
                            <th>Teléfono</th>
                            <th>Correo Electrónico</th>
                            <th class="text-center">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuarios as $usuario)
                        <tr>
                            <td>{{ $usuario->id }}</td>
                            <td>{{ $usuario->nombre }}</td>
                            <td>{{ $usuario->direccion }}</td>
                            <td>{{ $usuario->telefono }}</td>
                            <td>{{ $usuario->correoElectronico }}</td>
                            <td class="text-center">
                                <a href="{{ route('Usuario.edit',$usuario->id) }}" class="btn btn-success btn-sm rounded-pill">
                                    <i class="bi bi-pencil-square"></i> Editar
                                </a>

                                <form action="{{ route('Usuario.destroy', $usuario->id) }}" method="POST" style="display:inline-block;">
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