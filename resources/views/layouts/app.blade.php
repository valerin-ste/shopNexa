<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Shop Nexa')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body {
            background: #ffffff;
            font-family: 'Poppins', sans-serif;
        }

        /* Navbar verde superior */
        nav {
            background-color: #28a745;
            padding: 10px 0;
        }

        nav a.navbar-brand {
            color: #fff !important;
            font-weight: 600;
            font-size: 1.3rem;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        /* Imagen del logo */
        .navbar-logo {
            height: 40px;
            width: auto;
            border-radius: 8px;
        }

        nav a.navbar-brand:hover {
            color: #dfffd6 !important;
        }

        /* Botón Volver */
        .btn-volver {
            background: #fff;
            color: #28a745;
            border: none;
            border-radius: 30px;
            padding: 8px 18px;
            font-weight: 600;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .btn-volver:hover {
            background: #f1f1f1;
            transform: scale(1.05);
        }

        /* Tarjetas */
        .card {
            transition: all 0.3s ease;
            border: none;
            border-radius: 20px;
            background: white;
        }
        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .icon-container {
            width: 80px;
            height: 80px;
            margin: 0 auto 15px auto;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
        }

        .icon-container i {
            font-size: 2.5rem;
        }

        .btn-shop {
            border-radius: 50px;
            font-weight: 500;
            padding: 8px 20px;
        }

        /* Footer solo con texto centrado en negro */
        .footer {
        background: transparent; /* sin fondo */
        color: #000; /* texto negro */
        text-align: center;
        padding: 10px 0;
        margin: 40px auto 20px auto;
        font-size: 0.9rem;
        }


        h1.page-title {
            font-weight: 700;
            color: #000;
        }
    </style>
    {{-- SweetAlert2 --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

    
    <!-- Navbar blanca con logo y botón Volver -->
<nav class="navbar navbar-expand-lg shadow-sm" style="background-color: #ffffff;">
    <div class="container d-flex justify-content-between align-items-center">
        <a class="navbar-brand fw-bold" href="{{ url('/') }}" style="color: #000; display: flex; align-items: center; gap: 10px;">
            <img src="{{ asset('img.png.jpg') }}" alt="Logo Shop Nexa" style="height: 40px; width: auto; border-radius: 8px;">
            Shop Nexa
        </a>
        <a href="{{ url('/') }}" class="btn" 
           style="background: #28a745; color: #fff; border-radius: 30px; padding: 8px 18px; font-weight: 600; display: inline-flex; align-items: center; gap: 6px; text-decoration: none;">
            <i class="bi bi-arrow-left-circle"></i> Volver
        </a>
    </div>
</nav>


    <!-- Contenido principal -->
    <main class="py-4">
        <div class="container">
            @yield('titleContent')
            @yield('Content')
        </div>
    </main>

    <!-- Footer -->
    <div class="footer">
        <p class="mb-0">Autores: <strong>Lorena Ramírez</strong> - <strong>Valerín Hernández</strong> | Shop Nexa © 2025</p>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://
