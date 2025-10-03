@extends('layouts.app')

@section('title', 'Editar Proveedor')

@section('titleContent')
    <div class="py-3 mb-4" style="background-color: #fde68a;">
        <h1 class="text-center fw-bold text-dark">
            <i class="bi bi-pencil-square text-warning"></i> Editar Proveedor
        </h1>
    </div>
@endsection

@section('Content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="mt-3">
            <a href="{{ route('welcome') }}" class="btn btn-outline-secondary rounded-pill">
                <i class="bi bi-arrow-left-circle"></i> Volver
            </a>
        </div>

            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-4">
                    <form action="{{ route('Proveedores.update', $proveedor->id) }}" method="POST">
                        @csrf
                     

                        <div class="mb-3">
                            <label class="form-label fw-bold"><i class="bi bi-person-fill"></i> Nombre</label>
                            <input type="text" name="nombre" class="form-control" 
                                   value="{{ $proveedor->nombre }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold"><i class="bi bi-geo-alt-fill"></i> Dirección</label>
                            <input type="text" name="direccion" class="form-control" 
                                   value="{{ $proveedor->direccion }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold"><i class="bi bi-telephone-fill"></i> Teléfono</label>
                            <input type="text" name="telefono" class="form-control" 
                                   value="{{ $proveedor->telefono }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold"><i class="bi bi-envelope-fill"></i> Correo Electrónico</label>
                            <input type="email" name="correoElectronico" class="form-control" 
                                   value="{{ $proveedor->correoElectronico }}" required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn text-dark fw-bold" style="background-color: #facc15;">
                                <i class="bi bi-pencil-square"></i> Actualizar Proveedor
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection