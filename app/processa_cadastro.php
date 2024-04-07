<?php

require('inc/config.php');
require('inc/api_functions.php');
require('inc/functions.php');

echo '<pre>';
//VALIDAÇÃO

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

$result = api_request('create_new_client','POST',[
    'nome' => $_POST['user_nome'],
    'cpf' => $_POST['user_cpf'],
    'sobrenome' => $_POST['user_sobrenome'],
    'telefone' => $_POST['user_telefone'],
    'data_nascimento' => $_POST['user_data_nascimento'],
    'email' => $_POST['user_email'],
    'senha' => $senha_hash
]);

if($result['data']['status'] == 'SUCCESS'){
    
    header('Location: login.php');
}else{
    echo $result['data']['message'];
}