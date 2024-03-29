<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link @yield('css')>
        <title>@yield('title')</title>
    </head>
    <header>
      <nav class="navbar navbar-dark bg-dark">
         <div class="container-fluid">
            <img src="/img/logo_barra.png" alt="Logo" style="width: 120px;"> 
            <form action="{{ route('login.logout') }}" method="POST">
                @csrf
                <button class="btn btn-outline-light" type="submit">Cerrar Sesión</button>
            </form>
        </div> 
      </nav>
    </header>
    <body>
        @yield('content')
    </body>
</html>