<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = [
        'id',
        'student_id',
        'teacher_id',
        'question_id',
        'test_id',
        'update_at',
        'teacher_text',
        'student_text',
    ];
}
