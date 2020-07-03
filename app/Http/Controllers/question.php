<?php

namespace App\Http\Controllers;

use App\models\Student;
use Illuminate\Http\Request;

class question extends Controller
{
    //
    public function index(Request $request,int $id){
        $student = Student::where('id',$id)->first();

        return view('question')
            ->with('student',$student);
    }
}
