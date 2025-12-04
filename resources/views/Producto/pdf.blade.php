<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Catálogo de Productos</title>

    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            margin: 25px;
            color: #2b2b2b;
            font-size: 12px;
        }

        /* Encabezado */
        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header h1 {
            font-size: 26px;
            font-weight: bold;
            text-transform: uppercase;
            color: #198754;
            margin: 0;
        }

        .line {
            width: 100px;
            height: 3px;
            background: #198754;
            margin: 8px auto 0 auto;
            border-radius: 5px;
        }

        /* Tarjetas */
        .card {
            border: 1px solid #cfcfcf;
            padding: 15px;
            margin-bottom: 18px;
            border-radius: 8px;
            width: 100%;
        }

        .card-title {
            font-size: 18px;
            font-weight: bold;
            color: #198754;
            margin-bottom: 6px;
        }

        .card-description {
            font-size: 12px;
            margin-bottom: 10px;
        }

        .details {
            font-size: 12px;
            line-height: 1.5;
        }

        .details strong {
            color: #198754;
        }

        .divider {
            width: 100%;
            height: 1px;
            background: #198754;
            margin: 12px 0;
        }
    </style>
</head>

<body>

    <div class="header">
        <h1>Catálogo de Productos</h1>
        <small style="font-size: 11px; color:#6c757d;">Generado el {{ date('d/m/Y') }}</small>
        <div class="line"></div>
    </div>

    @foreach ($productos as $p)
    <div class="card">
        <div class="card-title">{{ $p->nombre }}</div>

        <div class="card-description">
            {{ $p->descripcion }}
        </div>

        <div class="divider"></div>

        <div class="details">
            <strong>ID:</strong> {{ $p->id }} <br>
            <strong>Precio:</strong> ${{ number_format($p->precio, 0, ',', '.') }} <br>
            <strong>Fecha de Compra:</strong> {{ $p->fechaCompra }} <br>
            <strong>Cantidad:</strong> {{ $p->cantidad }} <br>
            <strong>Categoría:</strong> {{ $p->categorias->nombre ?? 'Sin categoría' }} <br>
            <strong>Marca:</strong> {{ $p->marcas->nombre ?? 'Sin marca' }}
        </div>
    </div>
    @endforeach

</body>
</html>
