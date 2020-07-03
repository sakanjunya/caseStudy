<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

class CheckDialog extends Controller
{
    //


    public function index(){
        $serviceAccountPath = ["/caseStudy/testcase-daqiom-23d9733ea420.json"];
        $projectId = ["testcase-daqiom"];
        $config = [
            'credentialsConfig' => [
                'keyFile' => $serviceAccountPath,
            ],
            'projectId' => $projectId,
        ];

        $intentsClient = new IntentsClient($config);
        try {
            $formattedParent = $intentsClient->projectAgentName($projectId);
            $pagedResponse = $intentsClient->listIntents($formattedParent);
            echo '<ul>';
            echo '<li>Intent List</li><ul>';
            foreach ($pagedResponse->iteratePages() as $page) {
                foreach ($page as $element) {
                    echo '<li>';
                    echo $element->getDisplayName();
                    echo ' ('.$element->getName().')';
                    echo '</li>';
                }
            }
            echo '</ul>';
            echo '</ul>';
        } finally {
            $intentsClient->close();
        }
        return view('checkDialog');
    }
}
