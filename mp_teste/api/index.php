<?php

require_once __DIR__ . '/private/utilities/Response.php';

$response = new Response($_SERVER['REQUEST_METHOD']);

$response->AddToResponse('message','API running ok.');
$response->AddToResponse('teste',$_GET);

$response->Send(200);