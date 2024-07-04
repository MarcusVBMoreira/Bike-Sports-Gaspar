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

if(!isset($_PUT['val'])){
    Response::RequestError(400,"'val' key not properly set.",$_PUT);
}

$val = floatval($_PUT['val']);

$new_prod = [
    'name' => $_PUT['name'] ?? '',
    'desc' => isset($_PUT['desc']) ? $_PUT['desc'] : '',
    'val' => $val,
    'cat' => isset($_PUT['cat']) ? $_PUT['cat'] : '',
    'qtd' => $_PUT['qtd'] ?? null,
    'tp' => isset($_PUT['tp']) ? $_PUT['tp'] : '',
    'mod' => isset($_PUT['mod']) ? $_PUT['mod'] : '',
    'brnd' => isset($_PUT['brnd']) ? $_PUT['brnd'] : '',
    'compst' => isset($_PUT['compst']) ? $_PUT['compst'] : '',
    'comptb' => isset($_PUT['comptb']) ? $_PUT['comptb'] : '',
    'wght' => isset($_PUT['wght']) ? $_PUT['wght'] : '',
    'hght' => isset($_PUT['hght']) ? $_PUT['hght'] : '',
    'wdth' => isset($_PUT['wdth']) ? $_PUT['wdth'] : '',
    'lgth' => isset($_PUT['lgth']) ? $_PUT['lgth'] : '',
    'spec' => isset($_PUT['spec']) ? $_PUT['spec'] : '',
    'i1' => isset($_PUT['i1']) ? $_PUT['i1'] : '',
    'i2' => isset($_PUT['i2']) ? $_PUT['i2'] : '',
    'i3' => isset($_PUT['i3']) ? $_PUT['i3'] : '',
    'i4' => isset($_PUT['i4']) ? $_PUT['i4'] : '',
];

if(!count($new_prod)>0){
    Response::RequestError(400,'Insufficient data to update record.',$_PUT);
}

if($new_prod['name'] == '' || $new_prod['qtd'] == ''){
    Response::RequestError(400,'In order to update an product please fill required fields: name, qtd',$_PUT);
}

if(!filter_var($new_prod['val'],FILTER_VALIDATE_FLOAT)){
    Response::RequestError(400,"The 'val' field is not a float value.",$_PUT);
}

if(!filter_var($new_prod['qtd'],FILTER_VALIDATE_INT)){
    Response::RequestError(400,"The 'qtd' field is not a integer value.",$_PUT);
}

if(!filter_var($new_prod['comptb'],FILTER_VALIDATE_INT) && $new_prod['comptb'] != null){
    Response::RequestError(400,"The 'comptb' field is not a integer value.",$_PUT);
}

$updated = ProductController::UpdateProduct($new_prod,$id);

$response = new Response($_SERVER['REQUEST_METHOD'],$_PUT);
$response->AddToResponse('results',$updated['data']);
$response->Send($updated['code']);