@extends('layouts.create')

@section('title')
    Creación de Materias
@endsection

@section('css')
    rel="stylesheet" href="/css/form.css"
@endsection

@section('content')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="/img/LogoSuperior2.png" alt="" class="custom-img">
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
            <a class="nav-link" href="#" style="padding-left: 1140px">Cerrar sesión</a>
            </li>
        </ul>
        </div>
    </nav>
    
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