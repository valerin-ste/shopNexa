@extends('layouts.app')

@section('title')
    Editar Producto
@endsection

@section('titleContent')
    <h1 class="text-center my-4 fw-bold">
        <i class="bi bi-pencil-square text-success"></i> Editar Producto
    </h1>
@endsection

@section('Content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body">
                    <form action="{{ route('Producto.update', $producto->id) }}" method="POST">
                        @csrf
                       

                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" name="nombre" class="form-control" value="{{ $producto->nombre }}" >
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Descripción</label>
                            <textarea name="descripcion" class="form-control" rows="3">{{ $producto->descripcion }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Precio</label>
                            <input type="number" step="0.01" name="precio" class="form-control" value="{{ $producto->precio }}" >
                        </div>

                        <div class="mb-3">
                        <label for="fechaCompra" class="form-label">Fecha de Compra</label>
                        <input type="date" class="form-control" id="fechaCompra" name="fechaCompra" value="{{ $producto->fechaCompra}}" >
                           
                    </div>
                        <div class="mb-3">
                            <label class="form-label">Cantidad</label>
                            <input type="number" name="cantidad" class="form-control" value="{{ $producto->cantidad }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Categoría</label>
                            <select name="categoria_id" class="form-select" >
                                @foreach($categorias as $categoria)
                                    <option value="{{ $categoria->id }}" {{ $producto->categoria_id == $categoria->id ? 'selected' : '' }}>
                                        {{ $categoria->nombre }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Marca</label>
                            <select name="marca_id" class="form-select" >
                                @foreach($marcas as $marca)
                                    <option value="{{ $marca->id }}" {{ $producto->marca_id == $marca->id ? 'selected' : '' }}>
                                        {{ $marca->nombre }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-success rounded-pill px-4">
                                <i class="bi bi-check-circle"></i> Actualizar
                            </button>
                            <a href="{{ route('Producto.index') }}" class="btn btn-outline-secondary rounded-pill px-4">
                                <i class="bi bi-arrow-left-circle"></i> Cancelar
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection