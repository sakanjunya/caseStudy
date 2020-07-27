<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class SutitableJob extends Model
{
    //
    protected $fillable = [
        'id',
        'job_name',
        'reasons',
        'type'
    ];
}
