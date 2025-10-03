@extends('layouts.app')

@section('title')
    Crear Proveedor
@endsection

@section('titleContent')
    <div class="text-center my-4">
        <h1 class="fw-bold text-dark">
            <i class="bi bi-truck text-warning"></i> Crear Proveedor
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
                <a href="{{ route('Proveedores.index') }}" class="btn btn-outline-secondary rounded-pill shadow-sm">
                    <i class="bi bi-arrow-left-circle"></i> Volver
                </a>
            </div>

            <!-- Tarjeta de formulario -->
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-4">

                    <form action="{{ route('Proveedores.store') }}" method="POST">
                        @csrf

                        <!-- Nombre -->
                        <div class="mb-3">
                            <label for="nombre" class="form-label fw-semibold">
                                <i class="bi bi-person-fill"></i> Nombre
                            </label>
                            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingrese el nombre del proveedor" required>
                        </div>

                        <!-- Dirección -->
                        <div class="mb-3">
                            <label for="direccion" class="form-label fw-semibold">
                                <i class="bi bi-geo-alt-fill"></i> Dirección
                            </label>
                            <input type="text" id="direccion" name="direccion" class="form-control" placeholder="Ingrese la dirección" required>
                        </div>

                        <!-- Teléfono -->
                        <div class="mb-3">
                            <label for="telefono" class="form-label fw-semibold">
                                <i class="bi bi-telephone-fill"></i> Teléfono
                            </label>
                            <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Ingrese el número de teléfono" required>
                        </div>

                        <!-- Correo Electrónico -->
                        <div class="mb-3">
                            <label for="correoElectronico" class="form-label fw-semibold">
                                <i class="bi bi-envelope-fill"></i> Correo Electrónico
                            </label>
                            <input type="email" id="correoElectronico" name="correoElectronico" class="form-control" placeholder="Ingrese el correo electrónico" required>
                        </div>

                        <!-- Botón guardar -->
                        <div class="text-center mt-4">
                            <button type="submit" class="btn text-white rounded-pill px-4 shadow"
                                    style="background-color: #ffc107;">
                                <i class="bi bi-check-circle-fill"></i> Guardar Proveedor
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection