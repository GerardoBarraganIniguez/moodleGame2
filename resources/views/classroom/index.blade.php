@extends('layouts.app')

@section('title')
    Administrar Clases
@endsection

@section('css')
    rel="stylesheet" href="/css/table.css"
@endsection

@section('content')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <img src="\img\a.png" alt="" class="custom-img">
    </a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#" style="padding-left: 1140px">Cerrar sesión</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="frame" style="padding-top: 15px">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h5 style="padding-top: 15px">Administración de Clases</h5>
        <form class="d-flex">
          <div class="form-group">
            <label for="searchOptions" style="font-size:90%">Selecciona una opción:</label>
            <select class="form-control" id="searchOptions" style="font-size:90%">
              <option style="font-size:90%">ID</option>
              <option style="font-size:90%">Nombre</option>
              <option style="font-size:90%">Email</option>
              <option style="font-size:90%">Rol</option>
            </select>
          </div>
          <div class="form-group justify-content-end w-50" style="margin-left:40px">
            <label for="searchInput" style="font-size:90%">Ingresa el término de búsqueda:</label>
            <input type="text" class="form-control" id="searchInput" style="font-size:90%">
          </div>
          <button type="submit" class="btn btn-primary" style="font-size:90%; margin-left:30px">Buscar</button>
        </form>
        <br>
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Materia</th>
              <th>Seccion</th>
              <th>Maestro</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($classrooms as $classroom)
                <tr>
                    <td>{{ $classroom->subject->name }}</td>
                    <td>{{ $classroom->section->name }}</td>
                    <td>{{ $classroom->teacher->name}}</td> <!-- esta relacion esta en el modelo Classroom -->
                    {{-- <td><a href="{{ route('assignments.create', $classroom) }}">Crear Tarea</a></td> --}}
                    {{-- <td><a href="{{ route('exams.create', $classroom) }}">Crear Examen</a></td> --}}
                    <td><a href="{{ route('classrooms.edit', $classroom) }}" class="btn btn-primary">Editar</a></td>
                    <td>
                        <form action="{{ route('classrooms.destroy', $classroom) }}" method="POST" autocomplete="off">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Eliminar" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
            @endforeach
          </tbody>
        </table>
        <a href="{{ route('classrooms.create') }}" class="btn btn-primary">Agregar nueva Clase</a>
      </div>
@endsection