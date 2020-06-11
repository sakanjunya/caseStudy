<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/caseStudy/resources/views/css/question.css">
    <title>case study</title>
</head>
<body>
<div id="container">
    <div id="header">
        <ul>
            <li>{{$user['name']}}</li>
            <li>{{$user['school']}}</li>
            <li>{{$user['mail']}}</li>
            <li>{{$user['gender']}}</li>
        </ul>
    </div>
    <div>
        <canvas id="screen"></canvas>
    </div>
    <div>
        <h1>質問</h1>
    </div>
    <div class="question1">
        <div class="question_contents">
            <h2>Q1.aaaaaaaaaaaaaaaaa</h2>
        </div>
        <div class="answer">
            <form action="">
                <input id="item-1" class="radio-inline__input" type="radio" name="accessible-radio" value="item-1">
                <label class="radio-inline__label" for="item-1">
                    うん
                </label>
                <input id="item-2" class="radio-inline__input" type="radio" name="accessible-radio" value="item-2">
                <label class="radio-inline__label" for="item-2">
                    うーん
                </label>
                <input id="item-3" class="radio-inline__input" type="radio" name="accessible-radio" value="item-3">
                <label class="radio-inline__label" for="item-3">
                    うんうん
                </label>
                <button>次へ</button>
            </form>
        </div>
    </div>

</div>
</body>
</html>
