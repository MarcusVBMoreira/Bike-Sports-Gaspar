<?php

use Api\Private\Controllers\UserController;
use Api\Private\Utilities\Response;

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');

if(strtoupper($_SERVER['REQUEST_METHOD'])!= 'GET'){
    Response::RequestError(405,'Verify your request method.',$_GET);
}


if (isset($_GET['email'])) {
    $email = filter_input(INPUT_GET,'email', FILTER_VALIDATE_EMAIL);
    if($email == false){
        Response::RequestError(400,'Invalid email address.',$_GET);
    }
}else{
    Response::RequestError(400,"'email' key not properly set. Verify your request parameters.",$_GET);
}


$response = new Response($_SERVER['REQUEST_METHOD'],$email);

$user = UserController::GetUserByEmail($email);

$response->AddToResponse('results', $user['data']);
$response->Send($user['code']);