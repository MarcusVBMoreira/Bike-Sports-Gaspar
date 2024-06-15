<?php

require_once __DIR__ . '/private/utilities/Response.php';

//TREATING THE URI
$exploded_uri = explode('/', $_GET['uri']);

//EXPLODING THE URI AND CONVERTING TO AN ARRAY, APPENDING '/' AS THE FIRST CHAR FOR ALL CELLS
//PLUS, CONVERTING TO UPPER CASE
for ($i=0; $i < count($exploded_uri); $i++) { 
    $exploded_uri[$i] = '/' . strtoupper($exploded_uri[$i]);
}

$requested_uri = '';

//SETTING THE TREATED URI TO A VARIABLE
foreach ($exploded_uri as $key => $value) {
    $requested_uri .= $value;
}

$_GET['uri'] = $requested_uri;

//APLLYING ROUTE
define('_ROUTES',[
    '/' => '',
    '/USERS' => '\public\users\index.php',
    '/USERS/' => '\public\users\index.php',
    '/USERS/GET' => '\public\users\get.php',
    '/USERS/GET/' => '\public\users\get.php',
    '/USERS/GETBYID/' => '\public\users\getbyid.php',
    '/USERS/GETBYID' => '\public\users\getbyid.php',
]);

if ($requested_uri == '/') {
    $response = new Response($_SERVER['REQUEST_METHOD'],$_GET);
    $response->AddToResponse('message','API running ok.');
    $routes = [
        '/Users',
        '/Users/Get',
        '/Users/GetById/{id}'
    ];
    $response->AddToResponse('routes',$routes);
    $response->Send(200);
}

if (preg_match('(/users/getbyid/[0-9])i',$requested_uri) || preg_match('(/users/getbyid)i',$requested_uri)) {
    $requested_uri = '/USERS/GETBYID/';
}

//RETURN RESPONSE WITH ERROR IF ROUTE IS INCORRECT
if (!isset(_ROUTES[$requested_uri])) {
    $response = new Response($_SERVER['REQUEST_METHOD']);
    $response->RequestError(400,"Route does not exist: " . $_SERVER['REQUEST_URI']);
}

$redirect_uri = __DIR__ . _ROUTES[$requested_uri];

require $redirect_uri;