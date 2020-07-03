<?php

namespace App\Http\Controllers;

use App\models\Student;
use Illuminate\Http\Request;

class classPage extends Controller
{
    //
    public function index(int $id, Request $request){

        $classmates = Student::where('class_id',$id)->get();

        $request->session()->put('class_id', $id);

        return view('classPage')
            ->with('classmates',$classmates);
    }
}
