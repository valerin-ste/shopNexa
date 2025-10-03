@extends('layouts.app')

@section('title')
    Tienda Online
@endsection

@section('titleContent')
    <h1 class="text-center my-4 fw-bold">Shop Nexa</h1>
@endsection

@section('Content')
<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>
    .card {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0px 6px 20px rgba(0,0,0,0.1);
    }
</style>

<div class="container">
    <div class="row g-4 justify-content-center">

        <!-- Usuarios -->
        <div class="col-md-3 col-sm-6">
            <div class="card shadow-sm border-0 rounded-4 h-100 text-center">
                <div class="card-body p-4">
                    <div class="mb-3">
                        <i class="bi bi-person-circle fs-1 text-primary"></i>
                    </div>
                    <h5 class="card-title fw-semibold">Usuarios</h5>
                    <p class="text-muted small">Gestiona tus Usuarios registrados.</p>
                    <a href=" {{  route('Usuario.index')}}" class="btn btn-primary btn-sm rounded-pill">Ver más</a>
                </div>
            </div>
        </div>

        <!-- Productos -->
        <div class="col-md-3 col-sm-6">
            <div class="card shadow-sm border-0 rounded-4 h-100 text-center">
                <div class="card-body p-4">
                    <div class="mb-3">
                        <i class="bi bi-bag-fill fs-1 text-success"></i>
                    </div>
                    <h5 class="card-title fw-semibold">Productos</h5>
                    <p class="text-muted small">Agrega, edita y organiza tus productos.</p>
                    <a href=" {{  route('Producto.index')}}" class="btn btn-success btn-sm rounded-pill">Ver más</a>
                </div>
            </div>
        </div>

        <!-- Inventario -->
        <div class="col-md-3 col-sm-6">
            <div class="card shadow-sm border-0 rounded-4 h-100 text-center">
                <div class="card-body p-4">
                    <div class="mb-3">
                        <i class="bi bi-box-seam fs-1 text-danger"></i>
                    </div>
                    <h5 class="card-title fw-semibold">Inventario</h5>
                    <p class="text-muted small">Controla existencias y movimientos.</p>
                    <a href="{{ route ('Inventario.index') }}" class="btn btn-danger btn-sm rounded-pill">Ver más</a>
                </div>
            </div>
        </div>

        <!-- Proveedores -->
        <div class="col-md-3 col-sm-6">
            <div class="card shadow-sm border-0 rounded-4 h-100 text-center">
                <div class="card-body p-4">
                    <div class="mb-3">
                        <i class="bi bi-truck fs-1 text-warning"></i>
                    </div>
                    <h5 class="card-title fw-semibold">Proveedores</h5>
                    <p class="text-muted small">Administra tus proveedores.</p>
                    <a href="{{ route ('Proveedores.index') }}" class="btn btn-warning btn-sm rounded-pill">Ver más</a>
                </div>
            </div>
        </div>


        <!-- Factura -->
<div class="col-md-3 col-sm-6">
    <div class="card shadow-sm border-0 rounded-4 h-100 text-center">
        <div class="card-body p-4">
            <div class="mb-3">
                <i class="bi bi-receipt fs-1 text-dark"></i>
            </div>
            <h5 class="card-title fw-semibold">Factura</h5>
            <p class="text-muted small">Consulta y gestiona ventas.</p>
            <a href="{{ route('Factura.index') }}" class="btn btn-dark btn-sm rounded-pill">Ver más</a>
        </div>
    </div>
</div>

    
        <!-- Categorías -->
        <div class="col-md-3 col-sm-6">
            <div class="card shadow-sm border-0 rounded-4 h-100 text-center">
                <div class="card-body p-4">
                    <div class="mb-3">
                        <i class="bi bi-tags-fill fs-1 text-secondary"></i>
                    </div>
                    <h5 class="card-title fw-semibold">Categorías</h5>
                    <p class="text-muted small">Clasifica tus productos.</p>
                    <a href=" {{ route('Categoria.index')}}" class="btn btn-secondary btn-sm rounded-pill">Ver más</a>
                </div>
            </div>
        </div>

        <!-- Marcas -->
        <div class="col-md-3 col-sm-6">
            <div class="card shadow-sm border-0 rounded-4 h-100 text-center">
                <div class="card-body p-4">
                    <div class="mb-3">
                        <i class="bi bi-star-fill fs-1 text-info"></i>
                    </div>
                    <h5 class="card-title fw-semibold">Marcas</h5>
                    <p class="text-muted small">Gestiona marcas de productos.</p>
                    <a href=" {{ route('Marca.index')}}" class="btn btn-info btn-sm rounded-pill">Ver más</a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection