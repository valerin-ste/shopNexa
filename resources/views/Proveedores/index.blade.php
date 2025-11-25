@extends('layouts.app')

@section('title')
    Administrar Proveedores
@endsection

@section('titleContent')
    <h1 class="text-center my-4 fw-bold">
        <i class="bi bi-truck text-success"></i> Administrar Proveedores
    </h1>
@endsection

@section('Content')

{{-- SWEETALERT MENSAJE --}}
@if(session('success'))
<script>
    Swal.fire({
        icon: "success",
        title: "¡Éxito!",
        text: "{{ session('success') }}",
        confirmButtonText: "Aceptar",
        confirmButtonColor: "#6f42c1"
    });
</script>
@endif

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<div class="container">
    <div class="row">

        {{-- Botón Agregar --}}
        <div class="mb-3">
            <a href="{{ route('Proveedores.create') }}" class="btn btn-success rounded-pill shadow-sm">
                <i class="bi bi-plus-circle-fill"></i> Agregar Proveedor
            </a>
        </div>

        {{-- Tabla --}}
        <div class="card shadow-sm border-0 rounded-4">
            <div class="card-body">
                <table class="table table-hover text-center align-middle">
                    <thead class="table-success">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Teléfono</th>
                            <th>Correo</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($proveedor as $p)
                        <tr>
                            <td>{{ $p->id }}</td>
                            <td>{{ $p->nombre }}</td>
                            <td>{{ $p->telefono }}</td>
                            <td>{{ $p->correo }}</td>
                            <td>

                                <a href="{{ route('Proveedores.edit', $p->id) }}" class="btn btn-warning btn-sm rounded-pill">
                                    <i class="bi bi-pencil-square"></i> Editar
                                </a>

                                {{-- FORMULARIO ELIMINAR --}}
                                <form action="{{ route('Proveedores.destroy', $p->id) }}" 
                                      method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')

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

        <div class="mt-3">
            <a href="{{ route('welcome') }}" class="btn btn-outline-success rounded-pill">
                <i class="bi bi-arrow-left-circle"></i> Volver
            </a>
        </div>

    </div>
</div>
@endsection