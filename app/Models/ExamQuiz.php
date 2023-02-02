<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamQuiz extends Model
{
    use HasFactory;

    protected $table = 'exam_quiz'; 

    protected $fillable = [
        'exam_id',
        'question1'
    ];
}
