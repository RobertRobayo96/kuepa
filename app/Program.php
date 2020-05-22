<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $casts = [
    ];

    protected $fillable = [
        'id','description','duration','deleted',

    ];
}
