<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');

require_once __DIR__ . '/../../private/utilities/Response.php';
require_once __DIR__ . '/../../private/controllers/UserController.php';

if(strtoupper($_SERVER['REQUEST_METHOD'])!= 'GET'){
    $response = new Response($_SERVER['REQUEST_METHOD']);
    $response->RequestError(405,'Verify your request method.');
}


if (isset($_GET['id'])) {
    $id = filter_input(INPUT_GET,'id', FILTER_VALIDATE_INT);
}else{
    $response = new Response($_SERVER['REQUEST_METHOD']);
    $response->RequestError(400,"'id' key not properly set. Verify your request parameters.");
}


$response = new Response($_SERVER['REQUEST_METHOD'],$id);
$userController = new UserController();

$user = $userController->GetUserById($id);

$response->AddToResponse('results', $user['data']);
$response->Send($user['code']);
