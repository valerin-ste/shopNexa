@extends('layouts.app')

@section('title', 'Shop Nexa - Registro')

@section('titleContent')
    <h1 class="text-center my-4 page-title">
        📝 Registro - Shop Nexa
    </h1>
@endsection

@section('Content')
<div class="row justify-content-center">
    <div class="col-lg-4 col-md-6 col-sm-8">
        <div class="card shadow-sm p-4">
            <div class="icon-container text-center mb-3" style="background: #e7f8ec; width: 80px; height: 80px; border-radius: 50%; margin: auto; display: flex; align-items: center; justify-content: center;">
                <i class="bi bi-person-plus-fill text-success" style="font-size: 2.5rem;"></i>
            </div>
            <h5 class="fw-semibold text-center mb-3">Crea tu cuenta</h5>
            <p class="text-muted small text-center mb-4">Ingresa tus datos para registrarte</p>

            <form method="POST" action="{{ route('registro.submit') }}">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Nombre completo</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                    @error('password')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password-confirm" class="form-label">Confirmar Contraseña</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-success">
                        Registrarse
                    </button>
                </div>

                <p class="text-center mt-3 small">
                    ¿Ya tienes cuenta? <a href="{{ route('login') }}" class="text-decoration-none">Inicia sesión</a>
                </p>
            </form>
        </div>
    </div>
</div>
@endsection
