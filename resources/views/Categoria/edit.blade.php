@extends('layouts.app')

@section('title')
    Editar Categoría
@endsection

@section('titleContent')
    <div class="text-center my-4">
        <h1 class="fw-bold text-dark p-3 rounded-3" style="background-color: #e7f8ec;">
            <i class="bi bi-pencil-square text-success"></i> Editar Categoría
        </h1>
    </div>
@endsection

@section('Content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <a href="{{ route('Categoria.index') }}" class="btn btn-outline-success mb-3 rounded-pill">
                Volver
            </a>

            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-4">

                    <form action="{{ route('Categoria.update', $categorias->id) }}" method="POST">
                        @csrf

                        <!-- Nombre -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Nombre</label>
                            <input type="text" name="nombre" class="form-control"
                                   value="{{ old('nombre', $categorias->nombre) }}">
                        </div>

                        <!-- Descripción -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Descripción</label>
                            <textarea name="descripcion" class="form-control">{{ old('descripcion', $categorias->descripcion) }}</textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn text-white rounded-pill px-4" style="background-color:#198754;">
                                Actualizar Categoría
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection
