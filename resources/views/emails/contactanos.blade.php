<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de contacto</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f7f7f7;
            color: #333;
            margin: 0;
            padding: 20px;
            line-height: 1.6;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        td {
            padding: 20px;
            text-align: center;
        }
        h1 {
            color: #2c3e50;
            margin-top: 0;
            font-size: 28px;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }
        .info-item {
            margin-bottom: 20px;
            text-align: left;
        }
        .label {
            font-weight: 600;
            color: #2980b9;
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .value {
            background-color: #f1f8ff;
            padding: 10px;
            border-radius: 6px;
            font-size: 16px;
            color: #34495e;
        }
        .alert {
            background-color: #fdecea;
            border-left: 4px solid #f44336;
            padding: 15px;
            margin-bottom: 20px;
            color: #333;
            font-size: 16px;
            text-align: left;
        }
        @media (max-width: 600px) {
            body {
                padding: 10px;
            }
            td {
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <table>
            <tr>
                <td>
                    <h1>Información de contacto</h1>
                    
                    <div class="alert">
                        <strong>Atención:</strong> Se ha recibido un nuevo mensaje de contacto.
                    </div>

                    <div class="info-item">
                        <span class="label">Nombre</span>
                        <div class="value">{{ $contacto['name'] }}</div>
                    </div>
                    <div class="info-item">
                        <span class="label">Correo</span>
                        <div class="value">{{ $contacto['correo'] }}</div>
                    </div>
                    <div class="info-item">
                        <span class="label">Teléfono</span>
                        <div class="value">{{ $contacto['phone'] }}</div>
                    </div>
                    <div class="info-item">
                        <span class="label">Mensaje</span>
                        <div class="value">{{ $contacto['mensaje'] }}</div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>