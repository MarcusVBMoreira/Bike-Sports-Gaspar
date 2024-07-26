<?php
  require __DIR__ . '/inc/Request.php';
  $produto = Request::GetById($_GET['codigo']);
  if(!is_array($produto['results'])){
    $produto = [];
  }else{
    $produto = $produto['results'];
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
      require('assets/components/infos-produto.php'); 
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