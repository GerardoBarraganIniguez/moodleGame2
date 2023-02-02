@extends('layouts.app')

@section('title')
    Clase {{ $classroom->subject->name }}
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
          <a href="{{ route('classroomsLesson.index', $classroom) }}" class="nav-link text-white mb-3 option">
            Lecciones
          </a>
        </li>
        <li>
          <a href="{{ route('classroomsExam.index', $classroom) }}" class="nav-link text-white mb-3 option">
            Exámenes
          </a>
        </li>
      </ul>
@endsection

@section('content')
      {{ $classroom->subject->name }}
      {{ $classroom->section->name }}
@endsection