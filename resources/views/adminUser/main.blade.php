@extends('layouts.app')

@section('title')
    Admin
@endsection

@section('css')
    rel="stylesheet" href="/css/app.css"
@endsection


@section('content')
<div class="container-fluid h-100">
    <div class="row h-100">
        <div class="sidebar">
            <div class="sidebar-list1">
                <h5 style="margin:10px">Acciones</h5>
                <a href="{{ route('users.index') }}">Administrar Usuarios</a>
                <a href="{{ route('subjects.index') }}">Administrar Materias</a>
                <a href="{{ route('sections.index') }}">Administrar Secciones</a>
                <a href="{{ route('classrooms.index') }}">Administrar Clases</a>
            </div>
            <div class="sidebar-bottom">
                <p>Bienvenido {{ auth()->user()->name }}</p>
                <a href="#" style="color: white">Cerrar sesión</a>
            </div>
        </div>
    </div>
</div>

@endsection
