<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nueva Reservación</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
            color: #444;
            background-color: #f8f8f8;
        }

        .container {
            width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.2);
        }

        h1 {
            font-size: 24px;
            color: #444;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table td {
            padding: 10px;
            border: 1px solid #ccc;
        }

        table td:first-child {
            width: 150px;
            font-weight: bold;
            background-color: #eee;
        }

        .buttons {
            text-align: center;
            margin-top: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 5px;
            font-size: 14px;
            color: #fff;
            background-color: #007bff;
            text-decoration: none;
            border-radius: 4px;
        }

        .btn-whatsapp {
            background-color: #25d366;
        }

        .btn:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Nueva Reservación</h1>
        <table>
            <tr>
                <td>Nombre del reservador/a:</td>
                <td>{{ $data['nombre'] }}</td>
            </tr>
            <tr>
                <td>Teléfono:</td>
                <td>{{ $data['telefono'] }}</td>
            </tr>
            <tr>
                <td>Zona que le gustaria reservar:</td>
                <td>{{ $data['ubicacion'] }}</td>
            </tr>
            <tr>
                <td>Fecha Solicitada:</td>
                <td>{{ $data['fecha'] }}</td>
            </tr>
            <tr>
                <td>Hora de la reservación:</td>
                <td>{{ $data['hora'] }}</td>
            </tr>
            <tr>
                <td>Número de personas:</td>
                <td>{{ $data['num_personas'] }}</td>
            </tr>
            <tr>
                <td>Mensaje:</td>
                <td>{{ $data['mensaje'] }}</td>
            </tr>
        </table>

        <div class="buttons">
            <a href="https://estacionsantopan.com/reservaciones" style="color:white" class="btn">Ver reservaciones</a>
            <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $data['telefono']) }}" class="btn btn-whatsapp" style="color:white">Responder por WhatsApp</a>
        </div>
    </div>
</body>
</html>
