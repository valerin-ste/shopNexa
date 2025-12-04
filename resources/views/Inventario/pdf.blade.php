<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Reporte de Inventario</title>

    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid black; padding: 6px; text-align: center; }
        th { background-color: #d8f3dc; }
        h2 { text-align: center; margin-bottom: 20px; }
    </style>
</head>

<body>

<h2>Reporte de Inventario</h2>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Cantidad</th>
            <th>Fecha Actualización</th>
            <th>Producto</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($inventarios as $inv)
        <tr>
            <td>{{ $inv->id }}</td>
            <td>{{ $inv->cantidad }}</td>
            <td>{{ \Carbon\Carbon::parse($inv->fechaActualizacion)->format('d/m/Y') }}</td>
            <td>{{ $inv->productos->nombre ?? 'Sin producto' }}</td>
        </tr>
        @endforeach
    </tbody>

</table>

</body>
</html>