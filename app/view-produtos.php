<?php 
  require('inc/config.php');
  require('inc/api_functions.php');
  require('inc/functions.php');

  $produto = $_GET['pagina'];
  
  $get_produtos = 'get_all_products_'. $produto;

  $results = api_request($get_produtos, 'GET');

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