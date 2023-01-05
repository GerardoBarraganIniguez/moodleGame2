@extends('layouts.create')

@section('title')
    Editar seccion {{ $section->name }}
@endsection

@section('css')
    rel="stylesheet" href="/css/form.css"
@endsection

@section('content')
<div class="frame" style="padding-top: 15px" >
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h5 style="padding-top: 15px">Edición de sección: <i>{{ $section->name }}</i> </h5>
          <form action="{{ route('sections.update',$section) }}" method="POST" autocomplete="off">
            @method('PATCH')
            <x-section-form-body :section="$section"/>
        </form>
        </div>
      </div>
    </div>
</div>
@endsection