<?php

namespace App\Http\Controllers;

use App\models\Classroom;
use App\models\User;
use Illuminate\Http\Request;

class TeacherTop extends Controller
{
    //
    public function index(Request $request){
        //セッションからIDを取得
        $id = $request->session()->get('id');
        //ID情報からユーザを取得
        $user = User::where('id',$id)->first();

        $request->session()->put('school_id',$user->school_id);

        //クラス情報を取得、教師名をLEFT JOIN して取得
        $classrooms = Classroom::leftJoin('users', 'users.id', '=', 'classrooms.user_id')
            ->select('users.name', 'classrooms.*')
            ->where('classrooms.school_id',$user['school_id'])
            ->orderBy('classrooms.class_name', 'asc')
            ->get();

        return view('teacherTop')
            ->with('classrooms',$classrooms);
    }
}
