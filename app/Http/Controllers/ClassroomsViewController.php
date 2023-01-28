<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomsViewController extends Controller
{
    public function index(Classroom $classroom)
    {
        return view('classroom_view.index', compact('classroom'));
    }
}
