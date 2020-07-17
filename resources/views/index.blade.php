<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/jpn.css@latest/dist/bootstrap/jpn.min.css">
    <title>case study</title>
</head>
<body>
    @include('header.logoutHeader')
    <div>
{{--   ヘッダーimport     --}}
    </div>
@include('modal.modal')
{{--見出し--}}
    <div id="headerBg">
        <div class="container-fluid text-center">
            @if(session('flashMsg'))
                <small class="font-weight-lighter text-danger text-center">{{session('flashMsg')}}</small>
            @endif
            <div class="text-center mt-5">
                <h1>将来診断サービス</h1>
                <small class="font-weight-lighter text-muted">本サービスは、将来設計に困っているあなたに少しでも助けになれるよう、A Iによってあなたに合った職業を提示してくれます。</small>
            </div>
        </div>
    {{--ボタン--}}
        <div id="btnBox">
            <a href="" class="mx-auto" id="loginBtn" data-toggle="modal" data-target="#modalLRForm">診断スタート</a>
        </div>
    </div>
{{--カードデザイン（セールスポイント）--}}
    <div class="row mx-auto" id="cardBox">

        <div class="col-md-3">
            <div class="w-75 mx-auto text-center shadow-sm">
                <div class="card bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">タップまたはクリックするだけ</div>
                    <div class="card-body">
                        <small class="card-text">パソコン、スマホ未経験でも使えます。操作が便利</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="w-75 mx-auto text-center shadow-sm">
                <div class="card bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">カスタマイズ化UI</div>
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <small class="card-text">先生と学生、それぞれに特化したUIで、履歴やテストが一目瞭然で確認できる！</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="w-75 mx-auto text-center shadow-sm">
                <div class="card bg-light mb-3" style="max-width: 20rem;">
                    <div class="card-header">あらゆるスマートデバイスで利用可能！</div>
                    <div class="card-body">
                        <small class="card-text">Webアプリですので、ネット環境さえあれば、いつでも、どこでも利用可能！</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="w-75 mx-auto text-center shadow-sm">
                <div class="card bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">職種カバーが広範囲で、自分にぴったり職種をアドバイス</div>
                    <div class="card-body">
                        <small class="card-text">Dialog Flowを利用し、問題の回答結果から、AIによる何百種類の職業から分析.</small>
                    </div>
                </div>
            </div>
        </div>

    </div>

{{--一つ目のコンテンツを入力--}}
    <div id="content1" class="row w-100 justify-content-center">

        <div class="col-md-4 ml-5" id="content1Img">
        </div>
        <div class="col-md-6  align-self-center">
            <div class="bg-light mx-auto p-5">
                <h3 class="text-center border-bottom p-4">進路相談を手助けします</h3>
                <p class="text-muted mt-5">高校生の文理選択から、将来の仕事の進路まで、どれも人生の将来に関わる選択肢である。一歩間違えると、後悔できず、将来を制限させられることになる。このシステムを使うことによって、五つの特性から、自分の趣味、興味および能力などを全面的に分析し、自分にぴったり職業を助言します。</p>
            </div>
        </div>
    </div>

{{--二つ目のコンテンツを入力--}}
    <div id="content2" class="row w-100 justify-content-center">

        <div class="col-md-4 ml-5" id="content2Img">
        </div>
        <div class="col-md-6 align-self-center">
            <div class="bg-light mx-auto p-5">
                <h3 class="text-center border-bottom p-4">あなたの性格を数値化しグラフを作成します。</h3>
                <p class="text-muted mt-5　p-5">分析の結果は、数値化し、グラフで表示することによって、利用者（生徒）の潜在的なスキルや特性を一目瞭然で確認できる。そして、利用者たちの履歴を元にして、機械学習を活用し、さらに正確性のあるアドバイスを提供することができ、利用者が増えつつ、システムの品質と正確性がもっと良くなっていきます。</p>
            </div>
        </div>

    </div>
</body>
</html>