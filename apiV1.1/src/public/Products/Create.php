<?php

use Api\Private\Controllers\ProductController;
use Api\Private\Utilities\Response;

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');

/*
{name} R
{cpf}
{email} R
{pwd} R
{brtd} R
{phone} R
{cep}
{state}
{city}
{street}
{neighbourhood}
{number}
{complement}
*/

//BLOCKING GET METHOD
if(strtoupper($_SERVER['REQUEST_METHOD']) != 'POST'){
    Response::RequestError(405,'Verify your request method.',null);
}

//VALIDATE REQUIRED FIELDS
// if (!isset($_POST['name']) || !isset($_POST['val']) || !isset($_POST['qtd'])) {
//     Response::RequestError(400,'In order to create an user please fill the fields on request body: name, value, qtd',$_POST);
// }
// if(!filter_var($_POST['val'],FILTER_VALIDATE_FLOAT) || !filter_var($_POST['qtd'],FILTER_VALIDATE_INT) && $_POST['qtd'] != 0){
//     Response::RequestError(400,"The 'val' field must be a float value; 'qtd' field must be a integer value.",$_POST);
// }

if(!isset($_POST['val'])){
    $val = '';
}else{
    $val = floatval($_POST['val']);
}

$new_prod = [
    'name' => isset($_POST['name']) ? $_POST['name'] : '',
    'desc' => isset($_POST['desc']) ? $_POST['desc'] : '',
    'val' => $val,
    'cat' => isset($_POST['cat']) ? $_POST['cat'] : '',
    'qtd' => isset($_POST['qtd']) ? $_POST['qtd'] : '',
    'col' => $_POST['col'] ?? '',
    'tp' => isset($_POST['tp']) ? $_POST['tp'] : '',
    'mod' => isset($_POST['mod']) ? $_POST['mod'] : '',
    'brnd' => isset($_POST['brnd']) ? $_POST['brnd'] : '',
    'compst' => isset($_POST['compst']) ? $_POST['compst'] : '',
    'comptb' => isset($_POST['comptb']) ? $_POST['comptb'] : '',
    'wght' => isset($_POST['wght']) ? $_POST['wght'] : '',
    'dim' => $_POST['dim'] ?? '',
    'spec' => isset($_POST['spec']) ? $_POST['spec'] : '',
    'video' => isset($_POST['video']) ? $_POST['video'] : '',
    'imgs' => $_POST['imgs'] ?? ''
];

$created = ProductController::CreateProduct($new_prod);

$response = new Response($_SERVER['REQUEST_METHOD'],$new_prod);
$response->AddToResponse('results',$created['data']);
$response->Send($created['code']);