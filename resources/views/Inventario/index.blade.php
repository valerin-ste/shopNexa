@extends('layouts.app')

@section('title', 'Inventario')

@section('titleContent')
    <h1 class="text-center fw-bold text-dark">
        <i class="bi bi-box-fill text-danger"></i> Inventario
    </h1>
@endsection

@section('Content')
<div class="container mt-4">
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('Inventario.create') }}" class="btn btn-danger">
            <i class="bi bi-plus-circle"></i> Agregar Inventario
        </a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <table class="table table-bordered table-hover text-center align-middle">
                <thead class="table-danger">
                    <tr>
                        <th>ID</th>
                        <th>Cantidad</th>
                        <th>Fecha Actualización</th>
                        <th>Producto</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($inventarios as $inventario)
                        <tr>
                            <td>{{ $inventario->id }}</td>
                            <td>{{ $inventario->cantidad }}</td>
                            <td>{{ $inventario->fechaActualizacion }}</td>
                            <td>{{ $inventario->producto->nombre }}</td>
                            <td>
                                <a href="{{ route('Inventario.edit', $inventario->id) }}" class="btn btn-sm btn-warning">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <form action="{{ route('Inventario.destroy', $inventario->id) }}" method="POST" class="d-inline">
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

            <div class="d-flex justify-content-center mt-3">
                {{ $inventarios->links() }}
            </div>
        </div>
    </div>
</div>
@endsection