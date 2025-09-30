@extends('layouts.app')

@section('title')
    Editar Usuario
@endsection

@section('titleContent')
    <div class="text-center my-4">
        <h1 class="fw-bold text-dark p-3 rounded-3" style="background-color: #cfe2ff;">
            <i class="bi bi-pencil-square"></i> Editar Usuario
        </h1>
    </div>
@endsection

@section('Content')
<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <!-- Botón volver -->
            <div class="mb-3 text-start">
                <a href="{{ route('Usuario.index') }}" class="btn btn-outline-secondary rounded-pill shadow-sm">
                    <i class="bi bi-arrow-left-circle"></i> Volver
                </a>
            </div>

            <!-- Tarjeta de formulario -->
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-4">

                    <form action="{{ route('Usuario.update', $usuario->id) }}" method="POST">
                        @csrf

                        <!-- Nombre -->
                        <div class="mb-3">
                            <label for="nombre" class="form-label fw-semibold">
                                <i class="bi bi-person-fill"></i> Nombre
                            </label>
                            <input type="text" id="nombre" name="nombre" class="form-control"
                                   value="{{ $usuario->nombre }}" >

                        <!-- Dirección -->
                        <div class="mb-3">
                            <label for="direccion" class="form-label fw-semibold">
                                <i class="bi bi-geo-alt-fill"></i> Dirección
                            </label>
                            <input type="text" id="direccion" name="direccion" class="form-control"
                                   value="{{ $usuario->direccion }}" >
                        </div>

                        <!-- Teléfono -->
                        <div class="mb-3">
                            <label for="telefono" class="form-label fw-semibold">
                                <i class="bi bi-telephone-fill"></i> Teléfono
                            </label>
                            <input type="text" id="telefono" name="telefono" class="form-control"
                                   value="{{ $usuario->telefono }}" >
                        </div>

                        <!-- Correo Electrónico -->
                        <div class="mb-3">
                            <label for="correoElectronico" class="form-label fw-semibold">
                                <i class="bi bi-envelope-fill"></i> Correo Electrónico
                            </label>
                            <input type="email" id="correoElectronico" name="correoElectronico" class="form-control"
                                   value="{{ $usuario->correoElectronico }}">

                        <!-- Botón actualizar -->
                        <div class="text-center mt-4">
                            <button type="submit" class="btn text-white rounded-pill px-4 shadow"
                                    style="background-color: #2563eb;">
                                <i class="bi bi-arrow-repeat"></i> Actualizar Usuario
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection