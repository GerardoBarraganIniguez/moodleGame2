@extends('layouts.app')

@section('title')
    Iniciar Sesión
@endsection

@section('css')
    rel="stylesheet" href="/css/login.css"
@endsection

@section('content')
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
    {{-- <form action="{{ route('login.store') }}" method="POST" autocomplete="off">
        @csrf
        <input name="email" type="email" placeholder="ejemplo@ejemplo.com">
        <input name="password" type="password" placeholder="contraseña">
        <input type="submit" value="Iniciar sesión">
    </form> --}}
@endsection