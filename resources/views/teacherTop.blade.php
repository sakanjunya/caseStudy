<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>case study</title>
    <script>
        $('#modalLRForm').on('shown.bs.modal', function () {
            $('#modalBtn').trigger('focus')
        })
    </script>
</head>
<body>
<div>
    @include('header.teacherLoginHeader')
</div>
<div class="mt-5 text-center">
    <h1 class="pt-5">タイトル</h1>
</div>
{{--    @foreach()--}}
<div class="card-deck">
    @for($i=1;$i <=9; $i++)
    @if($i % 3 == 1 || $i == 1)
    <div class="row m-5">
    @endif
    <a class="card col-md-4" href="class">
        <img src="" class="card-img-top" alt="カード1の画像">
        <div class="card-body">
            <h5 class="card-title">カード1のタイトル</h5>
            <p class="card-text">これは、追加コンテンツへの自然な導入として以下のテキストをサポートする、より幅広いカードです。このコンテンツはもう少し長くなります。</p>
        </div>
        <div class="card-footer">
            <small class="text-muted">最終更新3分前</small>
        </div>
    </a>
    @if($i % 3 == 0)
    </div>
    @endif
    @endfor

</div>
{{--    @endforeach--}}
</body>
</html>