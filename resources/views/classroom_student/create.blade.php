@extends('layouts.app')

@section('title')
    Unir a <i>{{ $user->name }}</i> a una clase
@endsection

@section('content')
    <form action="{{ route('classrooms_students.store', $user) }}" method="POST" autocomplete="off">
        @csrf
        <select name="classroom_id">
            @foreach ($classrooms as $classroom)
                <option value="{{ $classroom->id }}">{{ $classroom->id }}</option>
            @endforeach
            <input type="submit" value="Unirse">
        </select>
    </form>
@endsection