<?php

require_once './utilities/Response.php';

$response = new Response($_SERVER['REQUEST_METHOD']);

$response->AddToResponse('message','Select a route.');

$response->Send(200);