<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //
    protected $fillable =[
        'id',
        'text',
        'question_id',
    ];
}
