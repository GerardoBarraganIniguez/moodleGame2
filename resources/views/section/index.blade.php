@extends('layouts.create')

@section('title')
    Administrar Secciones
@endsection

@section('css')
    rel="stylesheet" href="/css/table.css"
@endsection

@section('content')
  <div class="frame" style="padding-top: 15px">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h5 style="padding-top: 15px">Administración de secciones</h5>
        <form class="d-flex">
          <div class="form-group">
            <label for="searchOptions" style="font-size:90%">Selecciona una opción:</label>
            <select class="form-control" id="searchOptions" style="font-size:90%">
              <option style="font-size:90%">ID</option>
              <option style="font-size:90%">Nombre</option>
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
              <th>Nombre</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($sections as $section)
                <tr>
                    <td>{{ $section->id }}</td>
                    <td>{{ $section->name }}</td>
                    <td><a href="{{ route('sections.edit', $section) }}" class="btn btn-primary">Editar</a></td>
                    <td>
                        <form action="{{ route('sections.destroy', $section) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Eliminar" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
            @endforeach
          </tbody>
        </table>
        <form class="d-flex justify-content-between">
          <div class="form-group">
            <a href="{{ route('sections.create') }}" class="btn btn-primary">Agregar nueva seccion</a>
          </div>
          <div>
            {{  $sections->links('pagination::simple-bootstrap-5')  }}
          </div>
        </form>
      </div>
@endsection