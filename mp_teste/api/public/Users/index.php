<?php

require_once __DIR__ . '/../../private/utilities/Response.php';

$response = new Response($_SERVER['REQUEST_METHOD']);

$response->AddToResponse('message','Users route. Select a method: /Get, /GetById/{id}, /Create, /DeleteSoft/{id}, /Update');

$response->Send(200);