<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
    <link rel="stylesheet" href="/caseStudy/resources/views/css/question.css">
    <link rel="stylesheet" href="/caseStudy/resources/views/css/style.css">
    <title>case study</title>
</head>
<body>
<div id="container">
    @include('header.logoutHeader')
    <div class="row w-100">

        <div class="col-md-4">
            <canvas id="screen"></canvas>
        </div>

        <div class="answer col-md-8 qBox">
            <form action="">
                @for($i = 1 ; $i <= 10; $i++)
                    <div id="q{{$i}}" class="">
                        <div>
                            <h3 class="text-center text-dark my-5">question{{$i}}</h3>
                            <h4 class="text-muted mx-auto text-center my-5">それも事実もしこの応用通りとかいうののうちが閉じ込めんべき。何しろ将来に附随者はひょろひょろその威圧でませかもで瞑ってなりなでは答弁描けるべきんて、もともとにしか違っんですうた。一般が思うあり訳はまあ近頃がいよいよたんます。</h4>
                        </div>
                        <div class="qBtn text-center">
                            <input id="item-1" class="radio-inline__input" type="radio" name="accessible-radio" value="item-1">
                            <label class="radio-inline__label" for="item-1">
                                はい
                            </label>
                            <input id="item-2" class="radio-inline__input" type="radio" name="accessible-radio" value="item-2">
                            <label class="radio-inline__label" for="item-2">
                                わからない
                            </label>
                            <input id="item-3" class="radio-inline__input" type="radio" name="accessible-radio" value="item-3">
                            <label class="radio-inline__label" for="item-3">
                                いいえ
                            </label>
                            <br>
                        </div>
                        @if($i === 10)
                            <button type="submit" class="text-center">結果をみる</button>
                        @else
                            <button type="button" class="mx-auto">次へ</button>
                        @endif
                    </div>
                @endfor
            </form>
        </div>
    </div>

</div>

<script>
    $('#q1').nextAll().hide();
    $('#q1').prevAll().hide();

    //次の問題を表示するメソッド
    $('button').click(function(){
        const id = $(this).parent().attr('id');
        const id2 = $('#'+id).next().attr('id');
        $('#'+id).hide();
        $('#'+id2).show();
    })
</script>

</body>
</html>
