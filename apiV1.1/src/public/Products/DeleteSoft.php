<?php

use Api\Private\Controllers\ProductController;
use Api\Private\Utilities\Response;

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PATCH');

if(strtoupper($_SERVER['REQUEST_METHOD']) != 'PATCH'){
    Response::RequestError(405,'Verify your request method.',null);
}

if(!isset($_GET['id']) || !filter_var($_GET['id'],FILTER_VALIDATE_INT)){
    Response::RequestError(400,"'id' key not properly set.",$_GET);
}

$userController = new ProductController();

$deleted = $userController->SoftDeleteProduct($_GET['id']);

$response = new Response($_SERVER['REQUEST_METHOD'],$_GET);
$response->AddToResponse('results',$deleted['data']);
$response->Send($deleted['code']);