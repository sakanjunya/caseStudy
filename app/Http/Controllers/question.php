<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class question extends Controller
{
    //
    public function index(Request $request){
        $user = [
            'name'=>$request->input('name'),
            'school'=>$request->input('school'),
            'mail'=>$request->input('mail'),
            'gender'=>$request->input('gender')
        ];
        return view('question')
            ->with('user',$user);
    }
}
