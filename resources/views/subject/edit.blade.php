@extends('layouts.create')

@section('title')
    Editar Materia {{ $subject->name }}
@endsection

@section('css')
    rel="stylesheet" href="/css/form.css"
@endsection

@section('content')
<div class="frame" style="padding-top: 15px" >
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h5 style="padding-top: 15px">Edición de materia: <i>{{ $subject->name }}</i> </h5>
          <form action="{{ route('subjects.update', $subject) }}" method="POST" autocomplete="off">
            @method('PATCH')
            <x-subject-form-body :subject="$subject"/>
        </form>
        </div>
      </div>
    </div>
</div>
@endsection