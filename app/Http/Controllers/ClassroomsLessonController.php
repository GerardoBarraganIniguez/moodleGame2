<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomsLessonController extends Controller
{
    public function index(Classroom $classroom)
    {
        if(auth()->user()->role_id == 2){//estudiante
            $assignments = Assignment::where('classroom_id', $classroom->id)->get();
            return view('student_lesson.index', compact('assignments', 'classroom'));
        }
        if(auth()->user()->role_id == 3){ //maestro
            $assignments = Assignment::where('classroom_id', $classroom->id)->get();
            return view('teacher_lesson.index', compact('assignments', 'classroom'));
        }
    }
    public function store(Request $request, Classroom $classroom)
    {
        Assignment::create([
            'classroom_id' => $classroom->id,
            'name' => $request->name,
            'description' => $request->description
        ]);

        return redirect()->route('classroomsLesson.index',compact('classroom'));
    }
}