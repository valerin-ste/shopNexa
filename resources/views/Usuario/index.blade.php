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

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<div class="container">

@if(session('success'))
<script>
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            icon: 'success',
            title: '¡Éxito!',
            text: "{{ session('success') }}",
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
        });
    });
</script>
@endif
    
    <div class="row">

        <!-- Botón Crear -->
        <div class="mb-3">
            <a href="{{ route('Usuario.create')}}" 
               class="btn text-white rounded-pill shadow-sm"
               style="background-color: #198754;">
                <i class="bi bi-plus-circle"></i> Crear nuevo usuario
            </a>
        </div>

        <!-- BOTONES PDF -->
        <div class="mb-3">
            <a href="{{ route('Usuario.pdf.view') }}" 
               class="btn btn-outline-primary rounded-pill shadow-sm me-2">
                <i class="bi bi-filetype-pdf"></i> Ver PDF
            </a>

            <a href="{{ route('Usuario.pdf.download') }}" 
               class="btn btn-danger rounded-pill shadow-sm">
                <i class="bi bi-download"></i> Descargar PDF
            </a>
        </div>

        <!-- ⭐⭐⭐ FORMULARIO DE FILTRO (AGREGADO) ⭐⭐⭐ -->
        <div class="card shadow-sm p-3 mb-3 rounded-4">
            <form method="GET" action="{{ route('Usuario.index') }}">
                <div class="row g-3">

                    <div class="col-md-3">
                        <input type="text" name="nombre" value="{{ request('nombre') }}"
                               class="form-control rounded-pill"
                               placeholder="Buscar por nombre">
                    </div>

                    <div class="col-md-3">
                        <input type="text" name="direccion" value="{{ request('direccion') }}"
                               class="form-control rounded-pill"
                               placeholder="Buscar por dirección">
                    </div>

                    <div class="col-md-3">
                        <input type="text" name="telefono" value="{{ request('telefono') }}"
                               class="form-control rounded-pill"
                               placeholder="Buscar por teléfono">
                    </div>

                    <div class="col-md-3">
                        <input type="text" name="correoElectronico" value="{{ request('correoElectronico') }}"
                               class="form-control rounded-pill"
                               placeholder="Buscar por correo">
                    </div>

                </div>

                <div class="text-end mt-3">
                    <button class="btn btn-success rounded-pill px-4">Filtrar</button>
                    <a href="{{ route('Usuario.index') }}" class="btn btn-secondary rounded-pill px-4">
                        Limpiar
                    </a>
                </div>
            </form>
        </div>
        <!-- ⭐⭐⭐ FIN FILTRO ⭐⭐⭐ -->

        <!-- Tabla -->
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

                                <a href="{{ route('Usuario.edit', $usuario->id) }}" 
                                   class="btn btn-warning btn-sm text-dark rounded-pill shadow-sm">
                                    <i class="bi bi-pencil-square"></i> Editar
                                </a>

                                <form action="{{ route('Usuario.destroy', $usuario->id) }}" 
                                      method="POST" style="display:inline-block;">
                                    @csrf
                                    

                                    <button type="submit" class="btn btn-danger btn-sm text-white rounded-pill shadow-sm"
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

        <!-- Botón Volver -->
        <div class="mt-3">
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
        text: "No podrás revertir esto",
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
