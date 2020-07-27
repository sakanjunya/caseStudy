<?php

namespace App\Http\Middleware;
use Google\Cloud\Dialogflow\V2\AgentsClient;
use Google\Cloud\Dialogflow\V2\EntityTypesClient;
use Google\Cloud\Dialogflow\V2\IntentsClient;
use Google\Cloud\Dialogflow\V2\SessionEntityTypesClient;
use Google\Cloud\Dialogflow\V2\SessionsClient;
use Google\Cloud\Dialogflow\V2\QueryInput;
use Google\Cloud\Dialogflow\V2\QueryParameters;
use Google\Cloud\Dialogflow\V2\TextInput;
use Google\Cloud\Dialogflow\V2\QueryResult;
use Google\Protobuf\Internal\RepeatedField;
use Google\Rpc\Status;
use Google\Protobuf\Struct;
use Google\Protobuf\Internal\MapField;
use Google\Protobuf\Value;
use Google\Cloud\Dialogflow\V2\DetectIntentResponse;
use Google\Cloud\Dialogflow\V2\Context;
use Google\Cloud\Dialogflow\V2\Intent;
use Google\ApiCore\PagedListResponse;
use Closure;

class apiInclude
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $serviceAccountPath = ["/Users/skapan/Downloads/testcase-daqiom-eddc46afa5f1.json"];
        $projectId = ["testcase-daqiom"];
        $config = [
            'credentialsConfig' => [
                'keyFile' => $serviceAccountPath,
            ],
            'projectId' => $projectId,
        ];
    }
}
