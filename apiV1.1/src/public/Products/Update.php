<?php

use Api\Private\Controllers\ProductController;
use Api\Private\Utilities\Response;

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');



if($_SERVER['REQUEST_METHOD'] != 'PUT'){
    Response::RequestError(405,'Verify your request method.',null);
}

$_PUT = json_decode(file_get_contents('php://input')) ?? [];
$_PUT = (array)$_PUT;

if(!isset($_PUT['id'])){
    Response::RequestError(400,"'id' key not properly set.",$_PUT);
}
$id = filter_var($_PUT['id'],FILTER_VALIDATE_INT);

// if(!isset($_PUT['val'])){
//     Response::RequestError(400,"'val' key not properly set.",$_PUT);
// }



$new_prod = [
    'name' => $_PUT['name'] ?? null,
    'desc' => isset($_PUT['desc']) ? $_PUT['desc'] : null,
    'val' => $_PUT['val'] ?? null,
    'cat' => isset($_PUT['cat']) ? $_PUT['cat'] : null,
    'qtd' => $_PUT['qtd'] ?? null,
    'tp' => isset($_PUT['tp']) ? $_PUT['tp'] : null,
    'mod' => isset($_PUT['mod']) ? $_PUT['mod'] : null,
    'brnd' => isset($_PUT['brnd']) ? $_PUT['brnd'] : null,
    'compst' => isset($_PUT['compst']) ? $_PUT['compst'] : null,
    'comptb' => isset($_PUT['comptb']) ? $_PUT['comptb'] : null,
    'wght' => isset($_PUT['wght']) ? $_PUT['wght'] : null,
    'dim' => isset($_PUT['dim']) ? $_PUT['dim'] : null,
    'spec' => isset($_PUT['spec']) ? $_PUT['spec'] : null,
    'video' => isset($_PUT['video']) ? $_PUT['video'] : null,
    'imgs' => isset($_PUT['imgs']) ? $_PUT['imgs'] : null,
];

if(!count($new_prod)>0){
    Response::RequestError(400,'Insufficient data to update record.',$_PUT);
}

// if($new_prod['name'] == null || $new_prod['qtd'] == null){
//     Response::RequestError(400,'In order to update an product please fill required fields: name, qtd',$_PUT);
// }

// if(!filter_var($new_prod['val'],FILTER_VALIDATE_FLOAT)){
//     Response::RequestError(400,"The 'val' field is not a float value.",$_PUT);
// }

// if(!filter_var($new_prod['qtd'],FILTER_VALIDATE_INT)){
//     Response::RequestError(400,"The 'qtd' field is not a integer value.",$_PUT);
// }

// if(!filter_var($new_prod['comptb'],FILTER_VALIDATE_INT) && $new_prod['comptb'] != null){
//     Response::RequestError(400,"The 'comptb' field is not a integer value.",$_PUT);
// }

$updated = ProductController::UpdateProduct($new_prod,$id);

$response = new Response($_SERVER['REQUEST_METHOD'],$_PUT);
$response->AddToResponse('results',$updated['data']);
$response->Send($updated['code']);