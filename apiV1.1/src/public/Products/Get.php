<?php

use Api\Private\Controllers\ProductController;
use Api\Private\Utilities\Response;


header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');

if(strtoupper($_SERVER['REQUEST_METHOD'])!= 'GET'){
    Response::RequestError(405,'Verify your request method.',null);
}

$response = new Response($_SERVER['REQUEST_METHOD']);

$results = ProductController::GetProducts();
$response->AddToResponse('results',$results['data']);
$response->Send($results['code']);