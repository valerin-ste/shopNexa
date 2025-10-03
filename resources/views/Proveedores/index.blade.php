@extends('layouts.app')

@section('title')
    Administrar Proveedores
@endsection

@section('titleContent')
    <h1 class="text-center my-4 fw-bold">
        <i class="bi bi-truck text-warning"></i> Administrar Proveedores
    </h1>
@endsection

@section('Content')
<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<div class="container">
    <div class="row">

        <!-- Botón crear -->
        <div class="mb-3">
            <a href="{{ route('Proveedores.create')}}" class="btn btn-warning text-white rounded-pill shadow-sm">
                <i class="bi bi-plus-circle-fill"></i> Crear un nuevo proveedor
            </a>
        </div>

        <!-- Tabla de proveedores -->
        <div class="card shadow-sm border-0 rounded-4">
            <div class="card-body">
                <table class="table table-hover align-middle">
                    <thead class="table-warning">
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
                        @foreach ($proveedor as $proveedor)
                        <tr>
                            <td>{{ $proveedor->id }}</td>
                            <td>{{ $proveedor->nombre }}</td>
                            <td>{{ $proveedor->direccion }}</td>
                            <td>{{ $proveedor->telefono }}</td>
                            <td>{{ $proveedor->correoElectronico }}</td>
                            <td class="text-center">
                               
                                <a href="{{ route('Proveedores.edit',$proveedor->id) }}" 
                                   class="btn btn-warning btn-sm text-white rounded-pill">
                                    <i class="bi bi-pencil-square"></i> Editar
                                </a>

                            
                                  <form action="{{ route('Proveedores.destroy', $proveedor->id) }}" method="POST" style="display:inline-block;">
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