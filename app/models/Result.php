<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    //
    protected $fillable = [
        'id',
        'student_id',
        'teacher_id',
        'researchability',
        'social',
        'reality',
        'sociability',
        'artisty',
    ];
}
