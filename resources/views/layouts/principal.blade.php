<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>
    <link rel="stylesheet" href="style.css">
    @vite(['resources/css/app.css', 'resources/css/app.scss', 'resources/js/app.js'])
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
            <a href="{{ url('/') }}" class="navbar-brand">
                <img src="{{ asset('img/logo.png') }}" alt="" height="50px" width="250px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
                aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Dades mestres</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ url('/tipus-usuaris') }}">Tipus de usuari</a>
                            <a class="dropdown-item" href="{{ url('/usuaris') }}">Usuaris</a>
                            <a class="dropdown-item" href="{{ url('/cicles') }}">Cicles</a>
                            <a class="dropdown-item" href="{{ url('/moduls') }}">Mòduls</a>
                            <a class="dropdown-item" href="{{ url('/assignar-profesor') }}">Assignar professor</a>
                            <hr>
                            <a class="dropdown-item" href="{{ url('/assignar-alumnes') }}">Assignar alumnes</a>
                            <a class="dropdown-item" href="{{ url('/resultats-aprenentatge') }}">Resultats aprenentatge</a>
                            <a class="dropdown-item" href="{{ url('/criteris-avaluacio') }}">Criteris avaluació</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Professors</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ url('/assignar-alumnes') }}">Assignar alumnes</a>
                            <a class="dropdown-item" href="{{ url('/resultats-aprenentarge') }}">Resultats aprenentatge</a>
                            <a class="dropdown-item" href="{{ url('/criteris-avaluacio') }}">Criteris avaluació</a>
                            <hr>
                            <a class="dropdown-item" href="{{ url('/autoavaluacio-alumnes') }}">Autoavaluació alumnes</a>
                            
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Alumnes</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ url('/autoavaluacio') }}">Autoavaluació</a>
                        </div>
                    </li>
                </ul>
                <form class="d-flex">
                    <h3>Filip</h3>
                </form>
            </div>
        </div>
    </nav>
    @yield('contenido')
</body>

</html>
