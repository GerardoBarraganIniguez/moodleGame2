@extends('layouts.create')

@section('title')
    Lecciones
@endsection

@section('css')
    rel="stylesheet" href="/css/table.css"
@endsection

@section('content')
  <div class="frame" style="padding-top: 15px">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h5 style="padding-top: 15px">Mis lecciones</h5>
        <br>
        <table class="table">
          <thead>
            <tr>
              <th>No. de lección</th>
              <th>Título de la lección</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
                <tr>
                    <td>Lección 1</td>
                    <td>Bases de Datos</td>
                    <td><a href="#" class="btn btn-primary">Tomar lección</a></td>
                </tr>
                <tr>
                  <td>Lección 2</td>
                  <td>Diseño de una base de datos</td>
                  <td><a href="#" class="btn btn-primary">Tomar lección</a></td>
              </tr>
              <tr>
                <td>Lección 3</td>
                <td>Creación de una base de datos</td>
                <td><a href="#" class="btn btn-primary">Tomar lección</a></td>
            </tr>
          </tbody>
        </table>
        <a href="#" class="btn btn-primary" >Crear nueva lección</a>
      </div>
@endsection