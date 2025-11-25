<!DOCTYPE html>
<html lang="es">
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shopnetxa - Bienvenido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


<style>
    body {
        margin: 0;
        padding: 0;
        height: 100vh;
        background-color: #ffffff; /* FONDO BLANCO */
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: 'Poppins', sans-serif;
    }

    .welcome-container {
        text-align: center;
        color: #2e7d32; /* Verde principal */
        background: #ffffff;
        border: 2px solid #c8e6c9; /* borde verde suave */
        border-radius: 25px;
        padding: 60px 40px;
        width: 85%;
        max-width: 500px;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
        animation: fadeIn 1.5s ease-in-out;
    }

    .welcome-container h1 {
        font-size: 2.8rem;
        font-weight: 700;
        letter-spacing: 1.5px;
        margin-bottom: 15px;
        color: #2e7d32; /* Verde oscuro */
    }

    .welcome-container p {
        font-size: 1.1rem;
        margin-bottom: 25px;
        color: #4e4e4e; /* gris oscuro sutil para contraste */
        line-height: 1.5;
    }

    .btn-custom {
        padding: 14px 35px;
        font-size: 1.1rem;
        border-radius: 30px;
        background: linear-gradient(90deg, #43a047, #2e7d32);
        color: white;
        border: none;
        cursor: pointer;
        font-weight: 600;
        box-shadow: 0 4px 15px rgba(67, 160, 71, 0.3);
        transition: all 0.3s ease;
    }

    .btn-custom:hover {
        background: linear-gradient(90deg, #66bb6a, #388e3c);
        transform: translateY(-3px) scale(1.03);
        box-shadow: 0 6px 20px rgba(67, 160, 71, 0.4);
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(40px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>



</head>
<body>
    <div class="welcome-container">
        <h1>¡Bienvenido a Shop Nexa!</h1>
        <p>Tu plataforma de gestión de supermercado. Administra productos, usuarios y ventas fácilmente.</p>
        <a href="{{ route('login') }}"class="btn rounded-pill px-4 py-2 mt-3">Entrar al sistema</a>
    </div>
</body>
</html>
