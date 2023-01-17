@extends('layouts.create')

@section('title')
    Exámemes
@endsection

@section('css')
    rel="stylesheet" href="/css/table.css"
@endsection

@section('content')
  <div class="frame" style="padding-top: 15px">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h5 style="padding-top: 15px">Mis exámenes</h5>
        <br>
        <table class="table">
          <thead>
            <tr>
              <th>No. de exámen</th>
              <th>Título del exámen</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
                <tr>
                    <td>Exámen 1</td>
                    <td>Bases de Datos</td>
                    <td><a href="#" class="btn btn-primary">Realizar exámen</a></td>
                </tr>
                <tr>
                  <td>Exámen 2</td>
                  <td>Diseño de una base de datos</td>
                  <td><a href="#" class="btn btn-primary">Realizar exámen</a></td>
              </tr>
              <tr>
                <td>Exámen 3</td>
                <td>Creación de una base de datos</td>
                <td><a href="#" class="btn btn-primary">Realizar exámen</a></td>
            </tr>
          </tbody>
        </table>
      </div>
@endsection