@extends('layouts.app')

@section('title')
    Editar Factura
@endsection

@section('titleContent')
    <h1 class="text-center my-4 fw-bold">
        <i class="bi bi-pencil-square text-dark"></i> Editar Factura
    </h1>
@endsection

@section('Content')
<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <!-- Tarjeta de formulario -->
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body">
                    <form action="{{ route('Factura.update', $factura->id) }}" method="POST">
                        @csrf
                       

                        <!-- Fecha de Emisión -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                <i class="bi bi-calendar-date"></i> Fecha de Emisión
                            </label>
                            <input type="date" name="fechaEmision" class="form-control" 
                                   value="{{ $factura->fechaEmision }}" required>
                        </div>

                        <!-- Monto Total -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                <i class="bi bi-cash-coin"></i> Monto Total
                            </label>
                            <input type="number" step="0.01" name="montoTotal" class="form-control" 
                                   value="{{ $factura->montoTotal }}" required>
                        </div>

                        <!-- Usuario -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                <i class="bi bi-person-circle"></i> Usuario
                            </label>
                            <select name="idUsuarios" class="form-select" required>
                                @foreach($usuarios as $usuario)
                                    <option value="{{ $usuario->id }}" 
                                        {{ $factura->idUsuarios == $usuario->id ? 'selected' : '' }}>
                                        {{ $usuario->nombre }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Botón actualizar -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-dark rounded-pill shadow-sm px-4">
                                <i class="bi bi-arrow-repeat"></i> Actualizar Factura
                            </button>
                        </div>

                    </form>
                </div>
            </div>

            <!-- Botón volver -->
            <div class="mt-3 text-center">
                <a href="{{ route('Factura.index') }}" class="btn btn-outline-secondary rounded-pill">
                    <i class="bi bi-arrow-left-circle"></i> Volver
                </a>
            </div>

        </div>
    </div>
</div>
@endsection
