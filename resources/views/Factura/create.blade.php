@extends('layouts.app')

@section('title')
    Crear Factura
@endsection

@section('titleContent')
    <div class="text-center my-4">
        <h1 class="fw-bold text-dark p-3 rounded-3" style="background-color: #e7f8ec;">
            <i class="bi bi-receipt text-success"></i> Crear Nueva Factura
        </h1>
    </div>
@endsection

@section('Content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<div class="container">

    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body">

            <form action="{{ route('Factura.store') }}" method="POST">
                @csrf

                <div class="row">

                    {{-- Número de factura --}}
                    <div class="col-12 mb-3">
                        <label class="form-label fw-bold">Número de Factura:</label>
                        <input type="text" name="numeroFactura" class="form-control rounded-pill">
                        @error('numeroFactura') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    {{-- Fecha de emisión --}}
                    <div class="col-12 mb-3">
                        <label class="form-label fw-bold">Fecha de Emisión:</label>
                        <input type="date" name="fechaEmision" class="form-control rounded-pill">
                        @error('fechaEmision') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    {{-- Usuario --}}
                    <div class="mb-3">
                        <label for="idUsuarios" class="form-label fw-bold text-success">Usuario</label>
                        <select name="idUsuarios" id="idUsuarios"
                                class="form-select rounded-pill shadow-sm">
                            <option value="">Seleccione un usuario</option>

                            @foreach ($usuarios as $usuario)
                                <option value="{{ $usuario->id }}">
                                    {{ $usuario->nombre }}
                                </option>
                            @endforeach
                        </select>
                        @error('idUsuarios') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>


                    {{-- Método de Pago --}}
                    <div class="col-12 mb-3">
                        <label class="form-label fw-bold">Método de Pago:</label>
                        <select name="metodoPago" class="form-control rounded-pill">
                            <option value="Efectivo">Efectivo</option>
                            <option value="Transferencia">Transferencia</option>
                        </select>
                    </div>

                    {{-- Estado del Pago --}}
                    <div class="col-12 mb-3">
                        <label class="form-label fw-bold">Estado del Pago:</label>
                        <select name="estadoPago" class="form-control rounded-pill">
                            <option value="Pendiente">Pendiente</option>
                            <option value="Pagado">Pagado</option>
                            <option value="Vencido">Vencido</option>
                        </select>
                    </div>

                    {{-- Monto Total --}}
                    <div class="col-12 mb-3">
                        <label class="form-label fw-bold">Monto Total:</label>
                        <input type="number" step="0.01" name="montoTotal" class="form-control rounded-pill">
                        @error('montoTotal') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    {{-- Notas --}}
                    <div class="col-12 mb-3">
                        <label class="form-label fw-bold">Notas:</label>
                        <textarea name="notas" class="form-control rounded-4"></textarea>
                    </div>

                </div>

                {{-- Botón Guardar --}}
                <div class="text-center">
                    <button type="submit" class="btn text-white rounded-pill px-5 shadow-sm"
                            style="background-color: #198754;">
                        <i class="bi bi-check2-circle"></i> Guardar Factura
                    </button>
                </div>

            </form>

        </div>
    </div>

    {{-- Botón Volver --}}
    <div class="mt-3 d-flex justify-content-start">
        <a href="{{ route('Factura.index') }}" class="btn btn-outline-success rounded-pill px-4">
            <i class="bi bi-arrow-left-circle"></i> Volver
        </a>
    </div>

</div>

@endsection
