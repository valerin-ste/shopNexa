<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Factura</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f2f2f2;
            margin: 0;
            padding: 40px;
        }

        .factura {
            background: white;
            width: 450px;
            margin: auto;
            padding: 40px;
            border-radius: 25px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            margin-bottom: 5px;
            font-size: 32px;
        }

        .empresa {
            font-size: 20px;
            font-weight: bold;
        }

        .nit {
            color: #444;
            margin-bottom: 25px;
        }

        .info {
            display: flex;
            justify-content: space-between;
            margin: 20px 0;
            text-align: left;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
            margin-bottom: 20px;
        }

        th {
            background: #f7f7f7;
            padding: 10px;
            border-bottom: 2px solid #ddd;
        }

        td {
            padding: 10px;
            border-bottom: 1px solid #eee;
        }

        .totales {
            text-align: right;
            margin-top: 20px;
            font-size: 18px;
        }

        .totales div {
            margin: 5px 0;
        }

        .gracias {
            margin-top: 35px;
            font-size: 20px;
        }
    </style>
</head>
<body>

<div class="factura">

    <h1>FACTURA</h1>

    <div class="empresa">Shop Nexa</div>
    <div class="nit">NIT: 900.123.456-7</div>

    {{-- INFORMACIÓN DEL CLIENTE --}}
    <div class="info">
         <div>
            <strong>Nro Factura:</strong><br>
            {{ $factura->numeroFactura }}
        </div>
        <div>
            <strong>Cliente:</strong><br>
            {{ $factura->usuario->nombre }}
        </div>
        <div>
            <strong>Fecha:</strong><br>
            {{ \Carbon\Carbon::parse($factura->fechaEmision)->format('d/m/Y') }}
        </div>
    </div>

    <div class="info">
        
        <div>
            <strong>Teléfono:</strong><br>
            {{ $factura->usuario->telefono ?? 'N/A' }}
        </div>
    </div>

    <div class="info">
        <div>
            <strong>Dirección:</strong><br>
            {{ $factura->usuario->direccion ?? 'N/A' }}
        </div>
        
    </div>

    {{-- DETALLES --}}
    <table>
        <tr>
            <th>Descripción</th>
            <th>Método</th>
            <th>Estado</th>
            <th>Total</th>
        </tr>

        <tr>
            <td>{{ $factura->notas ?? 'Sin descripción' }}</td>
            <td>{{ $factura->metodoPago }}</td>
            <td>{{ $factura->estadoPago }}</td>
            <td>${{ number_format($factura->montoTotal, 0, ',', '.') }}</td>
        </tr>
    </table>

    {{-- TOTALES --}}
    <div class="totales">
        <div><strong>Subtotal:</strong> ${{ number_format($factura->montoTotal * 0.81, 0, ',', '.') }}</div>
        <div><strong>IVA (19%):</strong> ${{ number_format($factura->montoTotal * 0.19, 0, ',', '.') }}</div>
        <div>
            <strong>Total a pagar:</strong>
            <span style="font-size: 22px;">
                ${{ number_format($factura->montoTotal, 0, ',', '.') }}
            </span>
        </div>
    </div>

    <div class="gracias">
        Gracias por su compra 
    </div>

</div>

</body>
</html>