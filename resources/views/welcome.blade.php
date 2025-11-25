@extends('layouts.app')

@section('title', 'Shop Nexa - Tienda Online')

@section('titleContent')
    <h1 class="text-center my-4 page-title">
    </i>Shop Nexa - Supermercado Virtual
    </h1>
@endsection

@section('Content')
<div class="row g-4 justify-content-center">


<!-- Usuarios -->
<div class="col-lg-3 col-md-4 col-sm-6">
    <div class="card text-center shadow-sm p-3">
        <div class="icon-container" style="background: #e7f8ec;">
            <i class="bi bi-person-circle text-success"></i>
        </div>
        <h5 class="fw-semibold">Usuarios</h5>
        <p class="text-muted small">Gestiona tus usuarios registrados.</p>
        <a href="{{ route('Usuario.index') }}" 
           class="btn text-dark btn-shop" 
           style="background-color: #f1f1f1; border: 1px solid #ccc;">
            Ver más
        </a>
    </div>
</div>


    <!-- Productos -->
    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card text-center shadow-sm p-3">
            <div class="icon-container" style="background: #e7f8ec;">
                <i class="bi bi-basket-fill text-success"></i>
            </div>
            <h5 class="fw-semibold">Productos</h5>
            <p class="text-muted small">Agrega, edita y organiza tus productos.</p>
            <a href="{{ route('Producto.index') }}" class="btn text-dark btn-shop" style="background-color: #f1f1f1; border: 1px solid #ccc;">Ver más</a>
        </div>
    </div>

    <!-- Inventario -->
    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card text-center shadow-sm p-3">
            <div class="icon-container" style="background: #e7f8ec;">
                <i class="bi bi-box-seam text-success"></i>
            </div>
            <h5 class="fw-semibold">Inventario</h5>
            <p class="text-muted small">Controla existencias y movimientos.</p>
            <a href="{{ route('Inventario.index') }}"class="btn text-dark btn-shop" style="background-color: #f1f1f1; border: 1px solid #ccc;">Ver más</a>
        </div>
    </div>

    <!-- Proveedores -->
    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card text-center shadow-sm p-3">
            <div class="icon-container" style="background: #e7f8ec;">
                <i class="bi bi-truck text-success"></i>
            </div>
            <h5 class="fw-semibold">Proveedores</h5>
            <p class="text-muted small">Administra tus proveedores.</p>
            <a href="{{ route('Proveedores.index') }}" class="btn text-dark btn-shop" style="background-color: #f1f1f1; border: 1px solid #ccc;">Ver más</a>
        </div>
    </div>

    <!-- Factura -->
    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card text-center shadow-sm p-3">
            <div class="icon-container" style="background:#e7f8ec;">
                <i class="bi bi-receipt text-success"></i>
            </div>
            <h5 class="fw-semibold">Factura</h5>
            <p class="text-muted small">Consulta y gestiona ventas.</p>
            <a href="{{ route('Factura.index') }}" class="btn text-dark btn-shop" style="background-color: #f1f1f1; border: 1px solid #ccc;">Ver más</a>
        </div>
    </div>

    <!-- Categorías -->
    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card text-center shadow-sm p-3">
            <div class="icon-container" style="background: #e7f8ec;">
                <i class="bi bi-tags-fill text-success"></i>
            </div>
            <h5 class="fw-semibold">Categorías</h5>
            <p class="text-muted small">Clasifica tus productos.</p>
            <a href="{{ route('Categoria.index') }}" class="btn text-dark btn-shop" style="background-color: #f1f1f1; border: 1px solid #ccc;">Ver más</a>
        </div>
    </div>

    <!-- Marcas -->
    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card text-center shadow-sm p-3">
            <div class="icon-container" style="background: #e7f8ec;">
                <i class="bi bi-bookmark-star-fill text-success"></i>
            </div>
            <h5 class="fw-semibold">Marcas</h5>
            <p class="text-muted small">Gestiona marcas de productos.</p>
            <a href="{{ route('Marca.index') }}" class="btn text-dark btn-shop" style="background-color: #f1f1f1; border: 1px solid #ccc;">Ver más</a>
        </div>
    </div>

</div>
@endsection
