<?php


define('_API_BASE_URI','http://localhost/bike-sports-gaspar/mp_teste/api');

require_once __DIR__ . '/private/utilities/Response.php';

$exploded_uri = explode('/', $_GET['url']);

print_r($exploded_uri);die();

define('_ROUTES',[
    '/' => '',
    '/Users' => '/public/users/',
    '/Users/Get' => '/public/users/get'
]);



$redirect_uri = _API_BASE_URI . _ROUTES[$_GET['url']];

echo __DIR__ . _ROUTES[$_GET['url']];
echo '<br>';
echo $redirect_uri;