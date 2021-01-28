<?php

require ('vendor/autoload.php');




// Si mon url != "slack-php-api-token.herokuapp.com"
if($_SERVER['HTTP_HOST'] != "slack-php-api-token.herokuapp.com"){

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

}

// Sinon je ne le fais pas 

// $ary = array('data' => "hello World"); // clé => valeur
$ary = array('token' => $_ENV['TOKEN']);
$data = json_encode($ary);

echo($data);