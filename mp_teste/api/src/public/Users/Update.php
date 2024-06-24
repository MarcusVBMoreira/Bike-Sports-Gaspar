<?php

use Api\Private\Utilities\Response;

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');



if($_SERVER['REQUEST_METHOD'] != 'PUT'){
    Response::RequestError(405,'Verify your request method.',null);
}

$_PUT = json_decode(file_get_contents('php://input')) ?? [];
$_PUT = (array)$_PUT;

$new_user = [
    'name' => $_PUT['name'] ?? '',
    'cpf' => $_PUT['cpf'] ?? '',
    'email' => $_PUT['email'] ?? '',
    'pwd' => $_PUT['pwd'] ?? '',
    'brtd' => $_PUT['brtd'] ?? '',
    'phone' => $_PUT['phone'] ?? '',
    'cep' => $_PUT['cep'] ?? '',
    'st' => $_PUT['st'] ?? '',
    'city' => $_POST['city'] ?? '',
    'strt' => $_PUT['strt'] ?? '',
    'ngbh' => $_PUT['ngbh'] ?? '',
    'num' => $_PUT['num'] ?? '',
    'comp' => $_PUT['comp'] ?? '',
];

if(!count($new_user)>0){
    Response::RequestError(400,'Insufficient data to update record.',$_PUT);
}




print_r($new_user);