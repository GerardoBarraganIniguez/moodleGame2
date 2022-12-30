@extends('layouts.app')

@section('title')
    Editar Usuario <i>{{ $user->name }}</i>
@endsection

@section('content')
    <form action="{{ route('users.update', $user) }}" method="POST" autocomplete="off">
        @method('PATCH')
        <x-user-form-body :roles="$roles" :user="$user"/>
        <input type="submit" value="Actualizar">
    </form>
@endsection