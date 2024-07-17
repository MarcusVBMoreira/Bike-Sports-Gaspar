<?php 
  require __DIR__ . '/inc/Request.php';
  $produtos = Request::Get();
  $produtos = $produtos['results'];
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