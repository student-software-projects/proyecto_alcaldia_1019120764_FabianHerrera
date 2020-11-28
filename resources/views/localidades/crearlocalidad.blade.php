<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="resources/css/css.css" TYPE="text/css" MEDIA=screen>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <title>Localidades-Crear</title>
    <style>
        body {
            background-image: url("https://c.wallhere.com/photos/35/6f/1920x1080_px_ArseniXC_bench_Cityscape_clouds_Everlasting_Summer_Flag_Statue-514525.png!d");
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
            background-color: #212529;
            color: #e8e8e8;
        }

        .table-responsive {
            background-color: #212529;
            color: #e8e8e8;
            opacity: .9;
        }

        .texcenter {
            text-align: center;
            font-size: 25px;
        }

        .div-form {
            width: 60%;
            margin: auto;
            padding: 40px 0px;
        }
        .col-40{
            width: 40%;
        }
        .border{
            border-radius: 71px;
        }
    </style>
</head>
<body>

<div class="container inicio col-40">
    <div class="row table-responsive border">
        <div class="div-form">
            <form action="{{route('localidad.guardar')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="localidad">Localidad</label>
                    <input type="text" name="localidad" id="localidad" class="form-control">
                </div>

                <button class="btn btn-primary" type="submit">Crear</button>

                <a href="{{route('index')}}" class="btn btn-danger">Cancelar</a>

                <br>
                <br>
                <br>

                <a href="{{route('localidad.listar')}}" class="btn btn-info">Ver localidades</a>

            </form>
        </div>
    </div>
</div>

</body>
</html>

