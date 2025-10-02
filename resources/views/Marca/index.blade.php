@extends('layouts.app')

@section('title')
    Administrar Marcas
@endsection

@section('titleContent')
    <h1 class="text-center my-4 fw-bold">
        <i class="bi bi-star-fill" style="color:#0dcaf0;"></i> Administrar Marcas
    </h1>
@endsection

@section('Content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<div class="container">
    <div class="row">

        
        <div class="mb-3">
            <a href="{{ route('Marca.create')}}" 
               class="btn text-white rounded-pill shadow-sm"
               style="background-color: #0dcaf0;">
                <i class="bi bi-plus-circle-fill"></i> Crear una nueva marca
            </a>
        </div>

        
        <div class="card shadow-sm border-0 rounded-4">
            <div class="card-body">
                <table class="table table-hover align-middle">
                    <thead class="text-white" style="background-color: #0891b2;">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th class="text-center">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($marcas as $marca)
                        <tr>
                            <td>{{ $marca->id }}</td>
                            <td>{{ $marca->nombre }}</td>
                            <td>{{ $marca->descripcion }}</td>
                            <td class="text-center">
                                <a href="{{ route('Marca.edit',$marca->id) }}" 
                                   class="btn btn-success btn-sm rounded-pill">
                                    <i class="bi bi-pencil-square"></i> Editar
                                </a>
                              
                            <form action="{{ route('Marca.destroy', $marca->id) }}" method="POST" style="display:inline-block;">
                           
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm rounded-pill">
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
