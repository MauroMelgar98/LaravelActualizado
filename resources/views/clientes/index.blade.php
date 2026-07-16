<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f4f6;
        }

        .contenedor {
            max-width: 1000px;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 10px;
            border: 1px solid #d1d5db;
            text-align: left;
        }

        .mensaje {
            padding: 12px;
            background: #dcfce7;
            margin-bottom: 16px;
        }
    </style>
</head>

<body>
    <main class="contenedor">
        <h1>Clientes registrados</h1>

        <a href="{{ route('clientes.create') }}">
            Registrar nuevo cliente
        </a>

        @if(session('mensaje'))
            <p class="mensaje">
                {{ session('mensaje') }}
            </p>
        @endif

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre completo</th>
                    <th>Teléfono</th>
                    <th>Correo</th>
                    <th>Dirección</th>
                </tr>
            </thead>

            <tbody>
                @forelse($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->id }}</td>
                        <td>
                            {{ $cliente->nombre }}
                            {{ $cliente->apellido }}
                        </td>
                        <td>{{ $cliente->telefono }}</td>
                        <td>{{ $cliente->correo ?? 'Sin correo' }}</td>
                        <td>{{ $cliente->direccion ?? 'Sin dirección' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">
                            No existen clientes registrados.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </main>
</body>
</html>