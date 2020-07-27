<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    //
    protected $fillable =[
        'id',
        'work',
        'dream',
        'club',
        'work_info',
        'presentation',
        'interviews',
        'high_school',
        'unvercity'
    ]
}
