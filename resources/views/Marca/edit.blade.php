@extends('layouts.app')

@section('title')
    Editar Marca
@endsection

@section('titleContent')
    <div class="text-center my-4">
        <h1 class="fw-bold text-dark p-3 rounded-3">
            <i class="bi bi-pencil-square" style="color:#198754;"></i> Editar Marca
        </h1>
    </div>
@endsection

@section('Content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="mb-3 text-start">
                <a href="{{ route('Marca.index') }}" class="btn btn-outline-secondary rounded-pill shadow-sm">
                    <i class="bi bi-arrow-left-circle"></i> Volver
                </a>
            </div>

            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-4">

                    <form action="{{ route('Marca.update', $marca->id) }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="nombre" class="form-label fw-semibold" style="color:#198754;">
                                <i class="bi bi-pencil-fill"></i> Nombre
                            </label>
                            <input type="text" id="nombre" name="nombre" class="form-control" 
                                   value="{{ old('nombre', $marca->nombre) }}" placeholder="Ingrese el nombre">
                            @error('nombre')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="descripcion" class="form-label fw-semibold" style="color:#198754;">
                                <i class="bi bi-card-text"></i> Descripción
                            </label>
                            <textarea id="descripcion" name="descripcion" class="form-control" rows="3" 
                                      placeholder="Ingrese una descripción">{{ old('descripcion', $marca->descripcion ?? '') }}</textarea>
                            @error('descripcion')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="text-center mt-4">
                            <button type="submit" class="btn text-dark rounded-pill px-4 shadow"
                                    style="background-color: #ffc107;">
                                <i class="bi bi-arrow-repeat"></i> Actualizar Marca
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
