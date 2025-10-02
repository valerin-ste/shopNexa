@extends('layouts.app')

@section('title')
    Editar Categoría
@endsection

@section('titleContent')
    <div class="text-center my-4">
        <h1 class="fw-bold text-dark p-3 rounded-3" >
            <i class="bi bi-pencil-square"></i> Editar Categoria
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
                <a href="{{ route('Categoria.index') }}" class="btn btn-outline-secondary rounded-pill shadow-sm">
                    <i class="bi bi-arrow-left-circle"></i> Volver
                </a>
            </div>

            <!-- Tarjeta de formulario -->
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-4">

                    <form action="{{ route('Categoria.update', $categorias->id) }}" method="POST">
                        @csrf

                        <!-- Nombre -->
                        <div class="mb-3">
                            <label for="nombre" class="form-label fw-semibold">
                                <i class="bi bi-pencil-fill"></i> Nombre
                            </label>
                            <input type="text" id="nombre" name="nombre" class="form-control" 
                                   value="{{ $categorias->nombre }}" placeholder="Ingrese el nombre">
                        </div>

                        <!-- Descripción -->
                        <div class="mb-3">
                            <label for="descripcion" class="form-label fw-semibold">
                                <i class="bi bi-card-text"></i> Descripción
                            </label>
                            <textarea id="descripcion" name="descripcion" class="form-control" rows="3" 
                                      placeholder="Ingrese una descripción">{{ $categorias->descripcion }}</textarea>
                        </div>

                        <!-- Botón actualizar -->
                        <div class="text-center mt-4">
                            <button type="submit" class="btn text-white rounded-pill px-4 shadow"
                                    style="background-color: #6c757d;">
                                <i class="bi bi-arrow-repeat"></i> Actualizar Categoría
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection