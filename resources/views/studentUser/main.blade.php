@extends('layouts.app')

@section('title')
    Estudiante
@endsection

@section('css')
    rel="stylesheet" href="/css/app.css"
@endsection


@section('content')
<div class="container-fluid h-100">
    <div class="row h-100">
        <div class="sidebar">
            <div class="sidebar-list1">
                <h5 style="margin:10px">Clases</h5>
            </div>
            <div class="sidebar-line"></div>
            <div class="sidebar-list2">
                <h5 style="margin:10px">Tareas pendientes</h5>
            </div>
            <div class="sidebar-bottom">
                <p>Bienvenido {{ auth()->user()->name }}</p>
                <a href="#" style="color: white">Cerrar sesión</a>
            </div>
        </div>

        <div class="main-content">
            <div class="rectangle-container">
                <div class="rectangle">
                    <div class="title w-100">Nombre clase <br>Nombre profesor</div>
                    <div class="list">
                      <ul>
                        <li>Tarea 1</li>
                        <li>Tarea 2</li>
                        <li>Tarea 3</li>
                      </ul>
                    </div>
                    <div class="separation">
                        <li>Mis calificaciones</li>
                        <li>Abandonar clase</li>
                    </div>
                </div>
                <div class="rectangle">
                    <div class="title w-100">Nombre clase <br>Nombre profesor</div>
                    <div class="list">
                      <ul>
                        <li>Tarea 1</li>
                        <li>Tarea 2</li>
                        <li>Tarea 3</li>
                      </ul>
                    </div>
                    <div class="separation">
                        <li>Mis calificaciones</li>
                        <li>Abandonar clase</li>
                    </div>
                </div>
                <div class="rectangle">
                    <div class="title w-100">Nombre clase <br>Nombre profesor</div>
                    <div class="list">
                      <ul>
                        <li>Tarea 1</li>
                        <li>Tarea 2</li>
                        <li>Tarea 3</li>
                      </ul>
                    </div>
                    <div class="separation">
                        <li>Mis calificaciones</li>
                        <li>Abandonar clase</li>
                    </div>
                </div>
            </div>
            <div class="rectangle-container">
                <div class="rectangle">
                    <div class="title w-100">Nombre clase <br>Nombre profesor</div>
                    <div class="list">
                      <ul>
                        <li>Tarea 1</li>
                        <li>Tarea 2</li>
                        <li>Tarea 3</li>
                      </ul>
                    </div>
                    <div class="separation">
                        <li>Mis calificaciones</li>
                        <li>Abandonar clase</li>
                    </div>
                </div>
                <div class="rectangle">
                    <div class="title w-100">Nombre clase <br>Nombre profesor</div>
                    <div class="list">
                      <ul>
                        <li>Tarea 1</li>
                        <li>Tarea 2</li>
                        <li>Tarea 3</li>
                      </ul>
                    </div>
                    <div class="separation">
                        <li>Mis calificaciones</li>
                        <li>Abandonar clase</li>
                    </div>
                </div>
                <div class="rectangle">
                    <div class="title w-100">Nombre clase <br>Nombre profesor</div>
                    <div class="list">
                      <ul>
                        <li>Tarea 1</li>
                        <li>Tarea 2</li>
                        <li>Tarea 3</li>
                      </ul>
                    </div>
                    <div class="separation">
                        <li>Mis calificaciones</li>
                        <li>Abandonar clase</li>
                    </div>
                </div>
            </div>
            <div class="rectangle-container">
                <div class="rectangle">
                    <div class="title w-100">Nombre clase <br>Nombre profesor</div>
                    <div class="list">
                      <ul>
                        <li>Tarea 1</li>
                        <li>Tarea 2</li>
                        <li>Tarea 3</li>
                      </ul>
                    </div>
                    <div class="separation">
                        <li>Mis calificaciones</li>
                        <li>Abandonar clase</li>
                    </div>
                </div>
                <div class="rectangle">
                    <div class="title w-100">Nombre clase <br>Nombre profesor</div>
                    <div class="list">
                      <ul>
                        <li>Tarea 1</li>
                        <li>Tarea 2</li>
                        <li>Tarea 3</li>
                      </ul>
                    </div>
                    <div class="separation">
                        <li>Mis calificaciones</li>
                        <li>Abandonar clase</li>
                    </div>
                </div>
                <div class="rectangle">
                    <div class="title w-100">Nombre clase <br>Nombre profesor</div>
                    <div class="list">
                      <ul>
                        <li>Tarea 1</li>
                        <li>Tarea 2</li>
                        <li>Tarea 3</li>
                      </ul>
                    </div>
                    <div class="separation">
                        <li>Mis calificaciones</li>
                        <li>Abandonar clase</li>
                    </div>
                </div>
            </div>                   
        </div>
    </div>
</div>

@endsection
