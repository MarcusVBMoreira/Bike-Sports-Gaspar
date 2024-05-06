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

require '../api/controllers/UserController.php';
require '../api/utilities/Response.php';


$response = new Response('POST','test');
$response->Send(_CODES[0]);