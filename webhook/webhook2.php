<?php

function processMessage($input) {
    //$action = $input["result"]["action"];
   /* switch($action){

        case 'getNews':
            $param = $input["result"]["parameters"]["number"];
            getNews($param);
            break;

        default :*/
           /* sendMessage(array(
                "source" => "RMC",
                "speech" => "I am not able to understand. what do you want ?",
                "displayText" => "I am not able to understand. what do you want ?",
                "contextOut" => array()
            ));*/
    sendMessage (array(
        "payload" => array(
            "line" => array(
                "originalContentUrl"=> "https://nuzerowaste.github.io/7-days-2021-resources/mp3/v37ElMA5g2Y.mp3",
                "type"=> "audio",
                "duration"=> 32000
            )
        )
    ));

  //  }
}
function sendMessage($parameters) {
    header('Content-Type: application/json');
    $data = str_replace('\/','/',json_encode($parameters));
    echo $data;
}
$input = json_decode(file_get_contents('php://input'), true);
//if (isset($input["result"]["action"])) {
    processMessage($input);
//}
?>
