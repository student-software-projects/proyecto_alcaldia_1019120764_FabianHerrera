<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <title>Jugadores-Listado</title>
    <style>
        body {
            background-image: url("https://c.wallhere.com/photos/6c/6a/Pierre_Emerick_Aubameyang_footballers_soccer_pitches_Borussia_Dortmund_Bundesliga-69905.jpg!d");
            background-repeat: no-repeat;
            background-size: cover;
            font-family: 'Montserrat', sans-serif;
        }

        .inicio {
            height: 100vh;
            display: flex;
            align-items: center;
        }

        th,
        td {
            border: 0 !important;
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            background-color: #212529;
            color: #e8e8e8;
        }

        .table-responsive {
            background-color: #;
            color: #e8e8e8;
            opacity: .9;
        }

        .texcenter {
            text-align: center;
            font-size: 16px;
        }
        .border{
            border-radius: 51px;
        }
    </style>
</head>
<body>
<div class="container inicio">
    <div class="col-md-12">

        @if(session('message'))
            <div class="alert alert-{{session('type')}}" role="alert">
                {{session('message')}}
            </div>
        @endif

        <div class="table-responsive border">
            <table class="table table-bordered texcenter">
                <thead>
                <tr style="text-align: center">
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Numero de Camisa</th>
                    <th>Apodo</th>
                    <th>Equipo</th>
                    <th>Opciones</th>
                </tr>
                </thead>

                <tbody>
                @foreach($jugadores as $jugador)

                    <tr style="text-align: center">
                        <td>{{$jugador->nombres}}</td>
                        <td>{{$jugador->apellidos }}</td>
                        <td>{{$jugador->numero_camisa }}</td>
                        <td>{{$jugador->apodo }}</td>

                        @foreach($equipos as $equipo)
                            @if($jugador->equipo_id == $equipo->id)
                                <td>{{$equipo->nombre_equipo}}</td>
                            @endif
                        @endforeach

                        <td>
                            <form action="{{ route('jugadores.eliminar',$jugador->id) }}" method="post">

                                @csrf
                                @method('DELETE')

                                <a href="{{route('jugadores.editar',$jugador->id)}}" class="btn btn-warning">Editar</a>
                                <button type="submit" class="btn btn-danger">Eliminar</button>

                            </form>
                        </td>

                    </tr>

                @endforeach
                </tbody>

            </table>
        </div>
        <td>
            <br/>
            <a href="{{route('jugadores.crear')}}" class="btn btn-info">Registrar Nuevo Jugador</a>
            <br/>
            <br/>
            <a href="{{route('index')}}" class="btn btn-info">Volver a Pag. de Inicio</a>
        </td>
    </div>
</div>
</body>
</html>

