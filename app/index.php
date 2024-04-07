<?php 
  require('inc/config.php');
  require('inc/api_functions.php');
  require('inc/functions.php');

  session_start();

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
    <?php
      require('assets/components/head.php');
    ?>
  </head>
  <body>
    <?php
      require('assets/components/header.php');
    ?>
    <?php
      require('assets/components/main-banner.php');
    ?>
    
    <?php
      require('assets/components/produtos-home.php');
    ?>
    <?php
      require('assets/components/btn-whats.php');
    ?>
    <?php
      require('assets/components/footer.php');
    ?>
    <?php
      require('assets/components/footer-responsivo.php');
    ?>
  </body>
</html>