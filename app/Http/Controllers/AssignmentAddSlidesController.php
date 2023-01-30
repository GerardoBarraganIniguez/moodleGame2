<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\AssignmentInfo;
use App\Models\Classroom;
use Illuminate\Http\Request;

class AssignmentAddSlidesController extends Controller
{
    public function index(Classroom $classroom, Assignment $assignment)
    {
        return view('assignmentAddSlides.index', compact('classroom','assignment'));
    }
    public function store(Request $request, Assignment $assignment)
    {
        AssignmentInfo::create([
            'assignment_id' => $assignment->id,
            'textbox_description' => $request->slide
        ]);

        return 'registros agregado';
    }
}
