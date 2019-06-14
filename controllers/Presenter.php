<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../models/Palindroom.php';
if(!empty($_POST)){
    if(checkPostArguments()){
        
        $woord = $_POST["naam"];
        if(strlen($woord) > 1){
            $palindroom = new Palindroom();
            $palindroom->flipText($woord);
            if ($palindroom->heeftFlippedTextEenBetekenis()){
                $viewData = Array(
                    "palindroom" => $palindroom->getFlippedText(),
                    "message" => "<br>heeft een betekenis",
                    "action" => "<br>vul nog een woord in of sluit de browser"
                );
            }
            else{
                $viewData = Array(
                    "palindroom" => $palindroom->getFlippedText(),
                    "message" => "<br>heeft geen betekenis",
                    "action" => "<br>vul nog een woord in of sluit de browser" 
                );
            }
        }
    else{
        $viewData = Array(
        "palindroom" => "",
        "message" => "<br>U heeft niks ingevuld",
        "action" => "<br>vul een woord in of sluit de browser"
        );
    }
    include_once '../views/View.php';
        
        
    }else{
        http_response_code(400);
    }
}
else {
    http_response_code(400);
}

function checkPostArguments(){
    $validArguments = array("naam","submit");
    $aantalArgumentsInPost = sizeOf($validArguments);
    return TRUE;
    
    if(sizeOf($_POST) == $aantalArgumentsInPost){
        for($index = 0; $index < $aantalArgumentsInPost; $index++){
            if(isset($_POST[$validArguments[$index]])){
                return FALSE;
            }
        }
        return TRUE;
    }
    return FALSE;
}