<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <title>localidad-Editar</title>
    <style>
        body {
            background-image: url("https://c.wallhere.com/photos/35/6f/1920x1080_px_ArseniXC_bench_Cityscape_clouds_Everlasting_Summer_Flag_Statue-514525.png!d");
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
            <form action="{{route('localidad.actualizar',$localidad->id)}}" method="post">
                @csrf
                @method('PUT')
                <table class="table table-responsive texcenter">

                    <tr>
                        <br/>
                        <th>Localidad</th>
                        <br/>
                        <td><input size="40" type="text" name="localidad" class="form-control" value="{{$localidad->localidad}}"></td>
                    </tr>

                </table>

                        <button type="submit" class="btn btn-warning offset-md-2">Actualizar</button>
                        <a href="{{route('localidad.listar')}}" class="btn btn-info offset-md-3">Cancelar</a>
                <br>
                <br>
                <br>

            </form>
        </div>
    </div>
</div>

</body>
</html>


