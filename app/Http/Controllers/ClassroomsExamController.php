<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Exam;
use Illuminate\Http\Request;

class ClassroomsExamController extends Controller
{
    public function index(Classroom $classroom)
    {
        if(auth()->user()->role_id == 2){//estudiante
            $exams = Exam::where('classroom_id', $classroom->id)->get();
            return view('student_lesson.index', compact('exams', 'classroom'));
        }
        if(auth()->user()->role_id == 3){ //maestro
            $exams = Exam::where('classroom_id', $classroom->id)->get();
            return view('teacher_exam.index', compact('exams', 'classroom'));
        }
    }
    public function store(Request $request, Classroom $classroom)
    {
        Exam::create([
            'classroom_id' => $classroom->id,
            'name' => $request->name,
            'description' => $request->description
        ]);

        return redirect()->route('classroomsExam.index',compact('classroom'));
    }
}
