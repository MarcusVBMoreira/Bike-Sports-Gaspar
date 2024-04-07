<?php
  require('inc/config.php');
  require('inc/api_functions.php');
  require('inc/functions.php');

  session_start();

  if(empty($_SESSION)){
    header('Location: login.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
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
        require('assets/components/perfil.php')
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