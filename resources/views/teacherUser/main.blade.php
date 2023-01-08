@extends('layouts.app')

@section('title')
    Maestro
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
<p class="text-danger">holas</p>
{{-- <div class="container-fluid h-100">
    <div class="row h-100">
        <div class="sidebar">
            <div class="sidebar-list1">
                <h5 style="margin:10px">Clases</h5>
                <a href="{{ route('classrooms_students.create', auth()->user()) }}">Unirse a clase</a>
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
          @foreach (auth()->user()->classrooms as $classroom)
            <div class="rectangle-container">
              <div class="rectangle">
                  <div class="title w-100">{{ $classroom->subject->name}} <br>{{ $classroom->teacher->name }}</div>
                  {{-- <div class="list">
                    <ul>
                      <li>Tarea 1</li>
                      <li>Tarea 2</li>
                      <li>Tarea 3</li>
                    </ul>
                  </div>
                  <div class="separation">
                      <li>Mis calificaciones</li>
                      <li>Abandonar clase</li>
                  </div> --}}
              {{-- </div>
            </div>  --}}
            {{-- <td>{{ $classroom->subject->name }}</td> --}}
          {{-- @endforeach                   
        </div> 
    </div>
</div> --}} 
@endsection