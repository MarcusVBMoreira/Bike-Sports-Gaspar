<?php
namespace Api;
use Api\Private\Router\Router;

require_once __DIR__ . '/vendor/autoload.php';
define('_START_TIME',microtime(true));
define('_CONF',parse_ini_file(__DIR__ . '/src/private/utilities/.ini', true)); 

$Router = Router::GetRouter();

$server_uri = $Router::FormatURI($_GET['uri']);

$Router::Load($_SERVER['REQUEST_METHOD'],$server_uri);