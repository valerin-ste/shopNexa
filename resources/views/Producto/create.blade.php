@extends('layouts.app')

@section('title')
    Crear Producto
@endsection

@section('titleContent')
    <h1 class="text-center fw-bold text-dark">
        <i class="bi bi-box-seam text-success"></i> Crear Producto
    </h1>
@endsection

@section('Content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-8">

            <!-- Botón volver -->
            <a href="{{ route('Producto.index') }}" class="btn btn-outline-secondary mb-3 rounded-pill shadow-sm">
                <i class="bi bi-arrow-left-circle"></i> Volver
            </a>

            <!-- Card -->
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-4">
                    <form action="{{ route('Producto.store') }}" method="POST">
                        @csrf

                        <!-- Nombre -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                <i class="bi bi-tag"></i> Nombre
                            </label>
                            <input type="text" name="nombre" class="form-control rounded-3" placeholder="Ingrese el nombre del producto" required>
                        </div>

                        <!-- Descripción -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                <i class="bi bi-card-text"></i> Descripción
                            </label>
                            <textarea name="descripcion" class="form-control rounded-3" rows="3" placeholder="Ingrese una breve descripción" required></textarea>
                        </div>

                        <!-- Precio y Fecha -->
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">
                                    <i class="bi bi-cash-coin"></i> Precio (COP)
                                </label>
                                <input type="number" name="precio" class="form-control rounded-3" placeholder="Ej: 50000" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">
                                    <i class="bi bi-calendar-event"></i> Fecha de Compra
                                </label>
                                <input type="date" name="fechaCompra" class="form-control rounded-3">
                            </div>
                        </div>

                        <!-- Cantidad -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                <i class="bi bi-box"></i> Cantidad
                            </label>
                            <input type="number" name="cantidad" class="form-control rounded-3" placeholder="Ej: 10" required>
                        </div>

                        <!-- Categoría y Marca -->
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">
                                    <i class="bi bi-diagram-3"></i> Categoría
                                </label>
                                <select name="idCategorias" class="form-select rounded-3" required>
                                    <option value="">Seleccione una categoría</option>
                                    @foreach($categorias as $categoria)
                                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">
                                    <i class="bi bi-star"></i> Marca
                                </label>
                                <select name="idMarcas" class="form-select rounded-3" required>
                                    <option value="">Seleccione una marca</option>
                                    @foreach($marcas as $marca)
                                        <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Botón -->
                        <div class="d-grid mt-4">
                            <button type="submit" class="btn btn-success btn-lg rounded-3 shadow-sm">
                                <i class="bi bi-save2"></i> Guardar Producto
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection