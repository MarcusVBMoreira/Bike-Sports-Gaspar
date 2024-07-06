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
    if(empty($value)){
        die('Preencha todos os campos obrigatórios.');
    } 
    
}

if(!filter_var($_POST['novo_email'], FILTER_VALIDATE_EMAIL)){
    die('Email inválido');
}

$result = api_request('update_client','POST',[
    'nome' => $_POST['novo_nome'],
    'cpf' => $_POST['novo_cpf'],
    'telefone' => $_POST['novo_telefone'],
    'data_nascimento' => $_POST['novo_data_nascimento'],
    'email' => $_POST['novo_email']
]);
print_data($result);