<?php
namespace Api\Private\Router;

class Router{
    private const _ROUTES = [
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
    ];

    public function FormatURI(string $uri){
        $exploded_uri = explode('/', $uri);
        
        for ($i=0; $i < count($exploded_uri); $i++) { 
            $exploded_uri[$i] = '/' . strtoupper($exploded_uri[$i]);
        }

        $requested_uri = '';

        foreach ($exploded_uri as $key => $value) {
            $requested_uri .= $value;
        }

        if(substr($requested_uri, -1) == '/'){
            return $requested_uri;
        }

        $requested_uri .= '/';
        return $requested_uri;
    }
}