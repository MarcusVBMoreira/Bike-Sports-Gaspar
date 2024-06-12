<?php

define('_API_BASE_URI','http://localhost/bike-sports-gaspar/mp_teste/api');

require_once __DIR__ . '/private/utilities/Response.php';

//TREATING THE URI
$exploded_uri = explode('/', $_GET['url']);

for ($i=0; $i < count($exploded_uri); $i++) { 
    $exploded_uri[$i] = '/' . ucfirst($exploded_uri[$i]);
}

$requested_uri = '';

foreach ($exploded_uri as $key => $value) {
    $requested_uri .= $value;
}

//APLLYING ROUTE
define('_ROUTES',[
    '/' => '',
    '/Users' => '\public\users\index.php',
    '/Users/' => '\public\users\index.php',
    '/Users/Get' => '\public\users\get.php',
    '/Users/Get/' => '\public\users\get.php'
]);

if ($requested_uri == '/') {
    $response = new Response(201);
    $response->AddToResponse('data','
        
    ');
}

if (!isset(_ROUTES[$requested_uri])) {
    $response = new Response($_SERVER['REQUEST_METHOD']);
    $response->RequestError(400,"Route does not exist: " . $_SERVER['REQUEST_URI']);
}

$redirect_uri = __DIR__ . _ROUTES[$requested_uri];

require $redirect_uri;