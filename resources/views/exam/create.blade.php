@extends('layouts.app')

@section('title')
    Crear tarea
@endsection

@section('css')
    rel="stylesheet" href="/css/createassignments.css"
@endsection

@section('content')
  <div class="frame" style="padding-top: 15px">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <h5 style="padding-top: 15px">Crear Examen</h5>
            <form action="{{ route('classroomsExa.store', $classroom) }}" class="form-group" method="POST">
              @csrf
              <label for="name">Nombre</label>
              <input name="name" type="text" class="form-control" id="name" aria-describedby="name" placeholder="...">
              
              <label for="description">Descripción</label>
              <textarea name="description" id="description" cols="30" rows="10"></textarea>

              <input type="submit" value="Terminar">
            </form>
        </div>
      </div>
    </div>
  </div>
@endsection