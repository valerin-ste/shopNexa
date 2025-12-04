@extends('layouts.app')

@section('title')
    Crear Categoría
@endsection

@section('titleContent')
    <div class="text-center my-4">
        <h1 class="fw-bold text-dark p-3 rounded-3" style="background-color: #e7f8ec;">
            <i class="bi bi-tags-fill text-success"></i> Crear Categoría
        </h1>
    </div>
@endsection

@section('Content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body">

                    <form action="{{ route('Categoria.store') }}" method="POST">
                        @csrf

                        <!-- Nombre -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Nombre</label>
                            <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}">
                        </div>

                        <!-- Descripción -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Descripción</label>
                            <textarea name="descripcion" class="form-control" rows="3">{{ old('descripcion') }}</textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn text-white rounded-pill px-4" style="background-color:#198754;">
                                Guardar Categoría
                            </button>
                        </div>
                    </form>

                </div>
            </div>

            <div class="text-center mt-3">
                <a href="{{ route('Categoria.index') }}" class="btn btn-outline-success rounded-pill">
                    Volver
                </a>
            </div>

        </div>
    </div>
</div>

@endsection
