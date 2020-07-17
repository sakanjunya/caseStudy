<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\School;
use Illuminate\Support\Facades\Hash;


class topPage extends Controller
{
    //
    public function index(){
        //selectボックスの中身を呼び出す
        $schools = School::all();

        return view('index')
            ->with('schools',$schools);
    }

    public function insert(Request $request){
        $insert = $request->all();
        //パスワードが合っているかどうかを確認
        if ($insert['password'] != $insert['repassword']){
            return redirect('/')
                ->with('flashMsg','パスワードの入力が間違っています');
        }

        //メールアドレスが使用されていた場合リダイレクト
        $checkEmail = User::where('mail',$insert['mail'])->first();
        if (isset($checkEmail)){
            return redirect('/')
                ->with('flashMsg','そのメールアドレスはすでに使用されています');
        }

        //パスワードのハッシュ化
        $hashPass = Hash::make($insert['password']);
        //ユーザ登録した後にIDを取得
        $id = User::insertGetId([
            'name'=>$insert['name'],
            'mail'=>$insert['mail'],
            'password'=>$hashPass,
            'school_id'=>$insert['school'],
        ]);
        //先ほど取得したIDとパスワードをセッションに保存
        $request->session()->put('name', $insert['name']);
        $request->session()->put('id', $id);

        return redirect('teacherTop');
    }

    public function login(Request $request){
        $login = $request->all();
        //メールアドレスからユーザを取得
        $user = User::where('mail',$login['mail'])->first();

        //ハッシュ照合してからログイン
        if(Hash::check($login['password'],$user['password'])){
            //nameとidをセッションに保存してログイン
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
