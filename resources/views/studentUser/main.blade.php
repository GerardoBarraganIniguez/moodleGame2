@extends('layouts.app')

@section('title')
    Estudiante
@endsection

@section('css')
    rel="stylesheet" href="/css/app.css"
@endsection

@section('user')
    {{ auth()->user()->name }}
@endsection

@section('sidebar-options')
    <a href="{{ route('classrooms_students.create', auth()->user()->id) }}">Unirse a una clase</a>
@endsection

@section('content')
<div style="display:flex; flex-direction:column">
  <div class="rectangle-container" style="display:flex; justify-content:center;">
  @foreach ($classrooms as $classroom) 
      <div class="rectangle" style="width: 300px; height: 250px; margin: 15px; border: 2px solid black; background-color: white; border-radius: 4px;">
          <div class="title w-100" style="background-color: lightgray; text-align: center; padding: 10px;">{{ $classroom->subject->name }} {{ $classroom->section->name }} <br>{{ $classroom->teacher->name }}</div>
          <div class="list" style="margin: 10px">
            <ul>
              <li>Tarea 1</li>
              <li>Tarea 2</li>
              <li>Tarea 3</li>
            </ul>
          </div>
          <div class="separation" style="border-top: 1px solid gray; padding-top: 10px; margin: 10px">
              <li>Mis calificaciones</li>
              <form action="{{ route('ClassroomsView.index', $classroom) }}" method="GET">
                @csrf
                <input type="submit" value="Ir a Clase" class="btn btn-success">
            </form>
          </div>
      </div>
  @endforeach
  <div style="padding-left:41%">
    {{  $classrooms->links('pagination::simple-bootstrap-5')  }}
  </div>
  </div>
</div>