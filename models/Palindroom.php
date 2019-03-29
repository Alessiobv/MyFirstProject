<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo flipText("oh yeah yeah");

function flipText($text ){
    $flippedText = "";
    for ($index = strlen($text) ;$index >= 0 ;$index--){
        $flippedText = $flippedText.$text[$index];
    }
    return $flippedText;
}



$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREAPRES   7=> false,
];
try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (Exception $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode()); 
}