<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\ClassroomStudent;
use App\Models\User;
use Illuminate\Http\Request;

class ClassroomStudentController extends Controller
{
    public function index()
    {
        $students = User::where('role_id', 2)->get(); //solo los estudiantes
        $classrooms = Classroom::all();
        return view('classroom_student.index', compact('students', 'classrooms'));
    }

    public function create(User $user)
    {
        $classrooms = Classroom::all();
        return view('classroom_student.create', compact('user', 'classrooms'));
    }

    public function store(User $user, Request $request)
    {
        ClassroomStudent::create([
            'user_id' => $user->id,
            'classroom_id' => $request->classroom_id
        ]);

        return redirect()->route('classrooms_students.index');
    }
}
