<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');

require_once __DIR__ . '/../../private/utilities/Response.php';
require_once __DIR__ . '/../../private/controllers/UserController.php';

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
    $response = new Response($_SERVER['REQUEST_METHOD']);
    $response->RequestError(405,'Verify your request method.');
}

//VALIDATE REQUIRED FIELDS
if (!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['pwd']) || !isset($_POST['brtd']) || !isset($_POST['phone'])) {
    $response = new Response($_SERVER['REQUEST_METHOD'],$_POST);
    $response->RequestError(400,'In order to create an user please fill the fields on request body: name, email, pwd, brtd, phone');
}
if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
    $response = new Response($_SERVER['REQUEST_METHOD'],$_POST);
    $response->RequestError(400,"The 'email' field is not a valid email address.");
}

$new_user = [
    'name' => $_POST['name'],
    'cpf' => isset($_POST['cpf']) ? $_POST['cpf'] : '',
    'email' => $_POST['email'],
    'pwd' => $_POST['pwd'],
    'brtd' => $_POST['brtd'],
    'phone' => $_POST['phone'],
    'cep' => isset($_POST['cep']) ? $_POST['cep'] : '',
    'st' => isset($_POST['st']) ? $_POST['st'] : '',
    'city' => isset($_POST['city']) ? $_POST['city'] : '',
    'strt' => isset($_POST['strt']) ? $_POST['strt'] : '',
    'ngbh' => isset($_POST['ngbh']) ? $_POST['ngbh'] : '',
    'num' => isset($_POST['num']) ? $_POST['num'] : '',
    'comp' => isset($_POST['comp']) ? $_POST['comp'] : '',
];

$userController = new UserController();
$created = $userController->CreateUser($new_user);

$response = new Response($_SERVER['REQUEST_METHOD'],$new_user);
$response->AddToResponse('results',$created['data']);
$response->Send($created['code']);