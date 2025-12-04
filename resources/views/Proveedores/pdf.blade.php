<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Proveedores</title>

    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            margin: 20px;
        }

        h2 {
            text-align: center;
            color: #198754;
            margin-bottom: 5px;
        }

        .subtitulo {
            text-align: center;
            font-size: 14px;
            margin-bottom: 15px;
            color: #555;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 12px;
        }

        th {
            background: #198754;
            color: white;
            padding: 8px;
            border: 1px solid #ccc;
            text-align: center;
        }

        td {
            padding: 8px;
            border: 1px solid #ccc;
            text-align: center;
        }

        tr:nth-child(even) {
            background: #f2f2f2;
        }

        footer {
            position: fixed;
            bottom: 10px;
            font-size: 10px;
            text-align: center;
            width: 100%;
            color: #777;
        }
    </style>
</head>
<body>

    <h2>LISTADO DE PROVEEDORES</h2>
    <div class="subtitulo">Reporte general de proveedores registrados</div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Correo Electrónico</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($proveedores as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->nombre }}</td>
                    <td>{{ $p->telefono }}</td>
                    <td>{{ $p->correo }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <footer>
        Generado automáticamente por ShopNexa - {{ date('d/m/Y') }}
    </footer>
    
</body>
</html>
