<?php

// DEPENDENCIES
require_once(dirname(__FILE__) ."/inc/config.php");
require_once(dirname(__FILE__) ."/inc/api_response.php");
require_once(dirname(__FILE__) ."/inc/api_logic.php");
require_once(dirname(__FILE__) ."/inc/database.php");


// ===============================================================
// INSTANTIATE THE API CLASS
$api_response = new Api_response();


// ===============================================================
// CHECK IF METHOD IS VALID
if(!$api_response->check_method($_SERVER['REQUEST_METHOD'])){
    $api_response->api_request_error('MÉTODO DE REQUISIÇÃO INVÁLIDO: ' . $_SERVER['REQUEST_METHOD']);
}

