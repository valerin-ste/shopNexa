@extends('layouts.app')

@section('title')
    Categorías
@endsection

@section('titleContent')
    <div class="text-center my-4">
        <h1 class="fw-bold text-dark p-3 rounded-3" style="background-color: #e7f8ec;">
            <i class="bi bi-tags-fill text-success"></i> Categorías de Productos
        </h1>
    </div>
@endsection

@section('Content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<div class="container">

    {{-- ================= MENSAJES ================= --}}

    @if(session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: '¡Éxito!',
                text: "{{ session('success') }}",
                confirmButtonText: 'Aceptar',
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
                confirmButtonText: 'Aceptar',
            });
        });
    </script>
    @endif

    {{-- ============================================ --}}

    <!-- Botón crear -->
    <div class="mb-4 text-end">
        <a href="{{ route('Categoria.create') }}" 
           class="btn text-white rounded-pill shadow-sm px-4"
           style="background-color: #198754;">
            <i class="bi bi-plus-circle"></i> Crear categoría
        </a>
    </div>

    <!-- Cards de categorías -->
    <div class="row g-4">
        @foreach ($categorias as $categoria)
        <div class="col-lg-3 col-md-4 col-sm-6">

            <div class="card shadow-lg border-0 rounded-4 h-100 text-center p-3">

                <!-- (IMAGEN ELIMINADA) -->

                <!-- Nombre -->
                <h5 class="fw-bold text-dark mt-2">{{ $categoria->nombre }}</h5>

                <!-- Descripción -->
                <p class="text-muted" style="font-size: 14px;">
                    {{ $categoria->descripcion }}
                </p>

                <!-- Botón Ver más -->
                <button 
                    class="btn btn-success rounded-pill px-4 mt-auto" 
                    data-bs-toggle="modal"
                    data-bs-target="#modalCategoria{{ $categoria->id }}">
                    Ver más
                </button>

            </div>

        </div>

        <!-- ============================
             MODAL DE INFORMACIÓN
        ================================= -->
        <div class="modal fade" id="modalCategoria{{ $categoria->id }}" tabindex="-1">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content rounded-4">

                    <div class="modal-header" style="background:#e7f8ec;">
                        <h5 class="modal-title fw-bold">
                            <i class="bi bi-basket text-success"></i>
                            Productos de {{ $categoria->nombre }}
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">

                        @if($categoria->productos->count() > 0)

                            <ul class="list-group">
                                @foreach ($categoria->productos as $producto)
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span>{{ $producto->nombre }}</span>
                                        <span class="fw-bold text-success">${{ number_format($producto->precio,0) }}</span>
                                    </li>
                                @endforeach
                            </ul>

                        @else
                            <div class="text-center text-muted py-3">
                                <i class="bi bi-info-circle"></i>  
                                No hay productos registrados en esta categoría.
                            </div>
                        @endif

                    </div>

                    <div class="modal-footer d-flex justify-content-between">

                        <!-- Botón eliminar con confirmación -->
                        <form action="{{ route('Categoria.destroy', $categoria->id) }}" method="POST"
                              onsubmit="return confirm('¿Estás seguro de eliminar esta categoría? Esta acción no se puede deshacer.')" >
                            @csrf

                            <button class="btn btn-danger rounded-pill px-4">
                                <i class="bi bi-trash-fill"></i> Eliminar
                            </button>
                        </form>

                        <!-- Botón cerrar -->
                        <button class="btn btn-outline-success rounded-pill px-4" data-bs-dismiss="modal">
                            Cerrar
                        </button>

                    </div>

                </div>
            </div>
        </div>
        <!-- ============================ -->

        @endforeach
    </div>

    {{-- Botón Volver --}}
    <div class="mt-4 d-flex justify-content-start">
        <a href="{{ route('welcome') }}" class="btn btn-outline-success rounded-pill px-4">
            <i class="bi bi-arrow-left-circle"></i> Volver
        </a>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@endsection
