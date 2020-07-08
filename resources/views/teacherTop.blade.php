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
<div class="mb-5 bg-white">
    <nav aria-label="breadcrumb" class="bg-white">
        <ol class="breadcrumb bg-white m-0">
            <li class="breadcrumb-item active" aria-current="page">Home</li>
        </ol>
    </nav>
    <h1 class="pb-5 pl-5">クラス選択</h1>
</div>
{{--    @foreach()--}}
<div class="card-deck w-100">
    {{$i = 1}}
    @if($i % 4 == 1 || $i == 1)
    <div class="row w-100">
    @endif
{{--   クラス一覧を表示     --}}
    @foreach($classrooms as $classroom)
    <div class="col-md-3">
        <a class="card mb-3 shadow-sm" href="class/{{$classroom['id']}}">
            <div class="card-body">
                <h5 class="card-title">クラス名：{{$classroom['class_name']}}</h5>
                <p class="card-text pl-5">教師名：{{$classroom['name']}}</p>
                <p class="card-text"><small class="text-muted">クリックして詳細を表示→</small></p>
            </div>
        </a>
    </div>
    <input type="hidden" value="{{$i++}}">
    @endforeach
    </div>

</div>
{{--    @endforeach--}}
</body>
</html>