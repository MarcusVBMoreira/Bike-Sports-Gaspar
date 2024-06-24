<?php

use Api\Private\Controllers\UserController;
use Api\Private\Utilities\Response;

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: DELETE');

if($_SERVER['REQUEST_METHOD'] != 'DELETE'){
    Response::RequestError(405,'Verify your request method.');
}

if(!isset($_GET['id']) || !filter_var($_GET['id'],FILTER_VALIDATE_INT)){
    Response::RequestError(400,"'id' key not properly set.");
}

$userController = new UserController();

$deleted = $userController->HardDeleteUser($_GET['id']);

$response = new Response($_SERVER['REQUEST_METHOD'],$_GET);
$response->AddToResponse('result',$deleted['data']);
$response->Send($deleted['code']);