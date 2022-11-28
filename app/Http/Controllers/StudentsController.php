<?php

namespace App\Http\Controllers;

use Illuminate\Https\Request;
use App\Models\Student;

class StudentsController extends Controller
{
    public function student()
    {
        return view('student',[
            "title" => "Student",
            "students" => Student::all()
        ]);
    }
}
