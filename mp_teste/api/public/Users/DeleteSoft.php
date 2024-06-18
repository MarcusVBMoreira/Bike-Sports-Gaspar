<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');

require_once __DIR__ . '/../../private/utilities/Response.php';
require_once __DIR__ . '/../../private/controllers/UserController.php';

if(strtoupper($_SERVER['REQUEST_METHOD']) != 'PUT'){
    $response = new Response($_SERVER['REQUEST_METHOD']);
    $response->RequestError(405,'Verify your request method.');
}

if(!isset($_GET['id']) || !filter_var($_GET['id'],FILTER_VALIDATE_INT)){
    $response = new Response($_SERVER['REQUEST_METHOD']);
    $response->RequestError(400,"'id' key not properly set.");
}

$userController = new UserController();

$deleted = $userController->SoftDeleteUser($_GET['id']);

$response = new Response($_SERVER['REQUEST_METHOD'],$_GET);
$response->AddToResponse('results',$deleted['data']);
$response->Send($deleted['code']);