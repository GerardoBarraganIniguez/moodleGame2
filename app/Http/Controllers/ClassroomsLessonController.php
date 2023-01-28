<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomsLessonController extends Controller
{
    public function index(Classroom $classroom)
    {
        $assignments = Assignment::where('classroom_id', $classroom->id)->get();
        return view('teacher_lesson.index', compact('assignments', 'classroom'));
    }
}
