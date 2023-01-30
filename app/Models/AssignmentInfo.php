<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignmentInfo extends Model
{
    use HasFactory;

    protected $table = 'assignment_info'; 

    protected $fillable = [
        'assignment_id',
        'textbox_description'
    ];
}
