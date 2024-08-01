<?php
namespace Api\Private\Router;

use Api\Private\Utilities\Response;

class Router{
    private static $Router;
    private const _BASE_URI = __DIR__ . '\..\..\public';
    protected const _ROUTES = [
        'GET' => [
            '/USERS/' => '\users\index.php',
            '/USERS/GET/' => '\users\get.php',
            '/USERS/GETBYID/' => '\users\getbyid.php',
            '/USERS/GETBYEMAIL/' => '\users\getbyemail.php',
            '/PRODUCTS/' => '\products\index.php',
            '/PRODUCTS/GET/' => '\products\get.php',
            '/PRODUCTS/GETBYID/' => '\products\getbyid.php',
        ],
        'POST' => [
            '/USERS/CREATE/' => '\users\create.php',
            '/PRODUCTS/CREATE/' => '\products\create.php',
        ],
        'PUT' => [
            '/USERS/UPDATE/' => '\users\update.php',
            '/PRODUCTS/UPDATE/' => '\products\update.php',
        ],
        'PATCH' => [
            '/USERS/DELETESOFT/' => '\users\deletesoft.php',            
            '/USERS/UPDATEPROP/' => '\users\updateprop.php',
            '/PRODUCTS/DELETESOFT/' => '\products\deletesoft.php',
            '/PRODUCTS/UPDATEPROP/' => '\products\updateprop.php',
        ],
        'DELETE' => [    
            '/USERS/DELETEHARD/' => '\users\deletehard.php',
            '/PRODUCTS/DELETEHARD/' => '\products\deletehard.php',
        ]
    ];
    public static function GetRouter(): self {
        if(!isset(self::$Router)){
            self::$Router = new self();
        }

        return self::$Router;
    }
    public static function FormatURI(string $uri): string {
        $exploded_uri = explode('/', $uri);

        $exploded_uri = array_filter($exploded_uri,'strlen');

        $requested_uri = '';

        foreach ($exploded_uri as $key => $value) {
            $requested_uri .= '/' . strtoupper($value);
        }
        
        if(preg_match('(/[0-9][0-9][0-9][0-9]|[0-9][0-9][0-9]|[0-9][0-9]|[0-9])',$requested_uri,$match)){
            foreach($match as $key => $value){
                $requested_uri = str_replace($value,"",$requested_uri);
            }
        } 

        if(substr($requested_uri, -1) == '/'){
            return $requested_uri;
        }    

        $requested_uri .= '/';

        return $requested_uri;
    }
    protected static function ValidateMethod(string $method): bool{
        return key_exists($method,self::_ROUTES);
    }
    public static function Load(string $method, string $uri): bool{
        $method = strtoupper($method);
        if(!self::ValidateMethod($method)){
            Response::RequestError(503,'METHOD INVALID',null);
        }

        if(!key_exists($uri,self::_ROUTES[$method])){
            Response::RequestError(404,'NOT FOUND',null);
        }

        require_once self::_BASE_URI . self::_ROUTES[$method][$uri];
        return true;
    }
}