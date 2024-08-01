<?php 
  session_start();
  if(isset($_GET['tipo'])){
    $tipo = $_GET['tipo'];
  }
  if(isset($_GET['categoria'])){
    $categoria = $_GET['categoria'];
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
      require('assets/components/footer.php');
    ?>
    <?php
      require('assets/components/footer-responsivo.php');
    ?>
  </body>
</html>