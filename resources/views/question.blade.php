<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
    <link rel="stylesheet" href="/caseStudy/resources/views/css/question.css">
    <link rel="stylesheet" href="/caseStudy/resources/views/css/style.css">
    <title>case study</title>
</head>
<body>
<div id="container">
    @include('header.loginHeader')

    <div class="row w-100">

        <div id="q1" class="col-md-8">
            <div>
                <h1 class="text-center">質問１</h1>
            </div>
            <div>
                <p class="text-center">難しい問題を解く時には？</p>
                <button type="button" onclick="add('a')">じっくり考える</button>
                <button type="button" onclick="add('b')">友達と問題を共有する。</button>
                <button type="button" onclick="add('c')">解答を見る。</button>
                <button type="button" onclick="add('d')">直感で解く。</button>
                <button type="button" onclick="add('e')">友達に聞く。</button>
            </div>
        </div>

        <div id="q2">
            <div>
                <h1>質問２</h1>
            </div>
            <div>
                <p>普段どのようなニュースに興味がありますか？</p>
                <button type="button" onclick="add('a')">新しい発見など科学のニュース。</button>
                <button type="button" onclick="add('b')">時事問題などのニュース。</button>
                <button type="button" onclick="add('c')">昨日今日など直近のニュース。</button>
                <button type="button" onclick="add('d')">新しい映画や音楽などアーティストの番宣。</button>
                <button type="button" onclick="add('e')">芸能会など華やかなニュース。</button>
            </div>
        </div>

        <div id="q3">
            <div>
                <h1>質問３</h1>
            </div>
            <div>
                <p>何かを計画をするときにどのように考えますか？</p>
                <button type="button" onclick="add('a')">じっくり道筋を考えて計画する。</button>
                <button type="button" onclick="add('b')">メンバーや友達など周りの人と相談して決める。</button>
                <button type="button" onclick="add('c')">今出来そうな範疇で物事を考える。</button>
                <button type="button" onclick="add('d')">やりたいことを最優先で考える。</button>
                <button type="button" onclick="add('e')">中の良い人や頼れる人に決めて貰う。</button>
            </div>
        </div>

        <div id="q4">
            <div>
                <h1>質問４</h1>
            </div>
            <div>
                <p>普段どのような本を読みますか？</p>
                <button type="button" onclick="add('a')">科学や専門書。</button>
                <button type="button" onclick="add('b')">ビジネスや経営。</button>
                <button type="button" onclick="add('c')">実用本。</button>
                <button type="button" onclick="add('d')">漫画や雑誌。</button>
                <button type="button" onclick="add('e')">今流行の小説など。</button>
            </div>
        </div>

        <div id="q5">
            <div>
                <h1>質問５</h1>
            </div>
            <div>
                <p>意見が対立した時にどうしますか？</p>
                <button type="button" onclick="add('a')">相手が納得するまで自分の意見を述べる。</button>
                <button type="button" onclick="add('b')">相手の意見との妥協点を探る。</button>
                <button type="button" onclick="add('c')">納得はしないがその場では意見を合わせる。</button>
                <button type="button" onclick="add('d')">相手と自分は違うと割り切って考える。</button>
                <button type="button" onclick="add('e')">相手の意見を尊重する。</button>
            </div>
        </div>

        <div id="q6">
            <div>
                <h1>質問６</h1>
            </div>
            <div>
                <p>人と議論したり、物事を説明する時に気をつけることは？</p>
                <button type="button" onclick="add('a')">論理性。</button>
                <button type="button" onclick="add('b')">お互いに納得すること。</button>
                <button type="button" onclick="add('c')">なるべく穏便に済むようにやる。</button>
                <button type="button" onclick="add('d')">自分の考えや気持ち。</button>
                <button type="button" onclick="add('e')">相手との関係性。</button>
            </div>
        </div>

        <div id="q7">
            <div>
                <h1>質問７</h1>
            </div>
            <div>
                <p>落ち込んでいる人を助ける時にすることは？</p>
                <button type="button" onclick="add('a')">落ち込んでいる原因を探る。</button>
                <button type="button" onclick="add('b')">励ましてあげる。</button>
                <button type="button" onclick="add('c')">自分でどうしようもないと諦める。</button>
                <button type="button" onclick="add('d')">音楽など芸樹的な物をすすめる。</button>
                <button type="button" onclick="add('e')">話を聞いてあげる。</button>
            </div>
        </div>

        <div id="q8">
            <div>
                <h1>質問８</h1>
            </div>
            <div>
                <p>トラブルが起こった時、はじめに何をしますか？</p>
                <button type="button" onclick="add('a')">原因を考える。</button>
                <button type="button" onclick="add('b')">仲間と一緒に対処する。</button>
                <button type="button" onclick="add('c')">まずは落ち着く。</button>
                <button type="button" onclick="add('d')">直感的に解決に動く。</button>
                <button type="button" onclick="add('e')">助けを求める。</button>
            </div>
        </div>

        <div id="q9">
            <div>
                <h1>質問９</h1>
            </div>
            <div>
                <p>達成感を得る瞬間はなんですか？</p>
                <button type="button" onclick="add('a')">難しい難問を解いた時。</button>
                <button type="button" onclick="add('b')">誰かに感謝された時。</button>
                <button type="button" onclick="add('c')">楽に目標をクリアできた時。</button>
                <button type="button" onclick="add('d')">自分自身で納得のいく結果が出た時。</button>
                <button type="button" onclick="add('e')">みんなで目標を成し遂げた時。</button>
            </div>
        </div>

        <div id="q10">
            <div>
                <h1>質問10</h1>
            </div>
            <div>
                <p>どんな人物にが好き？</p>
                <button type="button" onclick="add('a')">知的な人。</button>
                <button type="button" onclick="add('b')">仲間を大事にする人。</button>
                <button type="button" onclick="add('c')">落ち着いた現実主義者。</button>
                <button type="button" onclick="add('d')">アーティスト。</button>
                <button type="button" onclick="add('e')">明るく社交的な人。</button>
            </div>
        </div>

        <div id="q11">
            <button type="button" onclick="goreturn()">結果を表示する</button>
        </div>
    </div>

</div>
<script>
    const user_id = {{$student['id']}}

    $('#q1').nextAll().hide()
    $('#q1').prevAll().hide()
    //次の問題を表示するメソッド
    $('button').click(function(){
        const id = $(this).parent().parent().attr('id')
        const id2 = $('#'+id).next().attr('id')
        $('#'+id).hide()
        $('#'+id2).show()
    });

    let a = 0
    let b = 0
    let c = 0
    let d = 0
    let e = 0
    //ボタンを押された際のtype追加処理
    function add(type){
        switch(type){
            case 'a':
                a++
                break
            case 'b':
                b++;
                break
            case 'c':
                c++
                break
            case 'd':
                d++
                break
            case 'e':
                e++
            break
        }
    }
    //laravelに渡す処理を書く

    function goreturn(){
        window.location.href = '../studentDetail/'+user_id+'?a='+a+'&b='+b+'&c='+c+'&d='+d+'&e='+e;
    }
</script>
</body>
</html>
