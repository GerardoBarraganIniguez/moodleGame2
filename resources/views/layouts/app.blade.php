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
    <body class="overflow-hidden">
        {{-- @yield('content') --}}
        <div class="container-fluid h-100">
            <div class="row h-100">
                <aside class="container-fluid bg-dark text-white min-vh-100 m-0 " style="width: 20%; position: fixed; height: 100%; float: left; display: flex; flex-direction: column;">
                    <div class="row text-center">
                        <div class="col p-0">
                            <h2 class="mb-0 mt-2">@yield('user')</h2>
                        </div>
                    </div>
                    <hr>
                    @yield('sidebar-options')
                </aside>
                <div class="main-content d-flex align-items-center justify-content-center" style="position:fixed; width:80%; height:100%; margin-left:20%; overflow-y:auto; background-color: #0303034d; flex-direciton:column">
                    @yield('content')
                </div>
            </div>
        </div>
        {{--<aside class="container-fluid bg-dark text-white min-vh-100 m-0 " style="width: 200px">
            <div class="row text-center">
                <div class="col p-0">
                    <h2 class="mb-0 mt-2">@yield('user')</h2>
                </div>
            </div>
            <hr>
            @yield('sidebar-options')
        </aside>--}}
    </body>
</html>