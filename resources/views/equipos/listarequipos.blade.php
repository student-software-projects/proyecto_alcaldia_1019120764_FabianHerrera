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
    <title>Equipos-Listado</title>
    <style>
        body {
            background-image: url("https://c.wallhere.com/photos/b0/32/football_team_of_ukraine_ukraine-1011762.jpg!d");
            background-repeat: no-repeat;
            background-size: cover;
            font-family: 'Montserrat', sans-serif;
        }
        .inicio{
            height: 100vh;
            display: flex;
            align-items: center;
        }
        th,
        td{
            border: 0 !important;
        }
        .table {
            width: 100%;
            margin-bottom: 1rem;
            background-color: #212529;
            color: #e8e8e8;
        }
        .table-responsive{
            background-color: #212529;
            color: #e8e8e8;
            opacity: .9;
        }
        .border{
            border-radius: 71px;
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
            <table class="table table-bordered">
                <thead>
                <tr style="text-align: center">
                    <th>Nombre de Equipo</th>
                    <th>logo</th>
                    <th>Localidad</th>
                    <th>Opciones</th>
                </tr>
                </thead>

                <tbody>



                @foreach($equipos as $equipo)

                            <tr style="text-align: center">
                                <td>{{$equipo->nombre_equipo}}</td>
                                <td>{{$equipo->logo }}</td>

                                @foreach($localidades as $localidad)
                                @if($equipo->localidad_id == $localidad->id)
                                <td>{{$localidad->localidad}}</td>
                                @endif
                                @endforeach

                                <td>
                                    <form action="{{ route('equipos.eliminar',$equipo->id) }}" method="post">

                                    @csrf
                                    @method('DELETE')

                                    <a href="{{route('equipos.editar',$equipo->id)}}" class="btn btn-warning">Editar</a>
                                    <button type="submit" class="btn btn-danger">Eliminar</button>

                                    </form>
                                </td>

                            </tr>

                @endforeach
                </tbody>

            </table>
        </div>
        <td>
            <BR>
            <a href="{{route('equipos.crear')}}" class="btn btn-info">Registrar Nuevo Equipo</a>
            <br/>
            <br/>

            <a href="{{route('index')}}" class="btn btn-info">Volver a Pag. de Inicio</a>
        </td>
    </div>
</div>
</body>
</html>

