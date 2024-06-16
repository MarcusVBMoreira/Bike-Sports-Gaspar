<?php

require_once __DIR__ . '/../../private/utilities/Response.php';
require_once __DIR__ . '/../../private/controllers/UserController.php';

if(strtoupper($_SERVER['REQUEST_METHOD'])!= 'GET'){
    $response = new Response($_SERVER['REQUEST_METHOD']);
    $response->RequestError(405,'Verify your request method.');
}

$response = new Response($_SERVER['REQUEST_METHOD']);
$userController = new UserController();

$results = $userController->GetUsers();
$response->AddToResponse('results',$results['data']);
$response->Send($results['code']);