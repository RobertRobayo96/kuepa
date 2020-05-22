<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;


class StudentController extends Controller
{


    public function showStudentRegisterForm()
    {
        return view('student.register');
    }

    public function all()
    {
        $students= \App\Student::with('program')->get();
        return view('admin.student',compact('students'));
    }
    public function create(Request $request)
    {
      
        $student= array(
            'last_name' => $request['last_name'],
            'name' => $request['name'],
            'phone_number' => $request['telephone'],
            'address' => $request['address'],
            'email' => $request['email'],
            'date_contact'=> date('Y-m-d H:i:s'),
            'interested_program' =>$request['program'],

        );


        $res= \App\Student::insert($student); 

        if ($res = 1)
        {
            $message = "Your information was saved on our systems successfully. Past 2 days, we will contact with you";
            return response() -> json($message, 200);
         
        }else{

            return "the information wasn't saved , please try again";
        }
        
    }

  
}