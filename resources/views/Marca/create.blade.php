@extends('layouts.app')

@section('title')
    Crear Marca
@endsection

@section('titleContent')
    <h1 class="text-center my-4 fw-bold">
        <i class="bi bi-star-fill" style="color:#0dcaf0;"></i> Administrar Marcas
    </h1>
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

                    <form action="{{ route('Marca.store') }}" method="POST">
                        @csrf

                        
                        <div class="mb-3">
                            <label for="nombre" class="form-label fw-semibold">
                                <i class="bi bi-pencil-fill"></i> Nombre
                            </label>
                            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingrese el nombre">
                        </div>

                       
                        <div class="mb-3">
                            <label for="descripcion" class="form-label fw-semibold">
                                <i class="bi bi-card-text"></i> Descripción
                            </label>
                            <textarea id="descripcion" name="descripcion" class="form-control" rows="3" placeholder="Ingrese una descripción"></textarea>
                        </div>

                       
                        <div class="text-center mt-4">
                            <button type="submit" class="btn text-white rounded-pill px-4 shadow"
                                    style="background-color: #0dcaf0;">
                                <i class="bi bi-check-circle-fill"></i> Guardar Marca
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection