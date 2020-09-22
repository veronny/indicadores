<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SIE Salud Junin</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>


    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Inicio</a> @else
            <a href="{{ route('login') }}">Iniciar Sesion</a> @if (Route::has('register'))
            <a href="{{ route('register') }}">Registrarse</a> @endif @endauth
        </div>
        @endif

        <div class="jumbotron">
            <div class="row justify-content-md-center">
                <div class="col-6">
                    <img src="{{ url('img/LogoDiresa.png') }}" style="width:250px;height:120px">
                </div>
                <div class="col-6">
                    <img src="{{ url('img/LogoRegionJunin.png') }}" style="width:300px;height:120px">
                </div>
            </div>
            <br>
            <div class="row justify-content-md-center">
                <p>
                    <h1 style="color:black;">SISTEMA DE SEGUIMIENTO EN SALUD</h1>
                </p>
            </div>
        </div>
    </div>
</body>

</html>
