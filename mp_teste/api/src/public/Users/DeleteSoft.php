<?php

use Api\Private\Controllers\UserController;
use Api\Private\Utilities\Response;

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');

if(strtoupper($_SERVER['REQUEST_METHOD']) != 'PUT'){
    Response::RequestError(405,'Verify your request method.',null);
}

if(!isset($_GET['id']) || !filter_var($_GET['id'],FILTER_VALIDATE_INT)){
    Response::RequestError(400,"'id' key not properly set.",$_GET);
}

$userController = new UserController();

$deleted = $userController->SoftDeleteUser($_GET['id']);

$response = new Response($_SERVER['REQUEST_METHOD'],$_GET);
$response->AddToResponse('results',$deleted['data']);
$response->Send($deleted['code']);