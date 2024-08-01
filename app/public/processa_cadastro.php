<?php
require './inc/Request.php';
echo '<pre>';
//VALIDAÇÃO
/*
[user_email] => 1klmasdmkl@lmkasd.com
    [user_senha] => asdk(091321Lkm#
    [confirmar_senha] => asdk(091321Lkm#
*/
/* $keys = array_keys($_POST);
$values = array_values($_POST);//ACESSANDO CHAVES E VALORES DO POST
$i = 0; */
foreach($_POST as $key => $value){//VERIFICA SE TODOS OS CAMPOS OBRIGATÓRIOS FORAM PREENCHIDOS
    if($key  !== "complemento"){
        if(empty($value)){
            die('Preencha todos os campos obrigatórios.');
        } 
    }
}

if(!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)){
    die('Email inválido');
}

if(strlen($_POST['user_senha']) < 8){
    die('Senha precisa conter pelo menos oito caracteres');
}

if($_POST['user_senha'] !== $_POST['confirmar_senha']){
    die('Senhas precisam ser identicas');
}

$senha_hash = password_hash($_POST['user_senha'],PASSWORD_DEFAULT);

$result = Request::CreateUser([
    'name' => $_POST['user_nome'],
    'email' => $_POST['user_email'],
    'phone' => $_POST['user_telefone'],
    'pwd' => $senha_hash

]);

if($result['response_code'] == 201){
    header('Location: login.php');
}