@extends('layouts.app')

@section('title', 'Shop Nexa - Login')

@section('titleContent')
    <h1 class="text-center my-4 page-title">
        🔐 Iniciar Sesión - Shop Nexa
    </h1>
@endsection

@section('Content')
<div class="row justify-content-center">
    <div class="col-lg-4 col-md-6 col-sm-8">
        <div class="card shadow-sm p-4">
            <div class="icon-container text-center mb-3" style="background: #e7f8ec; width: 80px; height: 80px; border-radius: 50%; margin: auto; display: flex; align-items: center; justify-content: center;">
                <i class="bi bi-person-circle text-success" style="font-size: 2.5rem;"></i>
            </div>
            <h5 class="fw-semibold text-center mb-3">Bienvenido</h5>
            <p class="text-muted small text-center mb-4">Ingresa tu correo y contraseña para acceder</p>

            <form method="POST" action="{{ route('login.submit') }}">
                @csrf
                 @if(session('success'))
                <div class="alert alert-success">
                    <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
                </div>
            @endif

            <!-- ERRORES DE VALIDACIÓN -->
            @if($errors->any())
                <div class="alert alert-danger">
                    <i class="bi bi-exclamation-triangle-fill me-2"></i>
                    <ul class="mb-0 ps-3">
                        @foreach($errors->all() as $e)
                            <li>{{ $e }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

                <div class="mb-3">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus>
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

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">Recordarme</label>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-success">
                        Iniciar Sesión
                    </button>
                </div>

                @if (Route::has('password.request'))
                    <p class="text-center mt-3">
                        <a class="text-decoration-none" href="{{ route('password.request') }}">
                            ¿Olvidaste tu contraseña?
                        </a>
                    </p>
                @endif

                <div class="text-center">
                    <hr class="my-3">
                    <p class="text-muted mb-0">
                        ¿No tienes cuenta? 
                        <a href="{{ route('registro') }}" class="register-link">
                            Crear una cuenta
                        </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
