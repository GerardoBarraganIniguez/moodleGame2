@extends('layouts.app')

@section('title')
    Editar Clase <i>{{ $classroom->id }}</i>
@endsection

@section('css')
    rel="stylesheet" href="/css/form.css"
@endsection

@section('content')
<div class="frame" style="padding-top: 15px" >
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <h5 style="padding-top: 15px">Edición de clase: <i>{{ $classroom->id }}</i> </h5>
            <form action="{{ route('classrooms.update', $classroom) }}" method="POST" autocomplete="off">
            @method('PATCH')
            <x-classroom-form-body :classroom="$classroom" :subjects="$subjects" :sections="$sections" :teachers="$teachers"/>
            <input type="submit" value="Actualizar">
            </form>
        </div>
      </div>
    </div>
</div>
@endsection