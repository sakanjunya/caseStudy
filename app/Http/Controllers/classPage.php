<?php

namespace App\Http\Controllers;

use App\models\Classroom;
use App\models\Student;
use Illuminate\Http\Request;

class classPage extends Controller
{
    //
    public function index(int $id, Request $request){

        //IDから生徒一覧を取得
        $classmates = Student::where('class_id',$id)
            ->orderBy('name','desc')
            ->get();
        $className = Classroom::select('class_name')->
            where('id',$id)->first();
        $request->session()->put('class_id',$id);


        return view('classPage')
            ->with('classmates',$classmates)
            ->with('className',$className->class_name);
    }
}
