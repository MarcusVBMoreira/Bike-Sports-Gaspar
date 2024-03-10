<?PHP
    require('painel/conecta.php')
?>
<?PHP
    $codigo_produto = $_GET['codigo'];

    $sql = "SELECT * FROM produtos WHERE codigo = $codigo_produto";
    $consulta = $conexao->query($sql);
    while($dados = $consulta->fetch_assoc()){

        $nome = $dados['nome'];
        $descricao = $dados['descricao'];
        $valor = $dados['valor'];
        $categoria = $dados['categoria'];
        $qnt_estoque = $dados['qnt_estoque'];
        $tipo = $dados['tipo'];
        $modelo = $dados['modelo'];
        $cor = $dados['cor'];
        $marca = $dados['marca'];
        $peso = $dados['peso'];
        $altura = $dados['altura'];
        $largura = $dados['largura'];
        $comprimento = $dados['comprimento'];
        $especificacoes = $dados['especificacoes'];
        $tamanho_P = $dados['tamanho_P'];
        $tamanho_M = $dados['tamanho_M'];
        $tamanho_G = $dados['tamanho_G'];
        $tamanho_GG = $dados['tamanho_GG'];
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
        <link rel="stylesheet" href="assets/css/header_footer.css">
        <link rel="stylesheet" href="assets/css/infos_produto.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <title>Sport Gaspar</title>
    </head>
    <body>
    <header>
        <nav class="nav-1">
            <a href="index.php" class="logo">Logo</a>
            <div class="pesquisar">
                <input type="text" class="pesquisa" placeholder="Pesquisar...">
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

        <div class="container_infos">
            <div class="infos_container">
                <div class="localizacao_pagina"> <!-- TODO: Adicionar futuramente o link de bicicletas -->
                    <div><a href="index.php">pagina inicial</a><h3>></h3><a href="#">bicicletas</a><h3>></h3><h2><?php echo($nome); ?></h2></div>
                </div>
                <div class="infos_gerais">
                    <div class="infos_esquerda">
                        <div class="img_produto">
                            <img style="width: 100%;" src="upload/imagem_produtos/<?php echo($dados['img']); ?>" alt="">
                        </div>
                    </div>
                    <div class="infos_direita">
                        <div class="nome_produto">
                            <h1><?php echo($nome); ?></h1>
                        </div>
                        <div class="marca_produto">
                            <h2>Marca: <?php echo($marca); ?></h2>
                        </div>
                        <div class="cor_produto">
                            <h2>COR: </h2>
                            <h2><?php echo($cor) ?></h2>
                        </div>
                        <div class="t_qnt_v">
                            <div class="t_qnt_v_esquerda">
                                <div class="tamanho_produto">
                                    <h2>Tamanho:</h2>
                                    <h2>P M G GG</h2> 
                                </div>
                                <div class="valor_produto">
                                    <h1>R$ <?php echo($valor); ?></h1>
                                </div>
                            </div>
                            <div class="t_qnt_v_direita">
                                <div class="quantidade_produto">

                                </div>
                            </div>
                        </div>
                        <div class="btn_comprar">
                            <a class="comprar_btn" href="tela_pagamento.php?codigo=<?php echo($codigo); ?>">Comprar</a>
                        </div>
                        <div class="frete_pagamento">
                            <div class="frete_produto">

                            </div>
                            <div class="pagamento_produto">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="descricao_medidas">
                    <div class="header_descricao">
                        <h1>Descrição</h1>
                    </div>
                    <div class="descricao_produto">
                        <pre><?php echo($descricao); ?></pre>
                    </div>
                </div>
            </div>
        </div>
        

        <footer>
        <h1>Bike Sport Gaspar</h1>
        <div class="line"></div>
        <p>&copy; Code Track</p>
        </footer>

    </body>
</html>
<?php
}
?>