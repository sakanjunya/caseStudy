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
    <link rel="stylesheet" href="{{asset('/css/studentResult.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    {{--<link rel="stylesheet" href="{{resource_path()}}/views/css/style.css">--}}

    <title>case study</title>
    <style>
        .left {
            height: 100vh;
            width: 75%;
            display: flex;
            flex-wrap: wrap;
            overflow: hidden;
        }

        .right {
            height: 80vh;
            width: 25%;
        }

        .flex-box {
            display: flex;
            flex-wrap: wrap;
        }

        .nav {
            height: 600px;
            width: 400px;
            display: flex;
            flex-direction: column;
        }

        .nav-item {
            width: 100%;
        }

        ul {
            overflow: hidden;
        }

        textarea {
            display: block;

        }
    </style>
</head>

<body>
    <div>
        @include('header.teacherLoginHeader')
    </div>
    <div class="row text-center">
        <!-- アドバイス -->
        <div class="left col-8 tab-content">

            @foreach($results as $select_result)
            <div class="tab-pane fade {{ ($loop->first) ? 'active in' : '' }}" id="item{{ $select_result['id'] }}" role="tabpanel" aria-labelledby="item{{ $select_result['id'] }}-tab">
                <div class="col-md-6 mt-5 pt-5">
                    <div class="card border-primary mb-3">
                        <div class="card-header">アドバイス　/　テスト</div>
                        <div class="card-body text-primary">
                            <h5 class="card-title">{{$select_result['result_phase'][0]['result_name']}}</h5>
                            <p class="card-text">{{$select_result['result_phase'][0]['reasons_teacher']}}</p>
                        </div>
                    </div>
                </div>
                <!-- パラメータ -->
                <div class="col-md-6">
                    <canvas id="radar{{$loop->iteration}}" class="chartjs-render-monitor"></canvas>
                    <script>
                        $(document).ready(function(){
                            let researchability = '{{$select_result['researchability']}}';
                            let social = '{{$select_result['social']}}';
                            let reality = '{{$select_result['reality']}}';
                            let sociability = '{{$select_result['sociability']}}';
                            let artisty = '{{$select_result['artisty']}}';
                            if (researchability === '0' ){
                                researchability = 1
                            }
                            if (researchability >= '5' ){
                                researchability = 5
                            }
                            if (social === '0'){
                                social = 1
                            }
                            if (social >= '5'){
                                social = 5
                            }
                            if (reality === '0') {
                                reality = 1
                            }
                            if (reality >= '5') {
                                reality = 5
                            }
                            if (sociability === '0'){
                                sociability = 1
                            }
                            if (sociability >= '5'){
                                sociability = 5
                            }
                            if (artisty === '0'){
                                artisty = 1
                            }
                            if (artisty >= '5'){
                                artisty = 5
                            }

                            let idNum = {{$loop->iteration}}
                            console.log(idNum);
                            let myRadarChart = new Chart(document.getElementById('radar' + idNum), {
                                type: 'radar',
                                data: {
                                    labels: ['研究性', '社会性', '現実性 ','社交性','芸術性'],
                                    datasets: [{
                                        label:"測定結果",
                                        data: [researchability, social, reality, sociability, artisty],
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
                        })
                    </script>
                </div>

                <!-- おすすめ job-->
                @foreach($select_result['jobs'] as $job)
                    <div class="col-md-12">
                        <!-- おすすめ　◎ -->
                        <div class="card mx-auto mt-5" style="height: 15rem; ">
                            <img src="" class="card-img-top" alt="カード1の画像">
                            <div class="card-body">
                                <h5 class="card-title">{{$job['job_name']}}</h5>
                                <p class="card-text">{{$job['job_description']}}</p>
                                <h5>{{$job['high_school']}}</h5>
                                <p>{{$job['interviews']}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            @endforeach

        </div>

        <div class="right col-4">
            コメント
            <ul class="nav w-100 nav-tabs shadow-sm  mb-5 bg-white rounded" role="tablist">
                @foreach($comment as $value)
                    <li class="nav-item  border-bottom">
                        <a class="nav-link {{ ($loop->first) ? 'active' : '' }}" id="item{{$value['test_id']}}-tab" data-toggle="tab" href="#item{{ $value['test_id'] }}" role="tab" aria-controls="item{{ $value['test_id'] }}" aria-selected="{{ ($loop->first) ? 'true' : 'false' }}">{{ substr($value['update_at'],0,10)}} <p>{{ $value['teacher_text']}}</p></a>
                    </li>
                @endforeach
            </ul>
            <div class="tab-content">
                @foreach($comment as $value)
                <div class="tab-pane fade " id="item{{ $value['test_id']}}" role="tabpanel" aria-labelledby="item{{substr($value['update_at'],0,10)}}-tab">This is a text of {{ substr($value['update_at'],0,10)}}</div>
                @endforeach
                <form action="../commentAdd/{{$result['id']}}" class="form-group" method="post">
                    @csrf
                    <textarea id="textarea" name="teacher_text" rows="5" cols="10" class="form-control" placeholder="コメント入力"></textarea>
                    <button class="btn btn-primary btn-block">送信</button>
                </form>
            </div>
        </div>

    </div>

</body>

</html>
