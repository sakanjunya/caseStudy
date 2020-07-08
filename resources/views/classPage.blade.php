<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/caseStudy/resources/views/css/style.css">
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
<div class="bg-white">
    <nav aria-label="breadcrumb" class="bg-white">
        <ol class="breadcrumb bg-white">
            <li class="breadcrumb-item"><a href="../teacherTop">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">クラス詳細</li>
        </ol>
    </nav>
    <h1 class="pb-5 pl-5">クラス名</h1>
</div>
<div class="m-5 row">
{{--  生徒一覧を表示  --}}
    @foreach($classmates as $classmate)
        <div class="mb-3 col-md-3">
            <a href="../studentResult/{{$classmate['id']}}" class="card bg-light shadow-sm">
                <div class="card-header">{{$classmate['name']}}</div>
                <div class="card-body">
                    <h5 class="card-title">最終更新日：{{$classmate['update_at']}}</h5>
                    <p class="card-text">詳細を確認する</p>
                </div>
            </a>
        </div>
    @endforeach

</div>
</body>
</html>