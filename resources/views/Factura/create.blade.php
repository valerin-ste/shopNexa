@extends('layouts.app')

@section('title', 'Crear Factura')

@section('Content')
<div class="container mt-4">
    <h2 class="text-center mb-4">Crear Factura</h2>

    <form action="{{ route('Factura.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Fecha de Emisión</label>
            <input type="date" name="fechaEmision" class="form-control" value="{{ old('fechaEmision') }}">
            @error('fechaEmision')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Monto Total</label>
            <input type="number" step="0.01" name="montoTotal" class="form-control" value="{{ old('montoTotal') }}">
            @error('montoTotal')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Usuario</label>
            <select name="idUsuarios" class="form-control">
                <option value="">Seleccionar usuario</option>
                @foreach($usuarios as $usuario)
                    <option value="{{ $usuario->id }}" {{ old('idUsuarios') == $usuario->id ? 'selected' : '' }}>
                        {{ $usuario->nombre }}
                    </option>
                @endforeach
            </select>
            @error('idUsuarios')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button class="btn btn-success">Guardar</button>
        <a href="{{ route('Factura.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection