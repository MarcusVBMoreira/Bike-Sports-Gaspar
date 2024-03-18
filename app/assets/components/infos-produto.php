<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="assets/css/components/infos-produto.css">
    </head>
    <body>
        <?php if(isset($produto)){ ?>
            
            <div class="container">
                <div class="localizacao">
                    <div class="light"> Página inicial > </div>
                </div>
                <form action="" method="" class="produtos_geral">
                    <div class="head_produto">
                        <div class="img_produto">
                            <img src="upload/produtos/<?= $produto['img'] ?>" alt="">
                        </div>
                    </div>
                    <div class="corpo_produto">
                        <div class="nome_produto bold">
                            <?= $produto['nome'] ?>
                        </div>
                        <div class="cod_produto regular">
                            (cod: <?= $produto['codigo'] ?>)
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <div class="cor_produto">
                            <div class="cor_titulo">
                                <h2 class="light">Cor:</h2>
                            </div>
                            <ul>
                                <li class="cor1"></li>
                                <li class="cor2"></li>
                            </ul>
                        </div>
                        <div class="tamanho_produto">
                            <div class="tamanho_titulo">
                                <h2 class="light">Tamanho:</h2>
                            </div>
                            <ul>
                                <?php

                                    // !Verificando se existe o tamanho desejado
                                    $tamanho_P = $produto['tamanho_P'];
                                    if( $tamanho_P == 1){
                                        echo('<li class="P regular" id="P">P</li>');
                                    }

                                    // !Verificando se existe o tamanho desejado
                                    $tamanho_M = $produto['tamanho_M'];
                                    if( $tamanho_M == 1){
                                        echo('<li class="M regular" id="M">M</li>');
                                    }

                                    // !Verificando se existe o tamanho desejado
                                    $tamanho_G = $produto['tamanho_G'];
                                    if( $tamanho_G == 1){
                                        echo('<li class="G regular" id="G">G</li>');
                                    }

                                    // !Verificando se existe o tamanho desejado
                                    $tamanho_GG = $produto['tamanho_GG'];
                                    if( $tamanho_GG == 1){
                                        echo('<li class="GG regular" id="GG">GG</li>');
                                    }
                                ?>
                            </ul>
                        </div>
                        <div class="valor_produto bold">
                            R$<?= $produto['valor'] ?>
                        </div>
                        <div class="botoes">
                            <div class="compra">
                                <button type="submit" href="" class="btn_add_carrinho regular">
                                    Adicionar ao carrinho <i class="fa-solid fa-cart-shopping"></i>
                                </button>
                            </div>
                            <div class="frete">
                                <div class="btn_frete">
                                    <input type="txt" class="input_frete regular" name="calcular_frete" id="calcular_frete" placeholder="Calcule seu frete">
                                    <button href="" type="submit" class="input_calcular bold" value="">Calcular</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="produtos_infos">
                    <ul>
                        <li class="bold" onclick="descricao()">Descricao <div class="row_verde active" id="row_descricao"></div></li>
                        <div class="row"></div>
                        <li class="bold" onclick="medidas()">Medidas <div class="row_verde" id="row_medidas"></div></li>
                    </ul>
                    <div class="descricao active" id="descricao">
                        <h1 class="regular">Teste descricao</h1>
                    </div>
                    <div class="medidas" id="medidas">
                        <h1 class="regular">Teste medidas</h1>
                    </div>
                </div>
            </div>
        <?php }else{ ?>
            <p>Erro: Produto não encontrado</p>
        <?php } ?>
    
        <script src="assets/js/infos-produto.js"></script>
    </body>
</html>