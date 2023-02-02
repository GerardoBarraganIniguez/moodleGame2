<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Exam;
use App\Models\ExamQuiz;
use Illuminate\Http\Request;

class ExamAddQuestionsController extends Controller
{
    public function index(Classroom $classroom, Exam $exam)
    {
        return view('examAddQuestions.index', compact('classroom','exam'));
    }
    public function store(Request $request, Exam $exam, Classroom $classroom)
    {
        ExamQuiz::create([
            'exam_id' => $exam->id,
            'question1' => $request->question1
        ]);

        return redirect()->route('classroomsExam.index', compact('classroom'));
    }
}
