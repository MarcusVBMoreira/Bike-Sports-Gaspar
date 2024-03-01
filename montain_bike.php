<?php
    require('painel/conecta.php');
    //require('painel/request.php');
    //echo api_request('get_all_products','GET');
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
        <header>
            <nav class="nav-1">
                <a href="#" class="logo">Logo</a>
                <div class="pesquisar">
                    <input type="text" placeholder="Pesquisar...">
                    <input type="submit" value="Pesquisar">
                </div>
                <ul class="nav-list-1">
                    <li><a href="#"><i class="fa-solid fa-user"></i></a></li>
                    <li><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                    <li><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                </ul>
            </nav>
            <nav class="nav-2">
                <div class="categorias">
                    <i class="fa-solid fa-list"></i>
                    <h2>categorias</h2>
                </div>
                <ul class="nav-list-2">
                    <li>
                        <a href="">Bike</a>
                        <ul class="dropdown">
                            <li><a href="montain_bike.php">Montain Bike</a></li>
                            <li><a href="">Eletric Bike</a></li>
                            <li><a href="">Road Bike</a></li>
                            <li><a href="">Simple Bike</a></li>
                        </ul> 
                    </li>
                    <li><a href="">Acessorios</a></li>
                    <li><a href="">Roupas</a></li>
                    <li><a href="">Ferramentas</a></li>
                    <li><a href="">Nutrição</a></li>
                </ul>
            </nav>
        </header>
        <div class="container_produtos">
            <div>
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
        </div>
    </body>
</html>