<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>case study</title>
</head>
<body>
<div>
    <h1>case study</h1>
    <link rel="stylesheet" href="/caseStudy/resources/views/css/question.css">
</div>
<div>
    <form action="question" target="_blank" method="post">
        @csrf
        <p>ニックネーム</p>
        <input type="text" name="name">
        <p>学校名</p>
        <input type="text" name="school">
        <p>メールアドレス</p>
        <input type="text" name="mail">
        <p>性別</p>
        <input type="radio" name="gender" value="男">男
        <input type="radio" name="gender" value="女">女
        <br>
        <button type="submit">OK</button>
    </form>
</div>
</body>
</html>