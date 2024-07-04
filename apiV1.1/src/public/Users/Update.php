<?php

use Api\Private\Controllers\UserController;
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

if($new_user['name'] == '' || $new_user['email'] == '' || $new_user['pwd'] == '' || $new_user['brtd'] == '' || $new_user['phone'] == ''){
    Response::RequestError(400,'In order to update an user please fill required fields: name, email, pwd, brtd, phone',$_PUT);
}

if(!filter_var($new_user['email'],FILTER_VALIDATE_EMAIL)){
    Response::RequestError(400,"The 'email' field is not a valid email address.",$_PUT);
}

$updated = UserController::UpdateUser($new_user,$id);

$response = new Response($_SERVER['REQUEST_METHOD'],$_PUT);
$response->AddToResponse('results',$updated['data']);
$response->Send($updated['code']);