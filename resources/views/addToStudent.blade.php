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
@include('modal.addToStudentModal')
<div class="bg-white">
    <nav aria-label="breadcrumb" class="bg-white">
        <ol class="breadcrumb bg-white">
            <li class="breadcrumb-item"><a href="teacherTop">Home</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="class/{{session('class_id')}}">クラス詳細</a></li>
            <li class="breadcrumb-item active" aria-current="page">生徒追加</li>
        </ol>
        <h1 class="pb-5 pl-5">クラス名：{{$classroom['class_name']}}に生徒を追加する</h1>    </nav>
</div>
<form action="insertToStudent" method="post">
    @for($i = 1; $i <= (int)$num['students_num']; $i++)
        @csrf
        <div class="input-group mb-5 w-50 mx-auto">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon3">出席番号{{$i}}の名前を入力してください</span>
            </div>
            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="students[]">
        </div>
    @endfor
    <button type="submit" class="btn btn-primary">追加する</button>
</form>
</body>
</html>