<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
    <link rel="stylesheet" href="{{asset('css/question.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>case study</title>
</head>
<body>
<div id="container">
    @include('header.loginHeader')

    <div class="row w-100">

        @foreach($questions as $question)
            <div id="q{{$question->id}}" class="col-12 w-100">
                <div>
                    <h1 class="text-center">{{$question->text}}</h1>
                </div>
                <div class="btnBox">
                    @foreach($answers as $answer)
                        @if($answer->question_id === $question->id)
                            <button type="button"  class="button ml-1" onclick="add('{{Str::limit($answer->text,1,'')}}')">{{$answer->text}}</button>
                        @endif
                    @endforeach
                </div>
            </div>
        @endforeach

        <div id="q11" class="col-12">
            <p class="text-center"><button class="button mx-auto" type="button" onclick="goreturn()">結果を表示する</button></p>
        </div>
    </div>

</div>
<script>
    const user_id = {{$student['id']}}

    $('#q1').nextAll().hide()
    $('#q1').prevAll().hide()
    //次の問題を表示するメソッド
    $('button').click(function(){
        const id = $(this).parent().parent().attr('id')
        const id2 = $('#'+id).next().attr('id')
        $('#'+id).hide()
        $('#'+id2).show()
    });

    let a = 0
    let b = 0
    let c = 0
    let d = 0
    let e = 0
    //ボタンを押された際のtype追加処理
    function add(type){
        switch(type){
            case 'A':
                a++
                break
            case 'B':
                b++;
                break
            case 'C':
                c++
                break
            case 'D':
                d++
                break
            case 'E':
                e++
            break
        }
    }
    //laravelに渡す処理を書く

    function goreturn(){
        window.location.href = '../studentDetailAdd/'+user_id+'?a='+a+'&b='+b+'&c='+c+'&d='+d+'&e='+e;
    }
</script>
</body>
</html>
