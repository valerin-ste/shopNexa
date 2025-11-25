@extends('layouts.app')

@section('title')
    Editar Inventario
@endsection

@section('titleContent')
    <div class="text-center my-4">
        <h1 class="fw-bold text-dark p-3 rounded-3" style="background-color: #e7f8ec;">
            <i class="bi bi-box-seam text-success"></i> Editar Inventario
        </h1>
    </div>
@endsection

@section('Content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <!-- Botón volver -->
            <div class="mb-3 text-start">
                <a href="{{ route('Inventario.index') }}" class="btn btn-outline-secondary rounded-pill shadow-sm">
                    <i class="bi bi-arrow-left-circle"></i> Volver
                </a>
            </div>

            <!-- Tarjeta -->
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-4">

                    <form action="{{ route('Inventario.update', $inventarios->id) }}" method="POST">
                        @csrf
                       
                        
                        <!-- Cantidad -->
                        <div class="mb-3">
                            <label for="cantidad" class="form-label fw-semibold">
                                <i class="bi bi text-success"></i> Cantidad
                            </label>
                            <input type="number" id="cantidad" name="cantidad" class="form-control"
                                   value="{{ $inventarios->cantidad }}" required>
                        </div>

                        <!-- Fecha (SOLO FECHA, sin hora) -->
                        <div class="mb-3">
                            <label for="fechaActualizacion" class="form-label fw-semibold">
                                <i class="bi bi-calendar-check text-success"></i> Fecha de Actualización
                            </label>
                            <input type="date" id="fechaActualizacion" name="fechaActualizacion" class="form-control"
                                   value="{{ \Carbon\Carbon::parse($inventarios->fechaActualizacion)->format('Y-m-d') }}" required>
                        </div>

                        <!-- Producto -->
                        <div class="mb-3">
                            <label for="idProductos" class="form-label fw-semibold">
                                <i class="bi bi-box text-success"></i> Producto
                            </label>
                            <select id="idProductos" name="idProductos" class="form-select" required>
                                <option value="">Seleccione un producto</option>
                                @foreach ($productos as $producto)
                                    <option value="{{ $producto->id }}" 
                                        {{ $inventarios->idProductos == $producto->id ? 'selected' : '' }}>
                                        {{ $producto->nombre }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Botón actualizar -->
                        <div class="text-center mt-4">
                            <button type="submit" class="btn text-white rounded-pill px-4 shadow"
                                    style="background-color: #198754;">
                                <i class="bi bi-arrow-repeat"></i> Actualizar Inventario
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection