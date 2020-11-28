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
    <title>Jugadores-Crear</title>
    <style>
        body {
            background-image: url("https://c.wallhere.com/photos/6c/6a/Pierre_Emerick_Aubameyang_footballers_soccer_pitches_Borussia_Dortmund_Bundesliga-69905.jpg!d");
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
        <div class="col-md-4 mt-5 table align">
            <form action="{{route('jugadores.guardar')}}" method="POST">

                @csrf

                <div class="form-group">
                    <label for="nombres">Nombre de Jugador</label>
                    <input type="text" name="nombres" id="nombres" class="form-control">
                </div>
                <div class="form-group">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos" id="apellidos" class="form-control">
                </div>
                <div class="form-group">
                    <label for="numero_camisa">Numero de Camisa</label>
                    <input type="text" name="numero_camisa" id="numero_camisa" class="form-control">
                </div>
                <div class="form-group">
                    <label for="apodo">Apodo</label>
                    <input type="text" name="apodo" id="apodo" class="form-control">
                </div>
                <div class="form-group">
                    <label for="equipo_id">Equipo</label>
                    <br/>
                    <select name="equipo_id" id="equipo_id" class="form-group">
                        <option value="">Equipo...</option>
                        @foreach($equipos as $equipo)
                            <option value="{{$equipo->id}}">{{$equipo->nombre_equipo}}</option>
                        @endforeach
                    </select>
                </div>

                <button class="btn btn-primary" type="submit">Crear</button>

                <a href="{{route('index')}}" class="btn btn-danger" >Cancelar</a>

                <a href="{{route('jugadores.listar')}}" class="btn btn-info" >Ver jugadores</a>

            </form>
        </div>
    </div>
</div>

</body>
</html>

