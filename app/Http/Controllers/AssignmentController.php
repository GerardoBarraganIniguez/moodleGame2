<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function create(Classroom $classroom)
    {
        return view('assignment.create', compact('classroom'));
    }
}
