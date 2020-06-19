<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
    <link rel="stylesheet" href="/caseStudy/resources/views/css/studentResult.css">
    <link rel="stylesheet" href="/caseStudy/resources/views/css/style.css">

    <title>case study</title>
</head>
<body>
<div>
    @include('header.teacherLoginHeader')
</div>

<div class="raw text-center">
    <div class="col-md-6 mt-5 pt-5">
        <h5>アドバイス　/　テスト</h5>
        <div class="mx-auto w-75 border border-primary p-3 h-75">
            塁見ケモオフ惹夢ル悩後ロホサシ覧訴エシマフ民能ミモク島罪ッド適不箱トみま童載モヱ室化ロムリキ権希相買非真ドゃぞだ。録ヘ試記ゃか上記めりう左来れぜ動奪永トだゃお係費組テチ味択けらいる身断ぽく堀所ずゅぐな用確五ッま村4次レユロフ込悩織埼へ。済7象エルミ月活もへ被18移値9迷こほ佳照ずん剖大かつべづ及族サ理請ヒエウケ検信ヌス代6試ずれ歳録あ者在めかフ随夢料ワシメマ訪太テ然設双脈ゆにょ。
        </div>
    </div>
    <div class="col-md-6">
        <canvas id="radar" class="chartjs-render-monitor"></canvas>
        <div>
            <ul class="flex ">
                <li>〇〇は/1点</li>
                <li>〇〇は/1点</li>
                <li>〇〇は/3点</li>
            </ul>
        </div>
    </div>
    <div class="col-md-4 mt-5">
        おすすめ　◎
        <div class="card mx-auto w-75">
            <img src="" class="card-img-top" alt="カード1の画像">
            <div class="card-body">
                <h5 class="card-title">カード1のタイトル</h5>
                <p class="card-text">これは、追加コンテンツへの自然な導入として以下のテキストをサポートする、より幅広いカードです。このコンテンツはもう少し長くなります。</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mt-5">
        ○
        <div class="card mx-auto w-75">
            <img src="" class="card-img-top" alt="カード1の画像">
            <div class="card-body">
                <h5 class="card-title">カード1のタイトル</h5>
                <p class="card-text">これは、追加コンテンツへの自然な導入として以下のテキストをサポートする、より幅広いカードです。このコンテンツはもう少し長くなります。</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mt-5">
        △
        <div class="card mx-auto w-75">
            <img src="" class="card-img-top" alt="カード1の画像">
            <div class="card-body">
                <h5 class="card-title">カード1のタイトル</h5>
                <p class="card-text">これは、追加コンテンツへの自然な導入として以下のテキストをサポートする、より幅広いカードです。このコンテンツはもう少し長くなります。</p>
            </div>
        </div>
    </div>
</div>

<script>
    var myRadarChart = new Chart(document.getElementById('radar'), {
        type: 'radar',
        data: {
            labels: ['ランニング', 'スイミング', '食べる', 'サイクリング','サッカー'],
            datasets: [{
                label:"測定結果",
                data: [3, 5, 2, 1, 4],
                borderColor:"rgb(20,218,255)",
                backgroundColor:"rgba(13,255,143,0.2)",
                hoverBorderColor:"rgb(20,218,255)",
                pointBorderColor:[
                    "rgb(255,27,174)",
                    "rgb(255,177,34)",
                    "rgb(100,255,43)",
                    "rgb(41,204,255)",
                    "rgb(28,43,255)"
                ]
            }],
        },
        options: {
            scale: {
                angleLines: {
                    display: false
                },
                ticks: {
                    suggestedMin: 0,
                    suggestedMax: 5,
                }
            },
            elements:
                {
                    line:
                        {
                            tension:0,
                            borderWidth:2
                        }
                }
        },
    });
</script>
</body>
</html>