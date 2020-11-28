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
    <title>Equipos-Crear</title>
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
        .align{
            width: 60%;
            margin: auto;
            padding: 40px 0px;
        }
        .border{
            border-radius: 71px;
        }

    </style>
</head>
<body>

<div class="container inicio">
    <div class="row table-responsive border">
        <div class="col-md-4 mt-5 align">
            <form action="{{route('equipos.guardar')}}" method="POST" class="table">

                @csrf

                <div class="form-group">
                    <label for="nombre_equipo">Nombre de Equipo</label>
                    <input size="40" type="text" name="nombre_equipo" id="nombre_equipo" class="form-control">
                </div>
                <div class="form-group">
                    <label for="logo">Logo</label>
                    <input size="40" type="text" name="logo" id="logo" class="form-control">
                </div>
                <div class="form-group">
                    <label for="localidad_id">Localidad</label>
                    <br/>
                    <select name="localidad_id" id="localidad_id" class="form-group">
                        <option value="">Localidad...</option>
                        @foreach($localidades as $localidad)
                            <option value="{{$localidad->id}}">{{$localidad->localidad}}</option>
                        @endforeach
                    </select>
                </div>

                <button class="btn btn-primary" type="submit">Crear</button>

                <a href="{{route('index')}}" class="btn btn-danger" >Cancelar</a>

                <a href="{{route('equipos.listar')}}" class="btn btn-info" >Ver Equipos</a>

            </form>
        </div>
    </div>
</div>

</body>
</html>

