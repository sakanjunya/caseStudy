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
    <link rel="stylesheet" href="/caseStudy/resources/views/css/question.css">
    <link rel="stylesheet" href="/caseStudy/resources/views/css/style.css">
    <title>case study</title>
    <script defer="" src="https://assets.dialogflow.com/b/dialogflow_ui_20191016_1149_Potter_RC00/js/bundles/agentDemo.bundle.min.js"></script>
    <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
</head>
<body>
<div id="container">
    @include('header.loginHeader')
    <div class="row w-100">

        <div class="col-md-4">
            <canvas id="screen"></canvas>
        </div>
        <df-messenger
                intent="WELCOME"
                chat-title="testteste"
                agent-id="8312f032-07d3-41c6-b6c3-b865faeca649"
                language-code="ja"
        ></df-messenger>
        <iframe
                allow="microphone;"
                width="350"
                height="430"
                src="https://console.dialogflow.com/api-client/demo/embedded/c57efd96-c3db-4c97-8d77-238873095d9e">
        </iframe>

{{--        <div class="answer col-md-8 qBox">--}}
{{--            <form action="">--}}
{{--                @for($i = 1 ; $i <= 10; $i++)--}}
{{--                    <div id="q{{$i}}" class="">--}}
{{--                        <div>--}}
{{--                            <h3 class="text-center text-dark my-5">question{{$i}}</h3>--}}
{{--                            <h4 class="text-muted mx-auto text-center my-5">それも事実もしこの応用通りとかいうののうちが閉じ込めんべき。何しろ将来に附随者はひょろひょろその威圧でませかもで瞑ってなりなでは答弁描けるべきんて、もともとにしか違っんですうた。一般が思うあり訳はまあ近頃がいよいよたんます。</h4>--}}
{{--                        </div>--}}
{{--                        <div class="qBtn text-center">--}}
{{--                            <input id="accessible-radio{{$i}}1" class="radio-inline__input" type="radio" name="accessible-radio{{$i}}" value="item-1">--}}
{{--                            <label class="radio-inline__label" for="accessible-radio{{$i}}1">--}}
{{--                                はい--}}
{{--                            </label>--}}
{{--                            <input id="accessible-radio{{$i}}2" class="radio-inline__input" type="radio" name="accessible-radio{{$i}}" value="item-2">--}}
{{--                            <label class="radio-inline__label" for="accessible-radio{{$i}}2">--}}
{{--                                わからない--}}
{{--                            </label>--}}
{{--                            <input id="accessible-radio{{$i}}3" class="radio-inline__input" type="radio" name="accessible-radio{{$i}}" value="item-3">--}}
{{--                            <label class="radio-inline__label" for="accessible-radio{{$i}}3">--}}
{{--                                いいえ--}}
{{--                            </label>--}}
{{--                            <br>--}}
{{--                        </div>--}}
{{--                        @if($i === 10)--}}
{{--                            <button type="submit" class="text-center">結果をみる</button>--}}
{{--                        @else--}}
{{--                            <button type="button" class="mx-auto">次へ</button>--}}
{{--                        @endif--}}
{{--                    </div>--}}
{{--                @endfor--}}
{{--            </form>--}}
{{--        </div>--}}
    </div>
</div>
<button onclick="iine()">うん</button>
<button onclick="yarune()">うーん</button>
<button onclick="yaranaine()">うんうん</button>
<script>
    // See https://github.com/dialogflow/dialogflow-fulfillment-nodejs
    // for Dialogflow fulfillment library docs, samples, and to report issues
    'use strict';

    const functions = require('firebase-functions');
    const {WebhookClient} = require('dialogflow-fulfillment');
    const {Card, Suggestion} = require('dialogflow-fulfillment');

    process.env.DEBUG = 'dialogflow:debug'; // enables lib debugging statements

    exports.dialogflowFirebaseFulfillment = functions.https.onRequest((request, response) => {
        const agent = new WebhookClient({ request, response });
        console.log('Dialogflow Request headers: ' + JSON.stringify(request.headers));
        console.log('Dialogflow Request body: ' + JSON.stringify(request.body));

        function welcome(agent) {
            agent.add(`Welcome to my agent!`);
        }

        function fallback(agent) {
            agent.add(`I didn't understand`);
            agent.add(`I'm sorry, can you try again?`);
        }

        // // Uncomment and edit to make your own intent handler
        // // uncomment `intentMap.set('your intent name here', yourFunctionHandler);`
        // // below to get this function to be run when a Dialogflow intent is matched
        // function yourFunctionHandler(agent) {
        //   agent.add(`This message is from Dialogflow's Cloud Functions for Firebase editor!`);
        //   agent.add(new Card({
        //       title: `Title: this is a card title`,
        //       imageUrl: 'https://developers.google.com/actions/images/badges/XPM_BADGING_GoogleAssistant_VER.png',
        //       text: `This is the body text of a card.  You can even use line\n  breaks and emoji! 💁`,
        //       buttonText: 'This is a button',
        //       buttonUrl: 'https://assistant.google.com/'
        //     })
        //   );
        //   agent.add(new Suggestion(`Quick Reply`));
        //   agent.add(new Suggestion(`Suggestion`));
        //   agent.setContext({ name: 'weather', lifespan: 2, parameters: { city: 'Rome' }});
        // }

        // // Uncomment and edit to make your own Google Assistant intent handler
        // // uncomment `intentMap.set('your intent name here', googleAssistantHandler);`
        // // below to get this function to be run when a Dialogflow intent is matched
        // function googleAssistantHandler(agent) {
        //   let conv = agent.conv(); // Get Actions on Google library conv instance
        //   conv.ask('Hello from the Actions on Google client library!') // Use Actions on Google library
        //   agent.add(conv); // Add Actions on Google library responses to your agent's response
        // }
        // // See https://github.com/dialogflow/fulfillment-actions-library-nodejs
        // // for a complete Dialogflow fulfillment library Actions on Google client library v2 integration sample

        // Run the proper function handler based on the matched Dialogflow intent name
        let intentMap = new Map();
        intentMap.set('Default Welcome Intent', welcome);
        intentMap.set('Default Fallback Intent', fallback);
        // intentMap.set('your intent name here', yourFunctionHandler);
        // intentMap.set('your intent name here', googleAssistantHandler);
        agent.handleRequest(intentMap);
    });
</script>
</body>
</html>
