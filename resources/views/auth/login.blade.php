<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/login.css">
        <title>Login</title>
    </head>
    <body>
        <div class="frame borde-login">
            <form class="form" action="{{ route('login.store') }}" method="POST" autocomplete="off">
                @csrf
                <h4>Iniciar sesión</h4>
                <p>Por favor digite su usuario y contraseña</p>
                <label for="email">Email:</label>
                <input name="email" type="email" placeholder="correo@correo.com">
                <label for="password">Contraseña:</label>
                <input type="password" name="password" placeholder="Contraseña"><br>
                <input type="submit" value="Iniciar sesión"><br>
                <a href="#">Olvidaste tu contraseña?</a>
            </form>
            <div class="img">
              <img src="/img/logo.png" alt="Logo" class="logo">
            </div>
        </div>
    </body>
</html>