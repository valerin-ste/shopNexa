@extends('layouts.app')

@section('title')
    Administrar Productos
@endsection

@section('titleContent')
    <div class="text-center my-4">
        <h1 class="fw-bold text-dark p-3 rounded-3" style="background-color: #e7f8ec;">
            <i class="bi bi-box-seam text-success"></i> Administrar Productos
        </h1>
    </div>
@endsection

@section('Content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<div class="container">

    {{-- ALERTAS --}}
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

    <div class="row">

        <!-- Botón crear -->
        <div class="mb-3">
            <a href="{{ route('Producto.create') }}" 
               class="btn text-white rounded-pill shadow-sm"
               style="background-color: #198754;">
                <i class="bi bi-plus-circle"></i> Crear nuevo producto
            </a>
        </div>

        <!-- Botones PDF -->
        <div class="mb-3">
            <a href="{{ route('Producto.pdf') }}" 
               class="btn btn-outline-primary rounded-pill shadow-sm me-2">
                <i class="bi bi-filetype-pdf"></i> Ver PDF
            </a>

            <a href="{{ route('Producto.pdf.download') }}" 
               class="btn btn-danger rounded-pill shadow-sm">
                <i class="bi bi-download"></i> Descargar PDF
            </a>
        </div>

        <!-- FORMULARIO DE FILTRO AGREGADO  -->
        <div class="card shadow-sm p-3 mb-3 rounded-4">
            <form method="GET" action="{{ route('Producto.index') }}">
                <div class="row g-3">

                    <div class="col-md-3">
                        <input type="text" name="nombre" value="{{ request('nombre') }}"
                               class="form-control rounded-pill"
                               placeholder="Buscar por nombre">
                    </div>

                    <div class="col-md-3">
                        <input type="text" name="descripcion" value="{{ request('descripcion') }}"
                               class="form-control rounded-pill"
                               placeholder="Buscar por descripción">
                    </div>

                    <div class="col-md-3">
                        <select name="categoria_id" class="form-control rounded-pill">
                            <option value="">Todas las categorías</option>
                            @foreach($categorias as $cat)
                                <option value="{{ $cat->id }}" 
                                    {{ request('categoria_id') == $cat->id ? 'selected' : '' }}>
                                    {{ $cat->nombre }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-3">
                        <select name="marca_id" class="form-control rounded-pill">
                            <option value="">Todas las marcas</option>
                            @foreach($marcas as $m)
                                <option value="{{ $m->id }}" 
                                    {{ request('marca_id') == $m->id ? 'selected' : '' }}>
                                    {{ $m->nombre }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                </div>

                <div class="text-end mt-3">
                    <button class="btn btn-success rounded-pill px-4">Filtrar</button>
                    <a href="{{ route('Producto.index') }}" class="btn btn-secondary rounded-pill px-4">
                        Limpiar
                    </a>
                </div>
            </form>
        </div>
        <!--  FIN FILTRO  -->

        <!-- Tabla -->
        <div class="card shadow-lg border-0 rounded-4">
            <div class="card-body">
                <table class="table table-hover align-middle">
                    <thead style="background-color: #198754; color: white;">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                            <th>Fecha Compra</th>
                            <th>Cantidad</th>
                            <th>Categoría</th>
                            <th>Marca</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($productos as $producto)
                        <tr>
                            <td>{{ $producto->id }}</td>
                            <td>{{ $producto->nombre }}</td>
                            <td>{{ $producto->descripcion }}</td>
                            <td>${{ number_format($producto->precio, 0, ',', '.') }}</td>
                            <td>{{ $producto->fechaCompra }}</td>
                            <td>{{ $producto->cantidad }}</td>
                            <td>{{ $producto->categorias->nombre ?? 'Sin categoría' }}</td>
                            <td>{{ $producto->marcas->nombre ?? 'Sin marca' }}</td>

                            <td class="text-center">

                                <div class="d-flex justify-content-center gap-2">
                                    
                                    <!-- Botón Editar -->
                                    <a href="{{ route('Producto.edit', $producto->id) }}" 
                                       class="btn btn-warning btn-sm text-dark rounded-pill">
                                        <i class="bi bi-pencil-square"></i> Editar
                                    </a>

                                    <!-- Botón Eliminar -->
                                    <form action="{{ route('Producto.destroy', $producto->id) }}" 
                                          method="POST">
                                        @csrf

                                        <button type="submit" class="btn btn-danger btn-sm rounded-pill">
                                            <i class="bi bi-trash-fill"></i> Eliminar
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
            <a href="{{ route('welcome') }}" class="btn btn-outline-success rounded-pill px-4">
                <i class="bi bi-arrow-left-circle"></i> Volver
            </a>
        </div>

    </div>
</div>
@endsection
