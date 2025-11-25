@extends('layouts.app')

@section('title')
    Administrar Marcas
@endsection

@section('titleContent')
    <h1 class="text-center my-4 fw-bold text-success">
        <i class="bi bi-tags-fill text-success"></i> Administrar Marcas
    </h1>
@endsection

@section('Content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

{{-- MENSAJE SWEETALERT --}}
@if (session('success'))
<script>
    document.addEventListener("DOMContentLoaded", () => {
        Swal.fire({
            icon: "success",
            title: "¡Éxito!",
            text: "{{ session('success') }}",
            confirmButtonText: "Aceptar",
            confirmButtonColor: "#28a745" // verde
        });
    });
</script>
@endif

<div class="container">
    <div class="row">

        <!-- Botón crear -->
        <div class="mb-3">
            <a href="{{ route('Marca.create')}}" 
               class="btn btn-success rounded-pill shadow-sm">
                <i class="bi bi-plus-circle"></i> Crear nueva marca
            </a>
        </div>

        <!-- Tabla -->
        <div class="card shadow-sm border-0 rounded-4">
            <div class="card-body">
                <table class="table table-hover align-middle">
                    <thead class="table-success">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th class="text-center">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($marcas as $marca)
                        <tr>
                            <td>{{ $marca->id }}</td>
                            <td>{{ $marca->nombre }}</td>
                            <td class="text-center">

                                <!-- Editar (AMARILLO) -->
                                <a href="{{ route('Marca.edit',$marca->id) }}" 
                                   class="btn btn-warning btn-sm rounded-pill text-dark">
                                    <i class="bi bi-pencil-square"></i> Editar
                                </a>

                                <!-- Eliminar (ROJO) -->
                                <form action="{{ route('Marca.destroy', $marca->id) }}" 
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

        <!-- Botón volver -->
        <div class="mt-3"> 
            <a href="{{ route('welcome') }}" 
               class="btn btn-outline-success rounded-pill">
                <i class="bi bi-arrow-left-circle"></i> Volver
            </a>
        </div>

    </div>
</div>

@endsection
