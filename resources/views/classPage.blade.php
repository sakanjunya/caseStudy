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
<div class="text-center mt-5">
    <h1 class="pt-5">クラス名</h1>
</div>
<div class="m-5">
    <table class="table table-striped table-hover">
        <tr>
            <th>名前</th>
            <th>日付</th>
            <th>結果</th>
        </tr>
        @for($i = 1 ;$i <= 30; $i++)
            <tr>
                <td>学生{{$i}}</td>
                <td>2020/2/2</td>

                <td>
                    <a href="studentResult">
                        @if($i % 7 == 0)
                        しなかった
                        @else
                        分類結果{{$i}}
                        @endif
                    </a>
                </td>
            </tr>
            @endfor
    </table>
</div>
</body>
</html>