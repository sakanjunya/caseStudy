<?php

namespace App\Http\Controllers;

use App\models\Classroom;
use App\models\Student;
use Illuminate\Http\Request;

class AddToStudent extends Controller
{
    //
    public function index(Request $request){
        $num = $request->all();
        $getClass = Classroom::where('id',$request->session()->get('class_id'))->first();


        return view('AddToStudent')
            ->with('num',$num)
            ->with('classroom',$getClass);
    }

    public function insert(Request $request){
        $insert = $request->all();

        $students = $insert['students'];

        foreach ($students as $index=>$val){
            Student::insert([
                'name'=>$val,
                'class_id'=>$request->session()->get('class_id'),
                'school_id'=>$request->session()->get('school_id'),
            ]);
        }

        return redirect('class/'.$request->session()->get('class_id'));
    }
}
