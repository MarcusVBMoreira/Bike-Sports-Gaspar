<?php

require_once __DIR__ . '/../../utilities/Response.php';
require_once __DIR__ . '/../../controllers/UserController.php';

$response = new Response($_SERVER['REQUEST_METHOD']);
$userController = new UserController();

$results = $userController->GetUsers();

$response->AddToResponse('results',$results);

$response->Send(200);