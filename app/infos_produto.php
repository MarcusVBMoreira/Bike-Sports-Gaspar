<?php
require ('inc/config.php');
require ('inc/api_functions.php');
require ('inc/functions.php');

$results = api_request('get_product_by','GET',['codigo' => $_GET['codigo']]);

if($results['data']['status'] == 'SUCCESS'){
    $produto = $results['data']['results']['0'];
}else{
    $produto = [];
}
?>
<!-- $codigo_produto = $_GET['codigo'];

$sql = "SELECT * FROM produtos WHERE codigo = $codigo_produto";
$consulta = $conexao->query($sql);
while ($dados = $consulta->fetch_assoc()) {

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
    ?> -->
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <?php include('assets/components/head.php') ?>
        <link rel="stylesheet" href="assets/css/pages/infos_produto.css">
    </head>

    <body>
        <header>
            <?php include('assets/components/header.php') ?>
        </header>

        <div class="container_infos">
            <div class="infos_container">
                <div class="localizacao_pagina"> <!-- TODO: Adicionar futuramente o link de bicicletas -->
                    <div><a href="index.php">pagina inicial</a>
                        <h3>></h3><a href="#">bicicletas</a>
                        <h3>></h3>
                        <h2>
                            <?php echo $produto['nome'] ?>
                        </h2>
                    </div>
                </div>
                <div class="infos_gerais">
                    <div class="infos_esquerda">
                        <div class="img_produto">
                            <img style="width: 100%;" src="upload/imagem_produtos/<?php echo $produto['img'] ?>" alt="">
                        </div>
                    </div>
                    <div class="infos_direita">
                        <div class="nome_produto">
                            <h1>
                                <?php echo $produto['nome']; ?>
                            </h1>
                        </div>
                        <div class="marca_produto">
                            <h2>Marca:
                                <?php echo $produto['marca'] ?>
                            </h2>
                        </div>
                        <div class="cor_produto">
                            <h2>COR: </h2>
                            <h2>
                                <?php echo $produto['cor'] ?>
                            </h2>
                        </div>
                        <div class="t_qnt_v">
                            <div class="t_qnt_v_esquerda">
                                <div class="tamanho_produto">
                                    <h2>Tamanho:</h2>
                                    <h2>P M G GG</h2>
                                </div>
                                <div class="valor_produto">
                                    <h1>R$
                                        <?php echo $produto['valor'] ?>
                                    </h1>
                                </div>
                            </div>
                            <div class="t_qnt_v_direita">
                                <div class="quantidade_produto">

                                </div>
                            </div>
                        </div>
                        <div class="btn_comprar">
                            <a class="comprar_btn" href="tela_pagamento.php?codigo=<?php echo $produto['codigo'] ?>">Comprar</a>
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
                        <pre><?php echo $produto['descricao'] ?></pre>
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