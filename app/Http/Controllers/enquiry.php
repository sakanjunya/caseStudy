<?php

namespace App\Http\Controllers;

use App\models\Answer;
use App\models\Student;
use App\models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

//旧question.php
class enquiry extends Controller
{
    //
    public function index(Request $request,int $id){
        $student = Student::where('id',$id)->first();
        $question = Question::all();

        $answer = Answer::all();

        return view('question')
            ->with('student',$student)
            ->with('questions',$question)
            ->with('answers',$answer);
    }
}
