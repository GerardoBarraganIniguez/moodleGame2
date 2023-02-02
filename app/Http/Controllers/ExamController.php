<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function create(Classroom $classroom)
    {
        return view('exam.create', compact('classroom'));
    }
}
