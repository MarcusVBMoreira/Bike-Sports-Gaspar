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

//REQUIRE CONTROLLERS
require '../api/controllers/UserController.php';
//REQUIRE RESPONSE BUILDER CLASS
require '../api/utilities/Response.php';

$requestMethod = strtoupper($_SERVER['REQUEST_METHOD']);

if($requestMethod == 'GET'){
    $response = new Response($requestMethod, $_SERVER['REQUEST_URI']);
}else if($requestMethod == 'POST'){
    $response = new Response($requestMethod, $_POST['endpoint']);
}

//INSTANTIATE RESPONSE CLASS
$response->Send(_CODES[0]);