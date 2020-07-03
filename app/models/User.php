<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $fillable = [
        'id',
        'name',
        'mail',
        'password',
        'school_id'
    ];
}
