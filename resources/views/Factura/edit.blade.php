@extends('layouts.app')

@section('title', 'Editar Factura')

@section('Content')
<div class="container mt-4">
    <h2 class="text-center mb-4">Editar Factura</h2>

    <form action="{{ route('Factura.update', $factura->id) }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Fecha de Emisión</label>
            <input type="date" name="fechaEmision" class="form-control" value="{{ $factura->fechaEmision }}">
            @error('fechaEmision')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Monto Total</label>
            <input type="number" step="0.01" name="montoTotal" class="form-control" value="{{ $factura->montoTotal }}">
            @error('montoTotal')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Usuario</label>
            <select name="idUsuarios" class="form-control">
                <option value="">-- Seleccionar usuario --</option>
                @foreach($usuarios as $usuario)
                    <option value="{{ $usuario->id }}" {{ $factura->idUsuarios == $usuario->id ? 'selected' : '' }}>
                        {{ $usuario->nombre }}
                    </option>
                @endforeach
            </select>
            @error('idUsuarios')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- BOTÓN AMARILLO -->
        <button class="btn btn-warning text-dark fw-bold">Actualizar</button>

        <a href="{{ route('Factura.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
