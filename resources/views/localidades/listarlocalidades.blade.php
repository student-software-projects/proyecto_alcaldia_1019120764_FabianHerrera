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
    <title>Localidades-Listado</title>
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
            margin-bottom: 1rem;
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
                    <th>Localidad</th>
                    <th>Opciones</th>
                </tr>
                </thead>

                <tbody>


                @foreach($localidad as $localidad)
                    <tr style="text-align: center">
                        <td>{{$localidad->localidad }}</td>
                        <td>

                            <form action="{{ route('localidad.eliminar',$localidad->id) }}" method="post">

                                @csrf
                                @method('DELETE')

                                <a href="{{route('localidad.editar',$localidad->id)}}"
                                   class="btn btn-warning">Editar</a>
                                <button type="submit" class="btn btn-danger">Eliminar</button>

                            </form>

                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
        <br/>
        <td>
            <a href="{{route('localidad.crearlocalidad')}}" class="btn btn-info">Registrar Localidad</a>
            <br/>
            <br/>
            <a href="{{route('index')}}" class="btn btn-info">Volver a Pag. de Inicio</a>

        </td>
    </div>
</div>
</body>
</html>
