@extends('layouts.app')

@section('title')
    Administrar Facturas
@endsection

@section('titleContent')
    <div class="text-center my-4">
        <h1 class="fw-bold text-dark p-3 rounded-3" style="background-color: #e7f8ec;">
            <i class="bi bi-receipt-cutoff text-success"></i> Administrar Facturas
        </h1>
    </div>
@endsection

@section('Content')

<link rel="stylesheet" 
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<div class="container">

    {{-- Alertas --}}
    @if(session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: '¡Éxito!',
                    text: "{{ session('success') }}",
                    timer: 3000
                });
            });
        </script>
    @endif

    @if(session('error'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: '¡Atención!',
                    text: "{{ session('error') }}",
                });
            });
        </script>
    @endif


    {{-- ============================
        FORMULARIO DE FILTRO
    ============================= --}}
    <form method="GET" action="{{ route('Factura.index') }}" class="d-flex gap-3 mb-4">

        <!-- Filtro por usuario -->
        <select name="usuario" 
                class="form-select rounded-pill shadow-sm"
                style="max-width: 300px;">
            <option value=""> Filtrar por usuario </option>

            @foreach ($usuarios as $usuario)
                <option value="{{ $usuario->id }}"
                    {{ request('usuario') == $usuario->id ? 'selected' : '' }}>
                    {{ $usuario->nombre }}
                </option>
            @endforeach
        </select>

        <!-- Botón Buscar -->
        <button type="submit" 
                class="btn text-white rounded-pill shadow-sm px-4"
                style="background-color: #198754;">
            <i class="bi bi-search"></i> Buscar
        </button>

        <!-- Botón Limpiar -->
        <a href="{{ route('Factura.index') }}"
           class="btn btn-outline-secondary rounded-pill shadow-sm px-4">
            <i class="bi bi-arrow-clockwise"></i> Limpiar
        </a>
    </form>



    {{-- BOTÓN CREAR FACTURA --}}
    <div class="d-flex gap-3 mb-3">

        <a href="{{ route('Factura.create')}}" 
           class="btn text-white rounded-pill shadow-sm"
           style="background-color: #198754;">
            <i class="bi bi-plus-circle"></i> Crear nueva factura
        </a>

    </div>



    {{-- TABLA DE FACTURAS --}}
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body">
            <table class="table table-hover align-middle">
                <thead style="background-color: #198754; color: white;">
                    <tr>
                        <th>N° Factura</th>
                        <th>Fecha</th>
                        <th>Cliente</th>
                        <th>Método Pago</th>
                        <th>Estado</th>
                        <th>Monto</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($facturas as $factura)
                    <tr>
                        <td>{{ $factura->numeroFactura }}</td>
                        <td>{{ $factura->fechaEmision }}</td>
                        <td>{{ $factura->usuario->nombre ?? 'Usuario no encontrado' }}</td>
                        <td>{{ $factura->metodoPago }}</td>
                        <td>{{ $factura->estadoPago }}</td>
                        <td>${{ number_format($factura->montoTotal, 2) }}</td>

                        <td class="text-center">
                            <div class="d-flex justify-content-center gap-2">

                                <!-- Ver PDF individual -->
                                <a href="{{ route('Factura.verPDF', $factura->id) }}" 
                                   class="btn btn-outline-primary btn-sm rounded-pill">
                                    <i class="bi bi-filetype-pdf"></i>
                                </a>

                                <!-- Descargar PDF individual -->
                                <a href="{{ route('Factura.descargarPDF', $factura->id) }}" 
                                   class="btn btn-danger btn-sm rounded-pill">
                                    <i class="bi bi-download"></i>
                                </a>

                                <!-- Editar -->
                                <a href="{{ route('Factura.edit', $factura->id) }}" 
                                   class="btn btn-warning btn-sm text-dark rounded-pill">
                                    <i class="bi bi-pencil-square"></i>
                                </a>

                                <!-- Eliminar -->
                                <form action="{{ route('Factura.destroy', $factura->id) }}" 
                                      method="POST">
                                    @csrf
                                    <button type="submit" 
                                            class="btn btn-danger btn-sm rounded-pill"
                                            onclick="confirmarEliminacion(event)">
                                        <i class="bi bi-trash-fill"></i>
                                    </button>
                                </form>

                            </div>
                        </td>

                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>



    <!-- Botón Volver -->
    <div class="mt-3">
        <a href="{{ route('welcome') }}" 
           class="btn btn-outline-success rounded-pill px-4">
            <i class="bi bi-arrow-left-circle"></i> Volver
        </a>
    </div>

</div>

<script>
    function confirmarEliminacion(event) {
        event.preventDefault();
        const form = event.target.closest('form');

        Swal.fire({
            title: '¿Estás seguro?',
            text: "¡No podrás revertir esto!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#198754',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, eliminar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
    }
</script>

@endsection
