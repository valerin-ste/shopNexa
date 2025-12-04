@extends('layouts.app')

@section('title')
    Administrar Inventario
@endsection

@section('titleContent')
    <h1 class="text-center my-4 fw-bold">
        <i class="bi bi-box-fill text-success"></i> Administrar Inventario
    </h1>
@endsection

@section('Content')

{{-- SweetAlert de mensajes --}}
@if(session('success'))
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            Swal.fire({
                title: '¡Éxito!',
                text: '{{ session("success") }}',
                icon: 'success',
                confirmButtonText: 'Aceptar'
            });
        });
    </script>
@endif

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<div class="container">
    <div class="row">

        {{-- BOTÓN AGREGAR --}}
        <div class="mb-3">
            <a href="{{ route('Inventario.create') }}" class="btn btn-success rounded-pill shadow-sm">
                <i class="bi bi-plus-circle-fill"></i> Agregar Inventario
            </a>
        </div>

        {{--  BOTONES PDF  --}}
        <div class="mb-3">
            <a href="{{ route('Inventario.pdf.view') }}" 
               class="btn btn-primary rounded-pill shadow-sm me-2">
                <i class="bi bi-eye-fill"></i> Ver PDF
            </a>

            <a href="{{ route('Inventario.pdf.download') }}" 
               class="btn btn-danger rounded-pill shadow-sm">
                <i class="bi bi-file-earmark-pdf-fill"></i> Descargar PDF
            </a>
        </div>
    </div>

    {{-- 🔍 FILTROS --}}
    <div class="card p-3 mb-3 shadow-sm border-0 rounded-4">
        <form action="{{ route('Inventario.index') }}" method="GET" class="row g-3">
            <div class="col-md-5">
                <input type="text" name="producto" class="form-control"
                       placeholder="Buscar por nombre del producto"
                       value="{{ request('producto') }}">
            </div>

            <div class="col-md-4">
                <input type="number" name="cantidad" class="form-control"
                       placeholder="Buscar por cantidad"
                       value="{{ request('cantidad') }}">
            </div>

            <div class="col-md-3 d-flex gap-2">
                <button class="btn btn-success rounded-pill px-4">
                    <i class="bi bi-search"></i> Buscar
                </button>

                <a href="{{ route('Inventario.index') }}" class="btn btn-secondary rounded-pill px-4">
                    <i class="bi bi-arrow-repeat"></i> Limpiar
                </a>
            </div>
        </form>
    </div>

    <div class="card shadow-sm border-0 rounded-4">
        <div class="card-body">
            <table class="table table-hover text-center align-middle">
                <thead class="table-success">
                    <tr>
                        <th>ID</th>
                        <th>Cantidad</th>
                        <th>Fecha Actualización</th>
                        <th>Producto</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($inventarios as $inventario)
                    <tr>
                        <td>{{ $inventario->id }}</td>
                        <td>{{ $inventario->cantidad }}</td>
                        <td>{{ \Carbon\Carbon::parse($inventario->fechaActualizacion)->format('d/m/Y') }}</td>
                        <td>{{ $inventario->productos->nombre }}</td>

                        <td>
                            <a href="{{ route('Inventario.edit', $inventario->id) }}" 
                               class="btn btn-warning btn-sm rounded-pill">
                                <i class="bi bi-pencil-square"></i> Editar
                            </a>

                            {{-- ELIMINAR --}}
                            <form action="{{ route('Inventario.destroy', $inventario->id) }}" 
                                  method="POST" 
                                  style="display:inline;">
                                @csrf
                                <button type="submit" 
                                        class="btn btn-danger btn-sm rounded-pill"
                                        onclick="return confirm('¿Seguro que deseas eliminar este registro?');">
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

@endsection
