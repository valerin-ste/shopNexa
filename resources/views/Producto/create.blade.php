@extends('layouts.app')

@section('title')
    Crear Producto
@endsection

@section('titleContent')
    <h1 class="text-center my-4 fw-bold text-primary">
        <i class="bi bi-box-seam"></i> Crear un nuevo producto
    </h1>
@endsection

@section('Content')
<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body">
                    <form action="{{ route('Producto.store') }}" method="POST">
                        @csrf

                        <!-- Nombre del producto -->
                        <div class="mb-3">
                            <label for="nombre" class="form-label fw-bold">Nombre del producto</label>
                            <input type="text" name="nombre" id="nombre" class="form-control rounded-pill" placeholder="Ej: Laptop Dell" required>
                        </div>

                        <!-- Precio -->
                        <div class="mb-3">
                            <label for="precio" class="form-label fw-bold">Precio</label>
                            <input type="number" name="precio" id="precio" class="form-control rounded-pill" placeholder="Ej: 1500000" required>
                        </div>

                        <!-- Stock -->
                        <div class="mb-3">
                            <label for="stock" class="form-label fw-bold">Stock</label>
                            <input type="number" name="stock" id="stock" class="form-control rounded-pill" placeholder="Ej: 25" required>
                        </div>

                        <!-- Categoría -->
                        <div class="mb-3">
                            <label for="categoria_id" class="form-label fw-bold">Categoría</label>
                            <select name="categoria_id" id="categoria_id" class="form-select rounded-pill" required>
                                <option value="" selected disabled>-- Selecciona una categoría --</option>
                                @foreach($categorias as $categoria)
                                    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Marca -->
                        <div class="mb-3">
                            <label for="marca_id" class="form-label fw-bold">Marca</label>
                            <select name="marca_id" id="marca_id" class="form-select rounded-pill" required>
                                <option value="" selected disabled>-- Selecciona una marca --</option>
                                @foreach($marcas as $marca)
                                    <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Botones -->
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('Producto.index') }}" class="btn btn-outline-secondary rounded-pill">
                                <i class="bi bi-arrow-left-circle"></i> Volver
                            </a>
                            <button type="submit" class="btn btn-primary rounded-pill">
                                <i class="bi bi-save"></i> Guardar Producto
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection