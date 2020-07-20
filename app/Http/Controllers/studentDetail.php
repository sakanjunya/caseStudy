<?php

namespace App\Http\Controllers;

use App\models\job;
use App\models\Jobs;
use App\models\Result;
use App\models\ResultPhase;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class studentDetail extends Controller
{
    public function index($id,Request $request){

        $result = Result::where('id',$id)->first();
        $select_result = Result::where('student_id',$id)->get();
        $all_result = Result::get();// 全件
        $categories = [
            'a'=>$result->researchability,
            'b'=>$result->social,
            'c'=>$result->reality,
            'd'=>$result->artisty,
            'e'=>$result->sociability,
        ];
        
        arsort($categories);
        $personalities = '';
        $i =0;
        foreach ($categories as $key => $value){
            if($i > 1){
                break;
            }
            $personalities = $personalities.$key;
            $i++;
        }
        
        $result_phase = ResultPhase::where('type',$personalities)->first();
        $jobs = Jobs::where('type',$personalities)->get();
        
        return view('studentDetail')
            ->with('result',$result)
            ->with('result_phase',$result_phase)
            ->with('jobs',$jobs)
            ->with('all_result',$all_result)
            ->with('select_result',$select_result);
    }

    public function insert($id,Request $request){
        $insert = $request->all();
        $result_id = Result::insertGetId([
            'student_id' => $id,
            'teacher_id' => $request->session()->get('id'),
            'researchability'=>$insert['a'],
            'social'=>$insert['b'],
            'reality'=>$insert['c'],
            'sociability'=>$insert['e'],
            'artisty'=>$insert['d'],
        ]);

        return redirect('studentDetail/'.$result_id);
    }
}
