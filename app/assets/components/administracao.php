<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="assets/css/components/administracao.css">
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
                        <input type="text" class="pesquisa" placeholder="Pesquisar" >
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
                    <?php require('card-produto-adm.php'); ?>
                </div>
            </div>
        </div>
    </body>
</html>