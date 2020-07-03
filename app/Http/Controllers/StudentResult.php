<?php

namespace App\Http\Controllers;

use App\models\Classroom;
use App\models\Student;
use Illuminate\Http\Request;

class StudentResult extends Controller
{
    //
    public function index(int $id){

        $student = Student::where('id',$id)
            ->first();

        $classroom = Classroom::where('id',$student['class_id'])->first();

        return view('studentResult')
            ->with('student',$student)
            ->with('classroom',$classroom);
    }
}
