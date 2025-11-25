@extends('layouts.app')

@section('title')
    Crear Inventario
@endsection

@section('titleContent')
    <h1 class="text-center my-4 fw-bold">
        <i class="bi bi-box-fill text-success"></i> Crear Inventario
    </h1>
@endsection

@section('Content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm border-0 rounded-4 p-4">
                <form action="{{ route('Inventario.store') }}" method="POST">
                    @csrf

                    {{-- Producto --}}
                    <div class="mb-3">
                        <label for="idProductos" class="form-label fw-bold text-success">Producto</label>
                        <select name="idProductos" id="idProductos" class="form-select rounded-pill shadow-sm @error('idProductos') is-invalid @enderror">
                            <option value="">Seleccione un producto</option>
                            @foreach ($productos as $producto)
                                <option value="{{ $producto->id }}" {{ old('idProductos') == $producto->id ? 'selected' : '' }}>
                                    {{ $producto->nombre }}
                                </option>
                            @endforeach
                        </select>
                        @error('idProductos')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Cantidad --}}
                    <div class="mb-3">
                        <label for="cantidad" class="form-label fw-bold text-success">Cantidad</label>
                        <input type="number" name="cantidad" id="cantidad" 
                               class="form-control rounded-pill shadow-sm @error('cantidad') is-invalid @enderror"
                               value="{{ old('cantidad') }}">
                        @error('cantidad')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Fecha --}}
                    <div class="mb-3">
                        <label for="fechaActualizacion" class="form-label fw-bold text-success">Fecha de Actualización</label>
                        <input type="date" name="fechaActualizacion" id="fechaActualizacion" 
                               class="form-control rounded-pill shadow-sm @error('fechaActualizacion') is-invalid @enderror"
                               value="{{ old('fechaActualizacion') }}">
                        @error('fechaActualizacion')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-success rounded-pill px-4 shadow-sm">
                            <i class="bi bi-save-fill"></i> Guardar
                        </button>
                        <a href="{{ route('Inventario.index') }}" class="btn btn-outline-success rounded-pill px-4 ms-2 shadow-sm">
                            <i class="bi bi-arrow-left-circle"></i> Cancelar
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection