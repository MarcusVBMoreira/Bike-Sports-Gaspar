<?php

use Api\Private\Controllers\UserController;
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
if (!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['pwd']) || !isset($_POST['phone'])) {
    Response::RequestError(400,'In order to create an user please fill the fields on request body: name, email, pwd, phone',$_POST);
}
if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
    Response::RequestError(400,"The 'email' field is not a valid email address.",$_POST);
}

$new_user = [
    'name' => $_POST['name'],
    'cpf' => isset($_POST['cpf']) ? $_POST['cpf'] : '',
    'email' => $_POST['email'],
    'pwd' => $_POST['pwd'],
    'brtd' => isset($_POST['brtd']) ? $_POST['brtd'] : '',
    'phone' => $_POST['phone'],
    'cep' => isset($_POST['cep']) ? $_POST['cep'] : '',
    'st' => isset($_POST['st']) ? $_POST['st'] : '',
    'city' => isset($_POST['city']) ? $_POST['city'] : '',
    'strt' => isset($_POST['strt']) ? $_POST['strt'] : '',
    'ngbh' => isset($_POST['ngbh']) ? $_POST['ngbh'] : '',
    'num' => isset($_POST['num']) ? $_POST['num'] : '',
    'comp' => isset($_POST['comp']) ? $_POST['comp'] : '',
];

$created = UserController::CreateUser($new_user);

$response = new Response($_SERVER['REQUEST_METHOD'],$new_user);
$response->AddToResponse('results',$created['data']);
$response->Send($created['code']);