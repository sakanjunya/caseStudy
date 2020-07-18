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
    <link rel="stylesheet" href="{{asset('css/studentResult.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
{{--    <link rel="stylesheet" href="{{resource_path()}}/views/css/style.css">--}}

    <title>case study</title>

    <style>
        .raw {
            display: flex;
            flex-wrap: nowrap;
        }
        .left {
            width: 75%;
            
        }
        .right {
            width: 25%;
            height: 100%
        }
        .nav {
            display: flex;
            flex-direction: column;
        }
    </style>
</head>
<body>
<div>
    @include('header.teacherLoginHeader')
</div>
<?php
    // var_dump($all_result);
    
    foreach($all_result as $value){

        if($value['student_id'] == $result['student_id']){
      
            // echo $value->update_at;
        }
       
    }
    // echo var_dump($value);
 

?>
<div class="raw text-center">
    <div class="left">
        <div class="col-md-6 mt-5 pt-5">
            <div class="card border-primary mb-3">
                <div class="card-header">アドバイス　/　テスト</div>
                <div class="card-body text-primary">
                    <h5 class="card-title">{{$result_phase->result_name}}</h5>
                    <p class="card-text">{{$result_phase->reasons_student}}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <canvas id="radar" class="chartjs-render-monitor"></canvas>
        </div>
        @foreach($jobs as $job)
        <div class="col-md-4 mt-5">
            おすすめ　◎
            <div class="card mx-auto w-75">
                <img src="" class="card-img-top" alt="カード1の画像">
                <div class="card-body">
                    <h5 class="card-title">{{$job->job_name}}</h5>
                    <p class="card-text">{{$job->job_description}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="right">
        コメント
            <ul class="nav nav-tabs" role="tablist">
                <?php 
                // $result['update_at'] で変数にしたらできなかったのでカウントアップで代用
                 $count=0;
                foreach($all_result as $value){ 
                    if($value['student_id'] == $result['student_id']){
                    ?>
                <li class="nav-item">
                    <a class="nav-link" id="<?php echo 'item'.$count.'-tab';?>" data-toggle="tab" href="<?php echo '#'.$count;?>" role="tab" aria-controls="<?php echo 'item'.$count;?>" aria-selected="false"><?php echo $value->update_at;?></a>
                </li>
                <?php
                     $count++ ; 
                    }
                }
                ?>
         
            </ul>
            <div class="tab-content">
                <?php 
                  $count=0;
                  foreach($all_result as $value){
                    if($value['student_id'] == $result['student_id']){?>
               <div class="tab-pane fade" id="<?php echo $count; ?>" role="tabpanel" aria-labelledby="<?php echo 'item'.$count.'-tab';?>">This is a text of <?php echo $value->update_at;?>.</div>
                <?php 
                      $count++;
                    }
                  }
                ?>
            </div>
            <div>
            <div class="form-group">
                <textarea id="textarea" class="form-control" placeholder="コメント入力して（#--#）"></textarea>
            </div>
            <button class="btn btn-primary btn-block">Block evel button</button>
            </div> 
            
    </div>
    
</div>

<script>
    let researchability = '{{$result['researchability']}}';
    let social = '{{$result['social']}}';
    let reality = '{{$result['reality']}}';
    let sociability = '{{$result['sociability']}}';
    let artisty = '{{$result['artisty']}}';

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

    var myRadarChart = new Chart(document.getElementById('radar'), {
        type: 'radar',
        data: {
            labels: ['研究性', '社会性', '現実性 ', '芸術性','社交性'],
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
</script>
</body>
</html>