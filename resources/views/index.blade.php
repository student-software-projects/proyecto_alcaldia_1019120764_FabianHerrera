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
    <title>Torneo Liga</title>
    <style>
        body {
            background-image: url("https://c.wallhere.com/photos/6d/72/soccer_ball_nike_grass-551223.jpg!d");
            background-repeat: no-repeat;
            background-size: cover;
            font-family: 'Montserrat', sans-serif;
            width: 100%;
            height: 100%;
        }

        .inicio {
            height: 100vh;
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
        }

        th,
        td {
            border: 0 !important;
        }

        .table {
            width: 100%;
            margin: 0;
            justify-content: center;
        }

        .table-responsive {
            background-color: rgb(33 37 41 / 83%);
            color: #e8e8e8;
        }

        .texcenter {
            text-align: center;
            font-size: 35px;
            color: #e8e8e8;
            font-weight: bold;
            text-transform: uppercase;
        }
        .card-2:hover{
            background: #212529;
        }

        img {
            width: 250px;
            height: 130px;
        }
        .mt-5, .my-5{
            margin: 0 !important;
        }

        .row {
            margin: 0
        }

        .card-2 {
            background: white;
            padding: 40px 0px;
            border-radius: 13px;
            transition: 0.3s;
            opacity: .9;
        }

        .flex {
            display: flex
        }

        .margin-center {
            margin: 0 40px;
        }

        .col-md-12 {
            flex: 0;
        }

        .card-image {
            margin-bottom: 40px;
        }

        div.container > div:nth:child(1) {
            display: block
        }
    </style>
</head>
<body>

<div class="container inicio">
    <div>
        <h1 class="texcenter">Torneo Liga</h1>
    </div>
    <div>
        <div class="col-md-12 mt-3 flex">

            <div class="card-2" align="center">
                <div class="row">
                    <div class="col s12 m7">
                        <div class="">
                            <div class="card-image">
                                <img
                                    src="https://c.wallhere.com/photos/35/6f/1920x1080_px_ArseniXC_bench_Cityscape_clouds_Everlasting_Summer_Flag_Statue-514525.png!d">
                                <br>
                            </div>
                            <div class="card-action texcenter">
                                <a href="{{route('localidad.listar')}}" class="btn btn-info btn-opa">Ver Localidades</a>
                            </div><div class="card-action texcenter">
                                <a href="{{route('localidad.crearlocalidad')}}" class="btn btn-info btn-opa">Registrar localidad</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-2 margin-center" align="center">

                <div class="row">
                    <div class="col s12 m7">
                        <div>
                            <div class="card-image">
                                <img
                                    src="https://c.wallhere.com/photos/b0/32/football_team_of_ukraine_ukraine-1011762.jpg!d">

                            </div>
                            <div class="card-action texcenter">
                                <a href="{{route('equipos.listar')}}" class="btn btn-info">Ver Equipos</a>
                            </div>
                            <div class="card-action texcenter">
                                <a href="{{route('equipos.crear')}}" class="btn btn-info"> Registrar Equipos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-2" align="center">
                <div class="row">
                    <div class="col s12 m7">
                        <div class="">
                            <div class="card-image">
                                <img
                                    src="https://c.wallhere.com/photos/6c/6a/Pierre_Emerick_Aubameyang_footballers_soccer_pitches_Borussia_Dortmund_Bundesliga-69905.jpg!d">
                            </div>
                            <div class="card-action texcenter">
                                <a href="{{route('jugadores.listar')}}" class="btn btn-info">Ver Jugadores</a>
                            </div>
                            <div class="card-action texcenter">
                                <a href="{{route('jugadores.crear')}}" class="btn btn-info">Registrar Jugadores</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
