<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Program;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;


class ProgramController extends Controller
{


    public function all()
    {
        $programs = Program::get();

        return $programs;
    }
   

  
}