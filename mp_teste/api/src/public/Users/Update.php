<?php

use Api\Private\Utilities\Response;

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');



if($_SERVER['REQUEST_METHOD'] != 'PUT'){
    Response::RequestError(405,'Verify your request method.');
}

$_PUT = json_decode(file_get_contents('php://input')) ?? [];

print_r($_PUT);