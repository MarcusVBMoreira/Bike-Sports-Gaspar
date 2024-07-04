<?php

use Api\Private\Utilities\Response;

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: *');

$response = new Response($_SERVER['REQUEST_METHOD']);

$response->AddToResponse('message','Products route. Select a method: /Get, /GetById/{id}, /Create, /DeleteSoft/{id}, /Update');

$response->Send(200);