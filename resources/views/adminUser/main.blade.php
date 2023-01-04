@extends('layouts.app')

@section('title')
    Admin
@endsection

@section('css')
    rel="stylesheet" href="/css/app.css"
@endsection

@section('user')
    {{ auth()->user()->name }}
@endsection

@section('sidebar-options')
    <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a href="{{ route('users.index') }}" class="nav-link text-white mb-3 option">
            Administrar Usuarios
          </a>
        </li>
        <li>
          <a href="{{ route('subjects.index') }}" class="nav-link text-white mb-3 option">
            Administrar Materias
          </a>
        </li>
        <li >
          <a href="{{ route('sections.index') }}" class="nav-link text-white mb-3 option">
            Administrar Secciones
          </a>
        </li>
        <li>
          <a href="{{ route('classrooms.index') }}" class="nav-link text-white option">
            Clases
          </a>
        </li>
      </ul>
@endsection

