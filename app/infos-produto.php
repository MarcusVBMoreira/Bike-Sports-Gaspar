<?php
require ('inc/config.php');
require ('inc/api_functions.php');
require ('inc/functions.php');

$results = api_request('get_product_by','GET',['codigo' => $_GET['codigo']]);

if($results['data']['status'] == 'SUCCESS'){
    $produto = $results['data']['results']['0'];
}else{
    $produto = [];
}
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <?php require('assets/components/head.php'); ?>
  </head>
  <body>
    <?php require('assets/components/header.php'); ?>  
    <?php require('assets/components/infos-produto.php'); ?>
    <?php require('assets/components/btn-whats.php'); ?>
    <?php require('assets/components/redes-sociais.php'); ?>
    <?php require('assets/components/footer.php'); ?>
  </body>
</html>