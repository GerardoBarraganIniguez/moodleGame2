@extends('layouts.app')

@section('title')
    Agregar Preguntas
@endsection

@section('css')
    rel="stylesheet" href="/css/createassignments.css"
@endsection

@section('content')
<div class="frame" style="padding-top: 15px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h5 style="padding-top: 15px">Agregar preguntas</h5>
                <form action="{{ route('examsAddQuestions.store', [$exam, $classroom]) }}" method="POST">
                    @csrf
                    <textarea name="question1" id="question1" cols="30" rows="10"></textarea>
                    <input type="submit" value="Terminar" class="btn btn-primary" id="btn-submit">
                </form> 
            </div>
        </div>
    </div>
</div>
@endsection