<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $casts = [
    ];

    protected $fillable = [
        'id',
        'last_name',
        'name',
        'phone_number',
        'address','email',
        'date_contact',
        'program',
        'contacted',
        'contacted_by',
        'contacted_date',
        'deleted'

    ];

    public function program(){
        return $this->belongsTo(Program::class, 'program');
    }
}
