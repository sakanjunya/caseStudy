<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\School;


class topPage extends Controller
{
    //
    public function index(){
        $schools = School::all();
        return view('index')
            ->with('schools',$schools);
    }

    public function insert(Request $request){
        $insert = $request->all();
        if ($insert['password'] !== $insert['repassword']){
            redirect('/')
                ->with('flashMsg','パスワードの入力が間違っています');
        }

        $id = User::insertGetId([
            'name'=>$insert['name'],
            'mail'=>$insert['mail'],
            'password'=>$insert['password'],
            'school_id'=>$insert['school'],
        ]);

        $request->session()->put('name', $insert['name']);
        $request->session()->put('id', $id);

        return redirect('teacherTop');
    }

    public function login(Request $request){
        $login = $request->all();
        $user = User::where('mail',$login['mail'])->where('password',$login['password'])->first();
        if(isset($user)){
            $request->session()->put('name', $user['name']);
            $request->session()->put('id', $user['id']);
            return redirect('teacherTop');
        }
        else{
            return redirect('/')
                ->with('flashMsg','ログインに失敗しました');
        }
    }
}
