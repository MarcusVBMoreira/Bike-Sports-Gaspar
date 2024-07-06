<?php 
  require('inc/config.php');
  require('inc/api_functions.php');
  require('inc/functions.php');

  $results = api_request('get_all_products', 'GET');

  if($results['data']['status'] == 'SUCCESS'){
    $produtos = $results['data']['results'];
  }else{
    $produtos = [];
  }
?>
<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <?php require('assets/components/head.php') ?>
    </head>
    <body>
        <?php require('assets/components/administracao.php'); ?>
    </body>
</html>