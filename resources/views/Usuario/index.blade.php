@extends('layouts.app')

@section('title')
    Administrar Usuarios
@endsection

@section('titleContent')
    <div class="text-center my-4">
        <h1 class="fw-bold text-dark p-3 rounded-3" style="background-color: #e7f8ec;">
            <i class="bi bi-people-fill text-success"></i> Administrar Usuarios
        </h1>
    </div>
@endsection

@section('Content')

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<div class="container">

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
            <a href="{{ route('Usuario.create')}}" 
               class="btn text-white rounded-pill shadow-sm"
               style="background-color: #198754;">
                <i class="bi bi-plus-circle"></i> Crear nuevo usuario
            </a>
        </div>

        <!-- Tabla de usuarios -->
        <div class="card shadow-lg border-0 rounded-4">
            <div class="card-body">
                <table class="table table-hover align-middle">
                    <thead style="background-color: #198754; color: white;">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Dirección</th>
                            <th>Teléfono</th>
                            <th>Correo Electrónico</th>
                            <th class="text-center">Acciones</th>
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

                                <!-- Botón Editar (Amarillo) -->
                                <a href="{{ route('Usuario.edit', $usuario->id) }}" 
                                   class="btn btn-warning btn-sm text-dark rounded-pill shadow-sm">
                                    <i class="bi bi-pencil-square"></i> Editar
                                </a>

                                <!-- Botón Eliminar (Verde) -->
                                <form action="{{ route('Usuario.destroy', $usuario->id) }}" 
                                      method="POST" style="display:inline-block;">
                                    @csrf
                                    <button type="submit" class="btn btn-success btn-sm text-white rounded-pill shadow-sm"
                                         onclick="confirmarEliminacion(event)">
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
