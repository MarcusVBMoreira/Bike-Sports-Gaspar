<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="assets/css/components/infos-produto.css">
    </head>
    <body>
        <?php if(isset($produto)){ ?>
            <div class="container">
                <form action="" method="" class="produtos_geral" id="form_view_produto">
                    <div class="head_produto">
                        <div class="img_produto">
                            <img class="main-image" id="main-image" id="main-image" src="upload/produtos/<?= $produto['img1'] ?>" alt="">
                        </div>
                        <div class="outras_img">
                            <?php
                                $img1 = $produto['img1'];
                                if($img1 != null){
                                    ?>
                                        <div class="quadrado_img">
                                            <img class="bottom-image" id="img1" src="upload/produtos/<?php echo($img1); ?>" alt="">
                                        </div>
                                    <?php
                                }
                            ?>
                            <?php
                                $img2 = $produto['img2'];
                                if($img2 != null){
                                    ?>
                                        <div class="quadrado_img">
                                            <img class="bottom-image" id="img2" src="upload/produtos/<?php echo($img2); ?>" alt="">
                                        </div>
                                    <?php
                                }
                            ?>
                            <?php
                                $img3 = $produto['img3'];
                                if($img3 != null){
                                    ?>
                                        <div class="quadrado_img">
                                            <img class="bottom-image" id="img3" src="upload/produtos/<?php echo($img3); ?>" alt="">
                                        </div>
                                    <?php
                                }
                            ?>
                            <?php
                                $img4 = $produto['img4'];
                                if($img4 != null){
                                    ?>
                                        <div class="quadrado_img">
                                            <img class="bottom-image" id="img4" src="upload/produtos/<?php echo($img4); ?>" alt="">
                                        </div>
                                    <?php
                                }
                            ?>
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
                                <div>
                                    <?php

                                        $cor1  = $produto['cor1'];
                                        $cor2  = $produto['cor2'];
                                        $cor3  = $produto['cor3'];
                                        $cor4  = $produto['cor4'];

                                        //!Verificando se tem a cor 1
                                        if($cor1 != null){
                                            ?>
                                                <li class="<?php echo($cor1); ?>" onclick="funcao_cor1()" id="cor1"></li>
                                            <?php
                                        }

                                        //!Verificando se tem a cor 2
                                        if($cor2 != null){
                                            ?>
                                                <li class="<?php echo($cor2); ?>" onclick="funcao_cor2()" id="cor2"></li>
                                            <?php
                                        }

                                        //!Verificando se tem a cor 3
                                        if($cor3 != null){
                                            ?>
                                                <li class="<?php echo($cor3); ?>" onclick="funcao_cor3()" id="cor3"></li>
                                            <?php
                                        }

                                        //!Verificando se tem a cor 4
                                        if($cor4 != null){
                                            ?>
                                                <li class="<?php echo($cor4); ?>" onclick="funcao_cor4()" id="cor4"></li>
                                            <?php
                                        }
                                        ?>
                                        </div>
                                        <span class="regular span_cor" id="span_cor">Selecione uma cor</span>
                                        <input type="none" class="input_none" id="cor" name="cor" value="none">
                                        <?php
                                    ?>
                            </ul>
                        </div>
                        <div class="tamanho_produto">
                            <?php
                                echo('<ul>');
                                    echo('<div>');
                                
                                        $P = 0;
                                        $M = 0;
                                        $G = 0;
                                        $GG = 0;

                                        // !Verificando se existe o tamanho desejado
                                        $tamanho_P = $produto['tamanho_P'];
                                        if( $tamanho_P == 1){
                                            echo('<li class="P regular" id="P" onclick="tamanho_P()">P</li>');

                                            $P = 1;
                                        }

                                        // !Verificando se existe o tamanho desejado
                                        $tamanho_M = $produto['tamanho_M'];
                                        if( $tamanho_M == 1){
                                            echo('<li class="M regular" id="M" onclick="tamanho_M()">M</li>');

                                            $M = 1;
                                        }

                                        // !Verificando se existe o tamanho desejado
                                        $tamanho_G = $produto['tamanho_G'];
                                        if( $tamanho_G == 1){
                                            echo('<li class="G regular" id="G" onclick="tamanho_G()">G</li>');

                                            $G = 1;
                                        }

                                        // !Verificando se existe o tamanho desejado
                                        $tamanho_GG = $produto['tamanho_GG'];
                                        if( $tamanho_GG == 1){
                                            echo('<li class="GG regular" id="GG" onclick="tamanho_GG()">GG</li>');

                                            $GG = 1;
                                        }
                                    
                                    echo('</div>');
                                    echo('<span class="span_tamanho regular" id="span_tamanho">Selecionar um tamanho</span>');
                                    echo('<input type="none" id="tamanho" class="input_none" name="tamanho" value="none">');
                                echo('</ul>');
                                echo('<div class="tamanho_titulo">');
                                    $consulta = $P + $M + $G + $GG ;
                                    if( $consulta === 0){
                                        echo('
                                        <h2 class="light">Tamanho: único</h2>

                                        <script lang="javascript">
                                            document.querySelector("#tamanho").setAttribute("value", "unico");
                                        </script>
                                        ');
                                    }else{
                                        echo('<h2 class="light">Tamanho:</h2>');
                                    }
                                echo('</div>');
                            ?>
                        </div>
                        <div class="valor_produto bold">
                            R$<?= $produto['valor'] ?>
                        </div>
                        <div class="botoes">
                            <div class="compra">
                                <button type="submit" class="btn_add_carrinho regular">
                                    Adicionar ao carrinho <i class="fa-solid fa-cart-shopping"></i>
                                </button>
                            </div>
                            <div class="frete">
                                <div class="btn_frete">
                                    <input type="txt" class="input_frete regular" name="calcular_frete" id="calcular_frete" placeholder="Calcule seu frete">
                                    <button class="input_calcular bold" value="">Calcular</button>
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