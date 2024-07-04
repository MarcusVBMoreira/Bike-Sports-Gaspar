<?php

use Api\Private\Controllers\ProductController;
use Api\Private\Utilities\Response;

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');

if(strtoupper($_SERVER['REQUEST_METHOD'])!= 'GET'){
    Response::RequestError(405,'Verify your request method.',$_GET);
}


if (isset($_GET['id'])) {
    $id = filter_input(INPUT_GET,'id', FILTER_VALIDATE_INT);
}else{
    Response::RequestError(400,"'id' key not properly set. Verify your request parameters.",$_GET);
}


$response = new Response($_SERVER['REQUEST_METHOD'],$id);

$user = ProductController::GetProductById($id);

$response->AddToResponse('results', $user['data']);
$response->Send($user['code']);
