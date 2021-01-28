<?php

require ('vendor/autoload.php');




// Si mon url != "slack-php-api-token.herokuapp.com"
if($_SERVER['HTTP_HOST'] != "slack-php-api-token.herokuapp.com"){

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

}

// Sinon je ne le fais pas 
if($_SERVER['HTTP_HOST'] == "slack-php-api-token.herokuapp.com"){


// $ary = array('data' => "hello World"); // clé => valeur
$ary = array('token' => $_ENV['TOKEN']);
$data = json_encode($ary);

}else{
    http_response_code(401);
}
echo($data);