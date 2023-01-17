<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Section;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function index()
    {
        $classrooms = Classroom::paginate(5);
        return view('classroom.index',compact('classrooms'));
    }

    public function create()
    {
        $subjects = Subject::all();
        $sections = Section::all();
        $teachers = User::where('role_id', 3)->get(); //solo los maestros
        return view('classroom.create', compact('subjects','sections','teachers'));
    }

    public function store(Request $request)
    {
        Classroom::create([
            'subject_id' => $request->subject,
            'section_id' => $request->section,
            'user_id' => $request->teacher
        ]);

        return redirect()->route('classrooms.index');
    }

    public function edit(Classroom $classroom)
    {
        $subjects = Subject::all();
        $sections = Section::all();
        $teachers = User::where('role_id', 3)->get(); //solo los maestros
        return view('classroom.edit', compact('classroom','subjects','sections','teachers'));
    }

    public function update(Request $request, Classroom $classroom)
    {
        $classroom->update([
            'subject_id' => $request->subject,
            'section_id' => $request->section,
            'user_id' => $request->teacher
        ]);

        return redirect()->route('classrooms.index');
    }
    
    public function destroy(Classroom $classroom, User $user)
    {
        if($user->role_id == 1){ //si es admin
            $classroom->delete();
            return redirect()->route('classrooms.index');
        }
        if($user->role_id == 3){ //si es maestro
            $classroom->delete();
            return redirect()->route('showClassrooms.index');
        }
    }
}
