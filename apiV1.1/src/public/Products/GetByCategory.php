<?php

use Api\Private\Controllers\ProductController;
use Api\Private\Utilities\Response;

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');

if(strtoupper($_SERVER['REQUEST_METHOD'])!= 'GET'){
    Response::RequestError(405,'Verify your request method.',$_GET);
}


if (isset($_GET['cat'])) {
    $cat = $_GET['cat'];
}else{
    Response::RequestError(400,"'cat' key not properly set. Verify your request parameters.",$_GET);
}


$response = new Response($_SERVER['REQUEST_METHOD'],$cat);

$user = ProductController::GetProductByCategory($cat);

$response->AddToResponse('results', $user['data']);
$response->Send($user['code']);
