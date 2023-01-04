@extends('layouts.create')

@section('title')
    Creación de Clases
@endsection

@section('css')
    rel="stylesheet" href="/css/form.css"
@endsection

@section('content')
    <div class="frame" style="padding-top: 15px" >
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h5 style="padding-top: 15px">Creación de clases</h5>
              <form action="{{ route('classrooms.store') }}" method="POST" autocomplete="off">
                <x-classroom-form-body :subjects="$subjects" :sections="$sections" :teachers="$teachers"/>
            </form>
            </div>
          </div>
        </div>
    </div>

@endsection
