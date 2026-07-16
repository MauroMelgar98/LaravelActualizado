<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar cliente</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            margin: 0;
        }

        .contenedor {
            max-width: 700px;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
        }

        .campo {
            margin-bottom: 16px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
        }

        input {
            width: 100%;
            box-sizing: border-box;
            padding: 10px;
        }

        button {
            padding: 10px 20px;
            cursor: pointer;
        }

        .error {
            color: #b91c1c;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <main class="contenedor">
        <h1>Registrar cliente</h1>

        <form action="{{ route('clientes.store') }}" method="POST">
            @csrf 
            Protege el formulario contra solicitudes no autorizadas.
            <div class="campo">
                <label for="nombre">Nombre</label>
                <input
                    type="text"
                    id="nombre"
                    name="nombre"
                    value="{{ old('nombre') }}"
                >
                    <!-- old Recupera el dato escrito cuando la validación falla. -->
                     <!-- @error Muestra el mensaje de validación. -->
                @error('nombre')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <div class="campo">
                <label for="apellido">Apellido</label>
                <input
                    type="text"
                    id="apellido"
                    name="apellido"
                    value="{{ old('apellido') }}"
                >

                @error('apellido')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <div class="campo">
                <label for="ci">Cédula de identidad</label>
                <input
                    type="text"
                    id="ci"
                    name="ci"
                    value="{{ old('ci') }}"
                >
            </div>

            <div class="campo">
                <label for="telefono">Teléfono</label>
                <input
                    type="text"
                    id="telefono"
                    name="telefono"
                    value="{{ old('telefono') }}"
                >

                @error('telefono')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <div class="campo">
                <label for="correo">Correo</label>
                <input
                    type="email"
                    id="correo"
                    name="correo"
                    value="{{ old('correo') }}"
                >

                @error('correo')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <div class="campo">
                <label for="direccion">Dirección</label>
                <input
                    type="text"
                    id="direccion"
                    name="direccion"
                    value="{{ old('direccion') }}"
                >
            </div>

            <button type="submit">Guardar cliente</button>

            <a href="{{ route('clientes.index') }}">
                Volver al listado
            </a>
        </form>
    </main>
</body>
</html>