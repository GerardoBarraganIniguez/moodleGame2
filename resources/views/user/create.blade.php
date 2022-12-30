@extends('layouts.app')

@section('title')
    Crear Usuarios
@endsection

@section('content')
    <form action="{{ route('users.store') }}" method="POST" autocomplete="off">
        <x-user-form-body :roles="$roles"/>
        <input type="submit" value="Crear">
    </form>    
@endsection
