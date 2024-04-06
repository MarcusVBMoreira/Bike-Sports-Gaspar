<?php

require('inc/config.php');
require('inc/api_functions.php');
require('inc/functions.php');

$results = api_request('create_new_product','POST',[
    'nome' => $_POST['nome'],
    'valor_a_vista' => $_POST['valor_a_vista']
]);

if($results['data']['status'] == 'SUCCESS') {
    header('Location: administracao.php');
}else{
    
}