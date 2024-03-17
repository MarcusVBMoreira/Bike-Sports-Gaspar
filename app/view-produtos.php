<?php 
  require('inc/config.php');
  require('inc/api_functions.php');
  require('inc/functions.php');

  if(key_exists('tipo',$_GET)){
    $results = api_request('get_products_filter', 'GET',['tipo' => $_GET['tipo']]);
  }elseif(key_exists('categoria',$_GET)){
    $results = api_request('get_products_filter', 'GET',['categoria' => $_GET['categoria']]);
  }

  if($results['data']['status'] == 'SUCCESS'){
    $produtos = $results['data']['results'];
  }else{
    $produtos = [];
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <?php
      require('assets/components/head.php');
    ?>
  </head>
  <body>
    <?php
      require('assets/components/header.php');
    ?>
    <?php
      require('assets/components/view-produtos.php');
    ?>
    <?php
      require('assets/components/btn-whats.php');
    ?>
    <?php
      require('assets/components/redes-sociais.php');
    ?>
    <?php
      require('assets/components/footer.php');
    ?>
  </body>
</html>