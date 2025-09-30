@extends('layouts.app')

@section('title')
    Administrar Productos
@endsection

@section('titleContent')
    <h1 class="text-center my-4 fw-bold">
        <i class="bi bi-box-seam text-success"></i> Administrar Productos
    </h1>
@endsection

@section('Content')
<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<div class="container">
    <div class="row">

        <!-- Botón crear -->
        <div class="mb-3">
            <a href="{{ route('Producto.create')}}" class="btn btn-success rounded-pill shadow-sm">
                <i class="bi bi-plus-circle-fill"></i> Crear un nuevo producto
            </a>
        </div>

        <!-- Tabla de productos -->
        <div class="card shadow-sm border-0 rounded-4">
            <div class="card-body">
                <table class="table table-hover align-middle">
                    <thead class="table-success">
                        <tr>
                            <th>ID</th>
                            <th>Nombre Producto</th>
                            <th>Precio</th>
                            <th>Stock</th>
                            <th>Categoría</th>
                            <th>Marca</th>
                            <th class="text-center">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productos as $producto)
                        <tr>
                            <td>{{ $producto->id }}</td>
                            <td>{{ $producto->nombre }}</td>
                            <td>${{ number_format($producto->precio, 0, ',', '.') }}</td>
                            <td>{{ $producto->stock }}</td>
                            <td>{{ $producto->categoria->nombre ?? 'Sin categoría' }}</td>
                            <td>{{ $producto->marca->nombre ?? 'Sin marca' }}</td>
                            <td class="text-center">
                                <a href="{{ route('Producto.edit',$producto->id) }}" class="btn btn-success btn-sm rounded-pill">
                                    <i class="bi bi-pencil-square"></i> Editar
                                </a>

                                <form action="{{ route('Producto.destroy', $producto->id) }}" method="POST" style="display:inline-block;">
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

        <!-- Botón volver -->
        <div class="mt-3"> 
            <a href="{{ route('welcome') }}" class="btn btn-outline-secondary rounded-pill">
                <i class="bi bi-arrow-left-circle"></i> Volver
            </a>
        </div>

    </div>
</div>
@endsection