@extends('layouts.app')

@section('title')
    Administrar Facturas
@endsection

@section('titleContent')
    <h1 class="text-center my-4 fw-bold">
        <i class="bi bi-receipt text-success"></i> Administrar Facturas
    </h1>
@endsection

@section('Content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

@if(session('success'))
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            Swal.fire({
                icon: "success",
                title: "¡Éxito!",
                text: "{{ session('success') }}",
                confirmButtonText: "Aceptar",
                confirmButtonColor: "#198754",
            });
        });
    </script>

    <div class="alert alert-success text-center fw-bold rounded-pill">
        {{ session('success') }}
    </div>
@endif

<div class="container">
    <div class="row">

        <!-- Botón crear -->
        <div class="mb-3">
            <a href="{{ route('Factura.create')}}" 
               class="btn btn-success rounded-pill shadow-sm">
                <i class="bi bi-plus-circle"></i> Crear nueva factura
            </a>
        </div>

        <!-- Tabla -->
        <div class="card shadow-sm border-0 rounded-4">
            <div class="card-body">
                <table class="table table-hover align-middle">
                    <thead class="table-success text-dark">
                        <tr>
                            <th>ID</th>
                            <th>Fecha de Emisión</th>
                            <th>Monto Total</th>
                            <th>Usuario</th>
                            <th class="text-center">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($facturas as $factura)
                        <tr>
                            <td>{{ $factura->id }}</td>
                            <td>{{ $factura->fechaEmision }}</td>
                            <td>${{ number_format($factura->montoTotal, 2) }}</td>
                            <td>{{ $factura->usuario->nombre }}</td>

                            <td class="text-center d-flex gap-1 justify-content-center">

                                <!-- Botón editar (verde claro) -->
                                <a href="{{ route('Factura.edit', $factura->id) }}" 
                                   class="btn btn-outline-success btn-sm rounded-pill fw-bold">
                                    <i class="bi bi-pencil-square"></i> Editar
                                </a>

                                <!-- Form eliminar (verde fuerte) -->
                                <form action="{{ route('Factura.destroy', $factura->id) }}" 
                                      method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-success btn-sm rounded-pill"
                                            style="background-color:#0f5132; border:none;">
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
