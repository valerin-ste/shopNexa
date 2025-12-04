@extends('layouts.app')

@section('title') Editar Producto @endsection

@section('titleContent')
<div class="text-center my-4">
    <h1 class="fw-bold text-dark p-3 rounded-3" style="background-color: #e7f8ec;">
        <i class="bi bi-pencil-square text-success"></i> Editar Producto
    </h1>
</div>
@endsection

@section('Content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="mb-3 text-start">
                <a href="{{ route('Producto.index') }}" class="btn btn-outline-success rounded-pill shadow-sm">
                    <i class="bi bi-arrow-left-circle"></i> Volver
                </a>
            </div>

            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-4">

                    <form action="{{ route('Producto.update', $producto->id) }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label fw-semibold text-success">Nombre del Producto</label>
                            <input type="text" name="nombre" class="form-control" value="{{ $producto->nombre }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold text-success">Descripción</label>
                            <textarea name="descripcion" class="form-control">{{ $producto->descripcion }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold text-success">Precio</label>
                            <input type="number" step="0.01" name="precio" class="form-control" value="{{ $producto->precio }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold text-success">Fecha de Compra</label>
                            <input type="date" name="fechaCompra" class="form-control" value="{{ $producto->fechaCompra }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold text-success">Cantidad</label>
                            <input type="number" name="cantidad" class="form-control" value="{{ $producto->cantidad }}">
                        </div>

                        <!-- Categoría -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold text-success">Categoría</label>
                            <select name="idCategorias" class="form-control">
                                @foreach($categorias as $cat)
                                    <option value="{{ $cat->id }}" {{ $producto->idCategorias == $cat->id ? 'selected' : '' }}>
                                        {{ $cat->nombre }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Marca -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold text-success">Marca</label>
                            <select name="idMarcas" class="form-control">
                                @foreach($marcas as $mar)
                                    <option value="{{ $mar->id }}" {{ $producto->idMarcas == $mar->id ? 'selected' : '' }}>
                                        {{ $mar->nombre }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="text-center mt-4">
                            <button type="submit" class="btn text-white rounded-pill px-4 shadow" style="background-color: #198754;">
                                <i class="bi bi-arrow-repeat"></i> Actualizar Producto
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection
