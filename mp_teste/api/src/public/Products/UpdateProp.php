<?php

use Api\Private\Utilities\Response;
use Api\Private\Controllers\ProductController;

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PATCH');

if($_SERVER['REQUEST_METHOD'] != 'PATCH'){
    Response::RequestError(405,'Verify your request method.',null);
}

$_PATCH = json_decode(file_get_contents('php://input')) ?? [];
$_PATCH = (array)$_PATCH;

if(!isset($_PATCH['id'])){
    Response::RequestError(400,"'id' key not properly set.",$_PATCH);
}
if(!isset($_PATCH['prop'])){
    Response::RequestError(400,"'prop' parameter not properly set.",$_PATCH);
}
if(!isset($_PATCH['value'])){
    Response::RequestError(400,"'value' parameter not properly set.",$_PATCH);
}
$id = filter_var($_PATCH['id'],FILTER_VALIDATE_INT);
$prop = $_PATCH['prop'];
$value = $_PATCH['value'];

$prop_updated = ProductController::UpdateProp($id, $prop, $value);

$response = new Response($_SERVER['REQUEST_METHOD'],$_PATCH);
$response->AddToResponse('results',$prop_updated['data']);
$response->Send($prop_updated['code']);