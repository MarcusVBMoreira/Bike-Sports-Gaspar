<?php
/*
    STATUS _CODES GLOBAL CONSTANT ARRAY:
    0 => 200,
    1 => 201,
    2 => 204,
    3 => 401,
    4 => 403,
    5 => 404,
    6 => 405
*/
echo "<pre>";

require_once '../api/controllers/UserController.php';
require_once '../api/utilities/Response.php';

$userController = new UserController();

define("_BASE_URI","/bike-sports-gaspar/mp_teste/api");
define("_CODES",[
    200,
    201,
    204,
    401,
    403,
    404,
    405
]);



$requestMethod = strtoupper($_SERVER['REQUEST_METHOD']);
if($requestMethod == 'GET'){
    $response = new Response($requestMethod,$route);
}else if($requestMethod == 'POST'){
    $response = new Response($requestMethod,$route);
}

$response->AddToResponse('message','API running Ok.');

$response->Send(_CODES[0]);