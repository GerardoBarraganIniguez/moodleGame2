@extends('layouts.create')

@section('title')
    Creación de Usuarios
@endsection

@section('css')
    rel="stylesheet" href="/css/form.css"
@endsection

@section('content')
    <div class="frame" style="padding-top: 15px" >
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h5 style="padding-top: 15px">Creación de usuarios</h5>
              <form class="form-group" action="{{ route('users.store') }}" method="POST" autocomplete="off">
                <x-user-form-body :roles="$roles"/>
              </form>    
            </div>
          </div>
        </div>
    </div>

@endsection
