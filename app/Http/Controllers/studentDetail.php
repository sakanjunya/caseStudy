<?php

namespace App\Http\Controllers;

use App\models\Result;
use Illuminate\Http\Request;

class studentDetail extends Controller
{
    public function index($id,Request $request){
        $result_id = 0;
        if ($request->has('a')){
            $insert = $request->all();
//            $result_id = Result::insertGetId([
//                'student_id' => $id,
//                'teacher_id' => $request->session()->get('id'),
//                'researchability'=>$insert['a'],
//                'social'=>$insert['b'],
//                'reality'=>$insert['c'],
//                'sociability'=>$insert['e'],
//                'artisty'=>$insert['d'],
//            ]);
            $result = Result::where('id',1)->first();
        }
        else{
            $result = Result::where('id',$id)->first();
        }
        return view('studentDetail')
            ->with('result',$result);
    }
}
