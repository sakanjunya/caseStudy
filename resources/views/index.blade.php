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
    <link rel="stylesheet" href="/caseStudy/resources/views/css/index.css">
    <link rel="stylesheet" href="/caseStudy/resources/views/css/style.css">
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
    <div class="container-fluid text-center text-md-left">
        <div class="text-center mt-5">
            <h1>将来診断サービス</h1>
            <small class="font-weight-lighter text-muted">本サービスは、将来設計に困っているあなたに少しでも助けになれるよう、A Iによってあなたに合った職業を提示してくれます。</small>
        </div>
    </div>
{{--ボタン--}}
    <div id="btnBox">
        <a href="" class="mx-auto" id="loginBtn" data-toggle="modal" data-target="#modalLRForm">診断スタート</a>
    </div>
{{--カードデザイン（セールスポイント）--}}
    <div class="row mx-auto" id="cardBox">

        <div class="col-md-3">
            <div class="w-75 mx-auto text-center shadow-sm">
                <div class="card bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Light card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="w-75 mx-auto text-center shadow-sm">
                <div class="card bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Light card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="w-75 mx-auto text-center shadow-sm">
                <div class="card bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Light card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="w-75 mx-auto text-center shadow-sm">
                <div class="card bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Light card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <hr>
{{--一つ目のコンテンツを入力--}}
    <div id="content1" class="row w-100 justify-content-center">

        <div class="col-md-4 ml-5" id="content1Img">
        </div>
        <div class="col-md-6  align-self-center">
            <div class="bg-light mx-auto p-5">
                <h3 class="text-center border-bottom p-4">進路相談を手助けします</h3>
                <p class="text-muted mt-5">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れ</p>
            </div>
        </div>
    </div>

    <hr>
{{--二つ目のコンテンツを入力--}}
    <div id="content2" class="row w-100 justify-content-center">

        <div class="col-md-4 ml-5" id="content2Img">
        </div>
        <div class="col-md-6 align-self-center">
            <div class="bg-light mx-auto p-5">
                <h3 class="text-center border-bottom p-4">あなたの性格を数値化しグラフを作成します。</h3>
                <p class="text-muted mt-5">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れ</p>
            </div>
        </div>

    </div>
</body>
</html>