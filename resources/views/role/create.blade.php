@extends('layouts.app')

@section('title')
    Crear Rol
@endsection

@section('content')
    <form action="{{ route('roles.store') }}" method="POST" autocomplete="off">
        @csrf
        <input name="name" type="text" placeholder="Nuevo Rol">
        <input type="submit" value="Crear">
    </form>
@endsection