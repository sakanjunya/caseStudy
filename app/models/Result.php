<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    //
    protected $fillable = [
        'id',
        'researchability',
        'social',
        'reality',
        'sciability',
        'artisty',
    ];
}
