<?php

namespace App\Http\Controllers;

use App\models\job;
use App\models\Jobs;
use App\models\Result;
use App\models\ResultPhase;
use App\models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class studentDetail extends Controller
{
    /*
     * @id result id
     *
     * */
    public function index($id,Request $request){
        
        $result = Result::where('id',$id)->first();

        $student_id = Result::where('id',$id)->value('student_id');

        $select_results = Result::where('student_id',$student_id)->get()->toArray();
        $select = Result::where('student_id',$student_id)->get();

        $comment = Comment::where('student_id',$student_id)->get();

        foreach ($select_results as $select_result){
            $categories = [
                'a'=>$select_result['researchability'],
                'b'=>$select_result['social'],
                'c'=>$select_result['reality'],
                'd'=>$select_result['artisty'],
                'e'=>$select_result['sociability'],
            ];

            arsort($categories);
            $personality = '';
            $i =0;
            foreach ($categories as $key => $value){
                if($i > 1){

                }
                else{
                    $personality = $personality.$key;
                    $i++;
                }
            }

            $result_phase['result_phase'] = ResultPhase::where('type',$personality)->get()->toArray();
            $jobs['unko'] = Jobs::leftJoin('jobs.job_name', '=', 'interviews','%interviews.dream%')
                ->where('jobs.type',$personality)->get();
            var_dump($jobs['unko']);
            $jobs['jobs'] = Jobs::where('type',$personality)->get()->toArray();

            $results[] = array_merge($select_result,$result_phase,$jobs);
        }

        return view('studentDetail')
            ->with('result',$result)
            ->with('results',$results)
            ->with('comment',$comment)
            ->with('select_results',$select);
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

    public function addComment($id,Request $request) {
        $addComment = $request->all();
        $result = Result::select('student_id')->where('id',$id)->first();
        Comment::insert([
            'student_id' => $result->student_id,
            'teacher_id' => $request->session()->get('id'),
            'question_id' => 0,
            'test_id' => $id,
            'teacher_text' => $addComment['teacher_text'],
            'student_text' => '',
        ]);

        return redirect('studentDetail/'.$id);
    }
}
