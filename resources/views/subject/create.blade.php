@extends('layouts.create')

@section('title')
    Creación de Materias
@endsection

@section('css')
    rel="stylesheet" href="/css/form.css"
@endsection

@section('content')
    
    <div class="frame" style="padding-top: 15px" >
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h5 style="padding-top: 15px">Creación de materias</h5>
              <form action="{{ route('subjects.store') }}" method="POST" autocomplete="off">
                <x-subject-form-body/>
            </form>
            </div>
          </div>
        </div>
    </div>

@endsection