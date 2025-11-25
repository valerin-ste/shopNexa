@extends('layouts.app')

@section('title', 'Editar Proveedor')

@section('Content')

<div class="container mt-4">
    <h2 class="text-center mb-4">Editar Proveedor</h2>

    <form action="{{ route('Proveedores.update', $proveedor->id) }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{ $proveedor->nombre }}">
            @error('nombre')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Dirección</label>
            <input type="text" name="direccion" class="form-control" value="{{ $proveedor->direccion }}">
            @error('direccion')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Teléfono</label>
            <input type="text" name="telefono" class="form-control" value="{{ $proveedor->telefono }}">
            @error('telefono')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Correo Electrónico</label>
            <input type="email" name="correoElectronico" class="form-control" value="{{ $proveedor->correoElectronico }}">
            @error('correoElectronico')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- BOTÓN AMARILLO -->
        <button class="btn btn-warning text-dark fw-bold">Actualizar</button>

        <a href="{{ route('Proveedores.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

@endsection
