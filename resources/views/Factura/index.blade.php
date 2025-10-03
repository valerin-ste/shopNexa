@extends('layouts.app')

@section('title')
    Administrar Facturas
@endsection

@section('titleContent')
    <h1 class="text-center my-4 fw-bold">
        <i class="bi bi-receipt text-dark"></i> Administrar Facturas
    </h1>
@endsection

@section('Content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<div class="container">
    <div class="row">

       
        <div class="mb-3">
            <a href="{{ route('Factura.create')}}" class="btn btn-dark text-white rounded-pill shadow-sm">
                <i class="bi bi-plus-circle-fill"></i> Crear nueva factura
            </a>
        </div>

       
        <div class="card shadow-sm border-0 rounded-4">
            <div class="card-body">
                <table class="table table-hover align-middle">
                    <thead class="table-dark text-white">
                        <tr>
                            <th>ID</th>
                            <th>Fecha de Emisión</th>
                            <th>Monto Total</th>
                            <th>Usuario</th>
                            <th class="text-center">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($factura as $factura)
                        <tr>
                            <td>{{ $factura->id }}</td>
                            <td>{{ $factura->fechaEmision }}</td>
                            <td>${{ number_format($factura->montoTotal, 2) }}</td>
                            <td>{{ $factura->usuario->nombre }}</td>
                            <td class="text-center">
                               
                                <a href="{{ route('Factura.edit',$factura->id) }}" 
                                   class="btn btn-dark btn-sm text-white rounded-pill">
                                    <i class="bi bi-pencil-square"></i> Editar
                                </a>

                                
                                <form action="{{ route('Factura.destroy', $factura->id) }}" 
                                      method="POST" style="display:inline-block;">
                                    @csrf
                                    <button class="btn btn-danger btn-sm rounded-pill">
                                        <i class="bi bi-trash-fill"></i> Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        
        <div class="mt-3">
            <a href="{{ route('welcome') }}" class="btn btn-outline-secondary rounded-pill">
                <i class="bi bi-arrow-left-circle"></i> Volver
            </a>
        </div>

    </div>
</div>
@endsection