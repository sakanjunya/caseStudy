<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable = [
        'id',
        'name',
        'class_id',
        'password',
        'school_ud',
        'update_at',
    ];
}
