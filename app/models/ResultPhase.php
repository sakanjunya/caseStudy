<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class ResultPhase extends Model
{
    //
    protected $fillable = [
        'id',
        'type',
        'result_student',
        'result_teacher',
        'result_name'
    ];
}
