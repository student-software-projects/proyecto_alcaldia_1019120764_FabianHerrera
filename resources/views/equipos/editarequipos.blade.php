<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <title>Equipos-Editar</title>
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
        .texcenter{
            text-align: center;
            font-size: 25px;
        }
        .border{
            border-radius: 71px;
        }
    </style>

</head>
<body>

<div class="container inicio">
    <div class="row table-responsive border">
        <div class="col-md-6 offset-md-3 mt-5">
            <form action="{{route('equipos.actualizar',$equipo->id)}}" method="post">
                @csrf
                @method('PUT')
                <table class="table texcenter">

                    <div class="form-group ">
                        <label for="nombre_equipo">Nombre de Equipo</label>
                        <input type="text" name="nombre_equipo" id="nombre_equipo" class="form-control" value="{{$equipo->nombre_equipo}}">
                    </div>
                    <div class="form-group">
                        <label for="logo">Logo</label>
                        <input type="text" name="logo" id="logo" class="form-control" value="{{$equipo->logo}}">
                    </div>

                    <div class="form-group">
                        <label for="localidad_id">Localidad</label>
                        <br/>
                        <select name="localidad_id" id="localidad_id" class="form-group">
                            @foreach($localidades as $localidad)
                                @if($equipo->localidad_id == $localidad->id)
                                <option value="{{$equipo->localidad_id}}">{{$localidad->localidad}}</option>
                                @endif
                            @endforeach
                            @foreach($localidades as $localidad)
                                <option value="{{$localidad->id}}">{{$localidad->localidad}}</option>
                            @endforeach
                        </select>
                    </div>

                </table>

                <button type="submit" class="btn btn-warning offset-md-2">Actualizar</button>
                <a href="{{route('equipos.listar')}}" class="btn btn-info offset-md-3">Cancelar</a>
                <br>
                <br>
                <br>

            </form>
        </div>
    </div>
</div>

</body>
</html>



