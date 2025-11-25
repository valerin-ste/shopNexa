@extends('layouts.app')

@section('title')
    Administrar Productos
@endsection

@section('titleContent')
    <div class="text-center my-4">
        <h1 class="fw-bold text-dark p-3 rounded-3" style="background-color: #e7f8ec;">
            <i class="bi bi-box-seam text-success"></i> Administrar Productos
        </h1>
    </div>
@endsection

@section('Content')

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<div class="container">

    {{-- ALERTA ÉXITO --}}
    @if(session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: '¡Éxito!',
                text: "{{ session('success') }}",
                confirmButtonText: 'Aceptar',
                timer: 3000
            });
        });
    </script>
    @endif

    {{-- ALERTA ERROR --}}
    @if(session('error'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: '¡Atención!',
                text: "{{ session('error') }}",
                confirmButtonText: 'Aceptar',
            });
        });
    </script>
    @endif

    <div class="row">

        <!-- Botón crear -->
        <div class="mb-3">
            <a href="{{ route('Producto.create')}}" 
               class="btn text-white rounded-pill shadow-sm"
               style="background-color: #198754;">
                <i class="bi bi-plus-circle"></i> Crear nuevo producto
            </a>
        </div>

        <!-- Tabla de productos -->
        <div class="card shadow-lg border-0 rounded-4">
            <div class="card-body">
                <table class="table table-hover align-middle">
                    <thead style="background-color: #198754; color: white;">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                            <th>Fecha Compra</th>
                            <th>Cantidad</th>
                            <th>Categoría</th>
                            <th>Marca</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productos as $producto)
                        <tr>
                            <td>{{ $producto->id }}</td>
                            <td>{{ $producto->nombre }}</td>
                            <td>{{ $producto->descripcion }}</td>
                            <td>${{ number_format($producto->precio, 0, ',', '.') }}</td>
                            <td>{{ $producto->fechaCompra }}</td>
                            <td>{{ $producto->cantidad }}</td>
                            <td>{{ $producto->categorias->nombre ?? 'Sin categoría' }}</td>
                            <td>{{ $producto->marcas->nombre ?? 'Sin marca' }}</td>

                            <td class="text-center">

                                <!-- Botón Editar -->
                                <a href="{{ route('Producto.edit', $producto->id) }}" 
                                   class="btn btn-warning btn-sm text-dark rounded-pill shadow-sm">
                                    <i class="bi bi-pencil-square"></i> Editar
                                </a>

                                <!-- Botón Eliminar -->
                                <form action="{{ route('Producto.destroy', $producto->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">
                                    Eliminar
                                </button>
                            </form>

                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Botón Volver --}}
        <div class="mt-3 d-flex justify-content-start">
            <a href="{{ route('welcome') }}" class="btn btn-outline-success rounded-pill px-4">
                <i class="bi bi-arrow-left-circle"></i> Volver
            </a>
        </div>

    </div>
</div>

<script>
    function confirmarEliminacion(event) {
        event.preventDefault();
        const form = event.target.closest('form');

        Swal.fire({
            title: '¿Estás seguro?',
            text: "¡No podrás revertir esto!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, eliminar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
    }
</script>

@endsection