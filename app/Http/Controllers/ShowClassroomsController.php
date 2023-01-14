<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowClassroomsController extends Controller
{
    public function index()
    {
        if(auth()->user()->role_id == 2){ //si es estudiante
            $classrooms = auth()->user()->student_classrooms()->simplePaginate(3); //resultados de una relación
            return view('studentUser.main', compact('classrooms'));
        }
        if(auth()->user()->role_id == 3){ //si es maestro
            $classrooms = auth()->user()->teacher_classrooms()->simplePaginate(3); //resultados de una relación
            return view('teacherUser.main', compact('classrooms'));
        }
    }
}
