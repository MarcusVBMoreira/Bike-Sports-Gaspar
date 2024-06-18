<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');

require_once __DIR__ . '/../../private/utilities/Response.php';
require_once __DIR__ . '/../../private/controllers/UserController.php';

if($_SERVER['REQUEST_METHOD'] != 'PUT'){
    $response = new Response($_SERVER['REQUEST_METHOD'],$_POST);
    $response->RequestError(405,'Verify your request method.');
}

print_r($_POST);
