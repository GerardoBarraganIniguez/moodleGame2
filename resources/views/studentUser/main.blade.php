@extends('layouts.app')

@section('title')
    Alumno
@endsection

@section('css')
    rel="stylesheet" href="/css/app.css"
@endsection

@section('user')
    {{ auth()->user()->name }}
@endsection

@section('sidebar-options')
    
@endsection

@section('content')

{{-- Aqui inicia la primera fila --}}

<div class="rectangle-container" style="display:flex; justify-content:center">
    <div class="rectangle" style="width: 300px; height: 250px; margin: 15px; border: 2px solid black; background-color: white; border-radius: 4px;">
        <div class="title w-100" style="background-color: lightgray; text-align: center; padding: 10px;">Nombre clase <br>Nombre profesor</div>
        <div class="list" style="margin: 10px">
          <ul>
            <li>Tarea 1</li>
            <li>Tarea 2</li>
            <li>Tarea 3</li>
          </ul>
        </div>
        <div class="separation" style="border-top: 1px solid gray; padding-top: 10px; margin: 10px">
            <li>Mis calificaciones</li>
            <li>Abandonar clase</li>
        </div>
    </div>
    <div class="rectangle" style="width: 300px; height: 250px; margin: 15px; border: 2px solid black; background-color: white; border-radius: 4px;">
        <div class="title w-100" style="background-color: lightgray; text-align: center; padding: 10px;">Nombre clase <br>Nombre profesor</div>
        <div class="list" style="margin: 10px">
          <ul>
            <li>Tarea 1</li>
            <li>Tarea 2</li>
            <li>Tarea 3</li>
          </ul>
        </div>
        <div class="separation" style="border-top: 1px solid gray; padding-top: 10px; margin: 10px">
            <li>Mis calificaciones</li>
            <li>Abandonar clase</li>
        </div>
    </div>
    <div class="rectangle" style="width: 300px; height: 250px; margin: 15px; border: 2px solid black; background-color: white; border-radius: 4px;">
        <div class="title w-100" style="background-color: lightgray; text-align: center; padding: 10px;">Nombre clase <br>Nombre profesor</div>
        <div class="list" style="margin: 10px">
          <ul>
            <li>Tarea 1</li>
            <li>Tarea 2</li>
            <li>Tarea 3</li>
          </ul>
        </div>
        <div class="separation" style="border-top: 1px solid gray; padding-top: 10px; margin: 10px">
            <li>Mis calificaciones</li>
            <li>Abandonar clase</li>
        </div>
    </div>
</div>

{{-- Aqui inicia la segunda fila --}}

<div class="rectangle-container" style="display:flex; justify-content:center">
    <div class="rectangle" style="width: 300px; height: 250px; margin: 15px; border: 2px solid black; background-color: white; border-radius: 4px;">
        <div class="title w-100" style="background-color: lightgray; text-align: center; padding: 10px;">Nombre clase <br>Nombre profesor</div>
        <div class="list" style="margin: 10px">
          <ul>
            <li>Tarea 1</li>
            <li>Tarea 2</li>
            <li>Tarea 3</li>
          </ul>
        </div>
        <div class="separation" style="border-top: 1px solid gray; padding-top: 10px; margin: 10px">
            <li>Mis calificaciones</li>
            <li>Abandonar clase</li>
        </div>
    </div>
    <div class="rectangle" style="width: 300px; height: 250px; margin: 15px; border: 2px solid black; background-color: white; border-radius: 4px;">
        <div class="title w-100" style="background-color: lightgray; text-align: center; padding: 10px;">Nombre clase <br>Nombre profesor</div>
        <div class="list" style="margin: 10px">
          <ul>
            <li>Tarea 1</li>
            <li>Tarea 2</li>
            <li>Tarea 3</li>
          </ul>
        </div>
        <div class="separation" style="border-top: 1px solid gray; padding-top: 10px; margin: 10px">
            <li>Mis calificaciones</li>
            <li>Abandonar clase</li>
        </div>
    </div>
    <div class="rectangle" style="width: 300px; height: 250px; margin: 15px; border: 2px solid black; background-color: white; border-radius: 4px;">
        <div class="title w-100" style="background-color: lightgray; text-align: center; padding: 10px;">Nombre clase <br>Nombre profesor</div>
        <div class="list" style="margin: 10px">
          <ul>
            <li>Tarea 1</li>
            <li>Tarea 2</li>
            <li>Tarea 3</li>
          </ul>
        </div>
        <div class="separation" style="border-top: 1px solid gray; padding-top: 10px; margin: 10px">
            <li>Mis calificaciones</li>
            <li>Abandonar clase</li>
        </div>
    </div>
</div>

@endsection