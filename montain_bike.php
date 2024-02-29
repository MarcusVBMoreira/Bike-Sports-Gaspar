<?php
    require('painel/conecta.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- !RESET CSS! -->
        <link rel="stylesheet" href="assets/css/reset.css">

        <!-- !LINK CSS HEADER_FOOTER! -->
        <link rel="stylesheet" href="assets/css/header_footer.css">

        <!-- !LINK CSS VIEW_PRODUTOS ! -->
        <link rel="stylesheet" href="assets/css/view_produtos.css">

        <!-- !LINK CSS PADRAO! -->
        <link rel="stylesheet" href="assets/css/padrao.css">

        <!-- !FAVICON! -->


        <!-- !LINK FONTAWESOME! -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

        <title>Sport Gaspar</title>
    </head>
    <body>
        <!-- espaço pra colocar o header quando estiver pronto -->


        <div class="container_produtos">
            <div class="localizacao_pagina">

            </div>
            <div class="view_produtos">
                <div class="filtros">

                </div>
                <div class="produtos_view">
                    <?php 
                        $sql = "SELECT * FROM produtos";
                        $consulta = $conexao->query($sql);
                        while($dados = $consulta->fetch_assoc()){
                            ?>
                                <div class="produto">
                                    <div class="img_produto">
                                        <a href="infos_produto?codigo=<?php echo $dados['codigo']; ?>" style="width: 100%;"><img src="upload/imagem_produtos/<?php echo($dados['img']); ?>" style="width: 100%; border-radius: 5%;" class="produto_img"></a>
                                    </div>
                                    <div class="nome_produto">
                                        <h3><?php echo $dados['nome']; ?></h3>
                                        <h3><?php echo $dados['modelo']; ?></h3>
                                    </div>
                                    <div class="valor_produto">
                                        <h1><?php echo $dados['valor']; ?></h1>
                                    </div>
                                    <div class="btn_comprar">
                                        <a href="infos_produto?codigo=<?php echo $dados['codigo']; ?>" class="comprar_btn">COMPRAR</a>
                                    </div>
                                </div>
                            <?php
                        }
                    ?>
                </div>
            </div>
        </div>
        
    </body>
</html>