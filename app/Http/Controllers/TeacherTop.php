<?php

namespace App\Http\Controllers;

use App\models\Classroom;
use App\models\User;
use Illuminate\Http\Request;

class TeacherTop extends Controller
{
    //
    public function index(Request $request){
        $id = $request->session()->get('id');
        $user = User::where('id',$id)->first();
        $user_all = User::all()->toArray();
        $classrooms = Classroom::leftJoin('users', 'users.id', '=', 'classrooms.user_id')
            ->select('users.name', 'classrooms.*')
            ->where('classrooms.school_id',$user['school_id'])
            ->get();
        return view('teacherTop')
            ->with('user_all',$user_all)
            ->with('classrooms',$classrooms);
    }
}
