<?php

namespace App\Http\Controllers;

use App\models\Classroom;
use Illuminate\Http\Request;

class CreateClassroom extends Controller
{
    //
    public function index(Request $request){
        $requestAll = $request->all();
        $userId = $request->session()->get('id');

        $classroomId = Classroom::insertGetId([
            'class_name'=>$requestAll['class_name'],
            'user_id'=>$userId,
            'school_id'=>$request->session()->get('school_id'),
        ]);

        $flashMsg = Classroom::select('class_name')
            ->where('id',$classroomId)
            ->first();

        return redirect('teacherTop')
            ->with('flashMsg','クラス'.$flashMsg['class_name'].'で追加されました');

    }
}
