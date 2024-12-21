<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- FAVICON --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logoHIA.png') }}">

    {{-- CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ini.css') }}" rel="stylesheet">

    <style>
        body {
            background-image: linear-gradient(rgba(13,110,253,0.4),rgba(13,110,253,1)),url({{asset('images/hia.png')}});
        }
        body {
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
        .fondo {
            max-width: 700px;
            width: 100%;
        }
        .fondore {
            max-width: 500px;
            width: 100%;
        }
        .login {
            width: 100%;
            padding: 50px 30px;
            background-color: rgba(255,255,255,0.8);

            -webkit-box-shadow: 0px 0px 5px 5px rgba(0,0,0,0.15);
            -moz-box-shadow: 0px 0px 5px 5px rgba(0,0,0,0.15);
            box-shadow: 0px 0px 5px 5px rgba(0,0,0,0.15);

            border-radius: 3px 3px 3px 3px;
            -moz-border-radius: 3px 3px 3px 3px;
            -webkit-border-radius: 3px 3px 3px 3px;

            box-sizing: border-box;
        }
        .container {
            display: flex;
            align-items: center;
            justify-content: center;

            margin: 0;
            padding: 0;
            min-width: 100vw;
            min-height: 100vh;
            width: 100%;
            height: 100%;
        }
    </style>

    <title>@yield('title') - Control Administrativo HIA</title>
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">

    @yield('content')

    <div class="mb-5"></div>
    <footer class="py-3 bg-primary" style="padding-bottom: 20px; padding-top: 20px">
        <p class="text-center text-white">&copy; 2025 UTPL - Practicum 4.1 - <strong>Estudiante:</strong> Edison Moisés Luzardo Delgado</p>
    </footer>

    {{-- JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
