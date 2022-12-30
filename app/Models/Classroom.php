<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_id',
        'section_id',
        'user_id'
    ];

    public function subject()
    {
        return $this->hasOne(Subject::class, 'id', 'subject_id');
    }
    public function section()
    {
        return $this->hasOne(Section::class, 'id', 'section_id');
    }
    public function teacher()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    public function students()
    {
        return $this->belongsToMany(User::class, 'classroom_student');
    }
}
