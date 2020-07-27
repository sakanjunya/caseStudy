<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    //
    protected $fillable =[
        'id',
        'type',
        'job_name',
        'job_description',
    ];
}
