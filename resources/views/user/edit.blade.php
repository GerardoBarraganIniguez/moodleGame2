@extends('layouts.create')

@section('title')
    Editar Usuario <i>{{ $user->name }}</i>
@endsection

@section('css')
    rel="stylesheet" href="/css/form.css"
@endsection

@section('content')
<div class="frame" style="padding-top: 15px" >
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h5 style="padding-top: 15px">Edición de usuario: <i>{{ $user->name }}</i> </h5>
          <form action="{{ route('users.update', $user) }}" method="POST" autocomplete="off">
            @method('PATCH')
            <x-user-form-body :roles="$roles" :user="$user"/>
            <input type="submit" value="Actualizar">
        </form>   
        </div>
      </div>
    </div>
</div>
@endsection