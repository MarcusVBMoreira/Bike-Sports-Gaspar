<?php
  require __DIR__ . '/assets/inc/Request.php';
  $produtos = Request::Get();
  $produtos = $produtos['results'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <!-- !RESET CSS! -->
  <link rel="stylesheet" href="assets/css/reset.css">
  <!-- Links CSS -->
  <link rel="stylesheet" href="assets/css/padrao.css">
  <link rel="stylesheet" href="assets/css/administracao.css">
  <link rel="stylesheet" href="assets/css/card-produto-adm.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <!-- !Favicon! -->
  <link rel="shortcut icon" alt="logo DKS" href="assets/img/logoBSG-branco-menor.ico" type="image/x-icon">
  <title>Sport Gaspar</title>
</head>
<body>
  <div class="container_adm">
    <div class="header_adm">
      <div class="row1_header">
        <div class="icon_voltar">
          <a href=""><i class="fa-solid fa-arrow-left"></i></a>
        </div>
        <div class="titulo_adm">
          <h1 class="titulo">Tela administrativa</h1>
        </div>
      </div>
      <div class="row2_header">
        <div class="pesquisar">
          <input type="text" class="pesquisa" placeholder="Pesquisar">
          <i class="fa-solid fa-magnifying-glass"></i>
        </div>
      </div>
    </div>
    <div class="container_produtos_adm">
      <div class="header_container_produtos">
        <h1 class="titulo">Todos os produtos cadastrados</h1>
        <div class="btn_adicionar_produto">
          <a href="cadastro-produto.php" class="btn_add">Adicionar produto</a>
        </div>
      </div>
      <div class="row_container_adm"></div>
      <div class="adm_container_produtos">
        <?php require ('assets/inc/card-produto-adm.php'); ?>
      </div>
    </div>
  </div>
</body>

</html>