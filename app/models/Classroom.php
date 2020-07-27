<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    //
    protected $fillable = [
        'id',
        'class_name',
        'user_id',
        'shool_id',
    ];
}
