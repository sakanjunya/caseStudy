<?php

namespace App\Http\Controllers;

use App\models\Classroom;
use App\models\Result;
use App\models\Student;
use Illuminate\Http\Request;

class StudentResult extends Controller
{
    //
    public function index(int $id){

        //idから生徒情報を取得
        $student = Student::where('id',$id)
            ->first();
        //クラスIDからクラス名を取得
        $classroom = Classroom::where('id',$student['class_id'])->first();

        $results = Result::where('student_id',$id)->get();

        return view('studentResult')
            ->with('student',$student)
            ->with('classroom',$classroom)
            ->with('results',$results);
    }
}
