<?php
  session_start();

  if(empty($_SESSION)){
    header('Location: login.php');
  }
  // ck_8376b8bdb6d7ae81163c7f843e304897cc4e492e 
  // cs_94442774f145249efca928791a907d665d0b9e53 
  // consumer
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
        require('assets/components/header.php')
    ?>
    <?php
        require('assets/components/carrinho.php')
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