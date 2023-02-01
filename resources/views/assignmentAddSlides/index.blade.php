@extends('layouts.app')

@section('title')
    Crear tarea
@endsection

@section('css')
    rel="stylesheet" href="/css/createassignments.css"
@endsection

@section('content')
<div class="frame" style="padding-top: 15px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h5 style="padding-top: 15px">Agregar diapositivas</h5>
                <form action="{{ route('assignmentsAddSlides.store', [$assignment, $classroom]) }}" method="POST">
                    @csrf
                    <textarea name="slide" id="slide" cols="30" rows="10"></textarea>
                    <input type="submit" value="Terminar" class="btn btn-primary" id="btn-submit">
                </form> 
            </div>
        </div>
    </div>
</div>
@endsection