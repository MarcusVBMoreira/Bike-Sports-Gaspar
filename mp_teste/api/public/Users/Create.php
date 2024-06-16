<?php

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

$response = new Response($_SERVER['REQUEST_METHOD']);
//BLOCKING GET METHOD
if(strtoupper($_SERVER['REQUEST_METHOD']) != 'POST'){
    $response->RequestError(405,'Verify your request method.');
}

//VALIDATE REQUIRED FIELDS
if (!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['pwd']) || !isset($_POST['brtd']) || !isset($_POST['phone'])) {
    $response->RequestError(400,'In order to create an user please fill the fields: name, email, pwd, brtd, phone');
}
if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
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
    'comp' => isset($_POST['comp']) ? $_POST['comp'] : '',
];

$userController = new UserController();
$created = $userController->CreateUser($new_user);

$response->AddToResponse('results',$created);
$response->Send(200);