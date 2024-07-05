<?php
namespace Api;

use Api\Private\Router\Router;
use Api\Private\Utilities\Response;

define('_START_TIME',microtime(true));
define('_CONF',parse_ini_file(__DIR__ . '/src/private/utilities/.ini', true)); 

require_once __DIR__ . '/vendor/autoload.php';
$u = 'asd/am.am/22/a//';
$router = new Router;
$uri = $router->FormatURI($u);
echo $uri;die();

if ($requested_uri == '/') {
    $response = new Response($_SERVER['REQUEST_METHOD'],$_GET);
    $response->AddToResponse('message','API running ok.');
    $routes = [
        '/Users',
        '/Users/Get',
        '/Users/GetById/{id}',
        '/Users/Create/',
        '/Users/DeleteSoft/',
        '/Users/Update/',
        '/Users/UpdateProp',
    ];
    $response->AddToResponse('routes',$routes);
    $response->Send(200);
}

if (preg_match('(/users/getbyid/)i',$requested_uri)) {
    $requested_uri = '/USERS/GETBYID/';
}
if (preg_match('(/users/deletesoft/)i',$requested_uri)) {
    $requested_uri = '/USERS/DELETESOFT/';
}
if (preg_match('(/users/deletehard/)i',$requested_uri)) {
    $requested_uri = '/USERS/DELETEHARD/';
}
if (preg_match('(/users/updateprop/)i',$requested_uri)) {
    $requested_uri = '/USERS/UPDATEPROP/';
}
if (preg_match('(/products/getbyid/)i',$requested_uri)) {
    $requested_uri = '/PRODUCTS/GETBYID/';
}
if (preg_match('(/products/deletesoft/)i',$requested_uri)) {
    $requested_uri = '/PRODUCTS/DELETESOFT/';
}
if (preg_match('(/products/deletehard/)i',$requested_uri)) {
    $requested_uri = '/PRODUCTS/DELETEHARD/';
}

//RETURN RESPONSE WITH ERROR IF ROUTE IS INCORRECT
if (!isset(_ROUTES[$requested_uri])) {
    Response::RequestError(400,"Route does not exist: " . $_SERVER['REQUEST_URI'],null);
}

$redirect_uri = __DIR__ . _ROUTES[$requested_uri];

require $redirect_uri;