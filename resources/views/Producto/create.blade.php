@extends('layouts.app')

@section('title') Crear Producto @endsection

@section('titleContent')
<div class="text-center my-4">
    <h1 class="fw-bold text-dark p-3 rounded-3" style="background-color: #e7f8ec;">
        <i class="bi bi-bag-plus-fill text-success"></i> Crear Producto
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

                    <form action="{{ route('Producto.store') }}" method="POST">
                        @csrf

                        <!-- Nombre -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold text-success">
                                <i class="bi bi-tag-fill"></i> Nombre
                            </label>
                            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror">
                            @error('nombre') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- Descripción -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold text-success">
                                <i class="bi bi-textarea-t"></i> Descripción
                            </label>
                            <textarea name="descripcion" class="form-control @error('descripcion') is-invalid @enderror"></textarea>
                            @error('descripcion') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- Precio -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold text-success">
                                <i class="bi bi-currency-dollar"></i> Precio
                            </label>
                            <input type="number" step="0.01" name="precio" class="form-control @error('precio') is-invalid @enderror">
                            @error('precio') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- Fecha Compra -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold text-success">
                                <i class="bi bi-calendar-date-fill"></i> Fecha de Compra
                            </label>
                            <input type="date" name="fechaCompra" class="form-control @error('fechaCompra') is-invalid @enderror">
                            @error('fechaCompra') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- Cantidad -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold text-success">Cantidad</label>
                            <input type="number" name="cantidad" class="form-control @error('cantidad') is-invalid @enderror">
                            @error('cantidad') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- Categoría -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold text-success">Categoría</label>
                            <select name="idCategorias" class="form-control">
                                <option value="">Seleccione...</option>
                                @foreach($categorias as $c)
                                    <option value="{{ $c->id }}">{{ $c->nombre }}</option>
                                @endforeach
                            </select>
                            @error('idCategorias') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <!-- Marca -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold text-success">Marca</label>
                            <select name="idMarcas" class="form-control">
                                <option value="">Seleccione...</option>
                                @foreach($marcas as $m)
                                    <option value="{{ $m->id }}">{{ $m->nombre }}</option>
                                @endforeach
                            </select>
                            @error('idMarcas') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="text-center mt-4">
                            <button type="submit" class="btn text-white rounded-pill px-4 shadow" style="background-color: #198754;">
                                <i class="bi bi-check-circle-fill"></i> Guardar Producto
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection
