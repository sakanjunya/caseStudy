<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/caseStudy/resources/views/css/studentResult.css">
    <title>case study</title>
</head>
<body>
<div>
    @include('header.teacherLoginHeader')
</div>
<div class="mt-5 text-center">
    <h1 class="pt-5">テスト結果</h1>
</div>
<div class="text-center mt-5 flex flex-wrap justify-content-between">
    <h2 class="d-inline mr-5">学生名：学生１</h2>
    <h2 class="d-inline">/</h2>
    <h2 class="d-inline ml-5">クラス：クラス１</h2>
</div>
<div class="mt-5">
    <div class="content text-center">
        <a href="#" class="btn btn-info btn-lg">
            <span class="glyphicon glyphicon-pencil"></span>
            　テストSTART
        </a>
    </div>
</div>
<div class="mt-5">
    <span class="ml-5">３回目</span>
</div>
<div class="ml-5 mr-5">
    <table class="table table-striped table-hover">
        <tr>
            <th>結果</th>
            <th>日付</th>
        </tr>
        @for($i = 1 ;$i <= 3; $i++)
            <tr>
                <td>
                    <a href="studentDetail" target="_blank">
                        @if($i % 7 == 0)
                            しなかった
                        @else
                            分類結果{{$i}}
                        @endif
                    </a>
                </td>
                <td>2020/2/2</td>
            </tr>
        @endfor
    </table>
</div>
</body>
</html>