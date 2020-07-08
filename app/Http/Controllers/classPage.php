<?php

namespace App\Http\Controllers;

use App\models\Student;
use Illuminate\Http\Request;

class classPage extends Controller
{
    //
    public function index(int $id, Request $request){

        //IDから生徒一覧を取得
        $classmates = Student::where('class_id',$id)->get();

        //セッションにクラスIDを保存（パンクズリストのリンク用に保存）
        $request->session()->put('class_id', $id);

        return view('classPage')
            ->with('classmates',$classmates);
    }
}
