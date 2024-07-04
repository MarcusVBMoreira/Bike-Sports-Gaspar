<?php
namespace Api;

use Api\Private\Utilities\Response;

define('_START_TIME',microtime(true));
define('_CONF',parse_ini_file(__DIR__ . '/src/private/utilities/.ini', true)); 

require_once __DIR__ . '/vendor/autoload.php';


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
    '/USERS' => '\src\public\users\index.php',
    '/USERS/' => '\src\public\users\index.php',
    '/USERS/GET' => '\src\public\users\get.php',
    '/USERS/GET/' => '\src\public\users\get.php',
    '/USERS/GETBYID/' => '\src\public\users\getbyid.php',
    '/USERS/GETBYID' => '\src\public\users\getbyid.php',
    '/USERS/CREATE' => '\src\public\users\create.php',
    '/USERS/CREATE/' => '\src\public\users\create.php',
    '/USERS/DELETESOFT' => '\src\public\users\deletesoft.php',
    '/USERS/DELETESOFT/' => '\src\public\users\deletesoft.php',
    '/USERS/DELETEHARD/' => '\src\public\users\deletehard.php',
    '/USERS/DELETEHARD' => '\src\public\users\deletehard.php',
    '/USERS/UPDATE' => '\src\public\users\update.php',
    '/USERS/UPDATE/' => '\src\public\users\update.php',
    '/USERS/UPDATEPROP/' => '\src\public\users\updateprop.php',
    '/USERS/UPDATEPROP' => '\src\public\users\updateprop.php',
    '/PRODUCTS' => '\src\public\products\index.php',
    '/PRODUCTS/' => '\src\public\products\index.php',
    '/PRODUCTS/GET' => '\src\public\products\get.php',
    '/PRODUCTS/GET/' => '\src\public\products\get.php',
    '/PRODUCTS/GETBYID/' => '\src\public\products\getbyid.php',
    '/PRODUCTS/GETBYID' => '\src\public\products\getbyid.php',
    '/PRODUCTS/CREATE' => '\src\public\products\create.php',
    '/PRODUCTS/CREATE/' => '\src\public\products\create.php',
    '/PRODUCTS/DELETESOFT' => '\src\public\products\deletesoft.php',
    '/PRODUCTS/DELETESOFT/' => '\src\public\products\deletesoft.php',
    '/PRODUCTS/DELETEHARD/' => '\src\public\products\deletehard.php',
    '/PRODUCTS/DELETEHARD' => '\src\public\products\deletehard.php',
    '/PRODUCTS/UPDATE' => '\src\public\products\update.php',
    '/PRODUCTS/UPDATE/' => '\src\public\products\update.php',
    '/PRODUCTS/UPDATEPROP/' => '\src\public\products\updateprop.php',
    '/PRODUCTS/UPDATEPROP' => '\src\public\products\updateprop.php',
]);

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