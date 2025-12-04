<!DOCTYPE html>
<html>
<head>
    <title>Listado de Usuarios</title>
    <style>
        body { font-family: Arial, sans-serif; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #444; padding: 6px; text-align: left; }
        th { background: #198754; color: white; }
        h2 { text-align: center; }
    </style>
</head>
<body>

    <h2>Listado de Usuarios</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Correo Electrónico</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->id }}</td>
                <td>{{ $usuario->nombre }}</td>
                <td>{{ $usuario->direccion }}</td>
                <td>{{ $usuario->telefono }}</td>
                <td>{{ $usuario->correoElectronico }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>