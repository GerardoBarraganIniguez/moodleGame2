<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassroomTeacherController extends Controller //fue hecho para mostrar las clases de un maestro ya que habia problema con la paginacion por el metodo POST
{
    public function index()
    {
        $classrooms = auth()->user()->teacher_classrooms()->simplePaginate(3); //resultados de una relación
        return view('teacherUser.main', compact('classrooms'));
    }
}
