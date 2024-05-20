<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="assets/css/components/infos-produto.css">
    </head>
    <body>
        <?php if(isset($produto)){ 
            
            $codigo = $produto['codigo'];
            $nome = $produto['nome'];
            $descricao = $produto['descricao'];
            $valor = $produto['valor'];
            $categoria = $produto['categoria'];
            $qnt_estoque = $produto['qnt_estoque'];
            $tipo = $produto['tipo'];
            $modelo = $produto['modelo'];
            $marca = $produto['marca'];
            $composicao = $produto['composicao'];
            $compativel = $produto['compativel'];
            $peso = $produto['peso'];
            $altura = $produto['altura'];
            $largura = $produto['largura'];
            $comprimento = $produto['comprimento'];
            $especificacoes = $produto['especificacoes'];

            $img1 = $produto['img1'];
            $img2 = $produto['img2'];
            $img3 = $produto['img3'];
            $img4 = $produto['img4'];

            $cor1 = $produto['cor1'];
            $qnt_cor1 = $produto['qnt_cor1'];
            $tamanho_cor1 = $produto['tamanho_cor1'];
            $qnt_cor1_P = $produto['qnt_cor1_P'];
            $qnt_cor1_M = $produto['qnt_cor1_M'];
            $qnt_cor1_G = $produto['qnt_cor1_G'];
            $qnt_cor1_GG = $produto['qnt_cor1_GG'];

            $cor2 = $produto['cor2'];
            $qnt_cor2 = $produto['qnt_cor2'];
            $tamanho_cor2 = $produto['tamanho_cor2'];
            $qnt_cor2_P = $produto['qnt_cor2_P'];
            $qnt_cor2_M = $produto['qnt_cor2_M'];
            $qnt_cor2_G = $produto['qnt_cor2_G'];
            $qnt_cor2_GG = $produto['qnt_cor2_GG'];

            $cor3 = $produto['cor3'];
            $qnt_cor3 = $produto['qnt_cor3'];
            $tamanho_cor3 = $produto['tamanho_cor3'];
            $qnt_cor3_P = $produto['qnt_cor3_P'];
            $qnt_cor3_M = $produto['qnt_cor3_M'];
            $qnt_cor3_G = $produto['qnt_cor3_G'];
            $qnt_cor3_GG = $produto['qnt_cor3_GG'];

            $cor4 = $produto['cor4'];
            $qnt_cor4 = $produto['qnt_cor4'];
            $tamanho_cor4 = $produto['tamanho_cor4'];
            $qnt_cor4_P = $produto['qnt_cor4_P'];
            $qnt_cor4_M = $produto['qnt_cor4_M'];
            $qnt_cor4_G = $produto['qnt_cor4_G'];
            $qnt_cor4_GG = $produto['qnt_cor4_GG'];
            
            
            ?>
            <div class="container">
                <form action="" method="" class="produtos_geral" id="form_view_produto">
                    <div class="head_produto">
                        <div class="img_produto">
                            <img class="main-image" id="main-image" id="main-image" src="upload/produtos/<?= $img1 ?>" alt="">
                        </div>
                        <div class="outras_img">
                            <?php
                                if($img1 != null){
                                    ?>
                                        <div class="quadrado_img" id="img1_q">
                                            <img class="bottom-image" id="img1" src="upload/produtos/<?php echo($img1); ?>" alt="">
                                        </div>
                                    <?php
                                }
                            ?>
                            <?php
                                if($img2 != null){
                                    ?>
                                        <div class="quadrado_img" id="img2_q">
                                            <img class="bottom-image" id="img2" src="upload/produtos/<?php echo($img2); ?>" alt="">
                                        </div>
                                    <?php
                                }
                            ?>
                            <?php
                                if($img3 != null){
                                    ?>
                                        <div class="quadrado_img" id="img3_q">
                                            <img class="bottom-image" id="img3" src="upload/produtos/<?php echo($img3); ?>" alt="">
                                        </div>
                                    <?php
                                }
                            ?>
                            <?php
                                if($img4 != null){
                                    ?>
                                        <div class="quadrado_img" id="img4_q">
                                            <img class="bottom-image" id="img4" src="upload/produtos/<?php echo($img4); ?>" alt="">
                                        </div>
                                    <?php
                                }
                            ?>
                        </div>
                    </div>
                    <div class="corpo_produto">
                        <div class="nome_produto bold">
                            <?= $nome ?>
                        </div>
                        <div class="cor_produto">
                            <div class="cor_titulo">
                                <h2 class="light">Cor:</h2>
                            </div>
                            <ul>
                                <div>
                                    <?php
                                    
                                        $tc1 = false;
                                        
                                        //!Verificando se tem a cor 1
                                        if($cor1 != null && $qnt_cor1 != 0){

                                            ?>
                                                <li class="<?php echo($cor1); ?> ativo" onclick="funcao_cor1()" id="cor1"></li>
                                            <?php

                                            $qc1P = false;
                                            $qc1M = false;
                                            $qc1G = false;
                                            $qc1GG = false;
                                            
                                            if($tamanho_cor1 != null){
                                                $tc1 = true;
                                            }

                                            if($qnt_cor1_P > 0){
                                                $qc1P = true;
                                            }
                                            if($qnt_cor1_M > 0){
                                                $qc1M = true;
                                            }
                                            if($qnt_cor1_G > 0){
                                                $qc1G = true;
                                            }
                                            if($qnt_cor1_GG > 0){
                                                $qc1GG = true;
                                            }
                                            
                                        }elseif($cor1 != null){
                                            ?>
                                                <li class="<?php echo($cor1); ?> inative"  id="cor1"></li>  
                                            <?php
                                        }

                                        //!Verificando se tem a cor 2
                                        if($cor2 != null && $qnt_cor2 != 0){

                                            ?>
                                                <li class="<?php echo($cor2); ?> ativo" onclick="funcao_cor2()" id="cor2"></li>
                                            <?php

                                            $tc2 = false;
                                            $qc2P = false;
                                            $qc2M = false;
                                            $qc2G = false;
                                            $qc2GG = false;

                                            if($tamanho_cor2 != null){
                                                $tc2 = true;
                                            }

                                            if($qnt_cor2_P > 0){
                                                $qc2P = true;
                                            }
                                            if($qnt_cor2_M > 0){
                                                $qc2M = true;
                                            }
                                            if($qnt_cor2_G > 0){
                                                $qc2G = true;
                                            }
                                            if($qnt_cor2_GG > 0){
                                                $qc2GG = true;
                                            }
                                        }elseif($cor2 != null){
                                            ?>
                                                <li class="<?php echo($cor2); ?> inative" id="cor2"></li>
                                            <?php
                                        }

                                        //!Verificando se tem a cor 3
                                        if($cor3 != null && $qnt_cor3 != 0){
                                            ?>
                                                <li class="<?php echo($cor3); ?> ativo" onclick="funcao_cor3()" id="cor3"></li>
                                            <?php

                                            $tc3 = false;
                                            $qc3P = false;
                                            $qc3M = false;
                                            $qc3G = false;
                                            $qc3GG = false;

                                            if($tamanho_cor3 != null){
                                                $tc3 = true;
                                            }

                                            if($qnt_cor3_P > 0){
                                                $qc3P = true;
                                            }
                                            if($qnt_cor3_M > 0){
                                                $qc3M = true;
                                            }
                                            if($qnt_cor3_G > 0){
                                                $qc3G = true;
                                            }
                                            if($qnt_cor3_GG > 0){
                                                $qc3GG = true;
                                            }
                                        }elseif($cor3 != null){
                                            ?>
                                                <li class="<?php echo($cor3); ?> inative" id="cor3"></li>
                                            <?php
                                        }

                                        //!Verificando se tem a cor 4
                                        if($cor4 != null && $qnt_cor4 != 0){
                                            ?>
                                                <li class="<?php echo($cor4); ?> ativo" onclick="funcao_cor4()" id="cor4"></li>
                                            <?php

                                            $tc4 = false;
                                            $qc4P = false;
                                            $qc4M = false;
                                            $qc4G = false;
                                            $qc4GG = false;

                                            if($tamanho_cor4 != null){
                                                $tc4 = true;
                                            }

                                            if($qnt_cor4_P > 0){
                                                $qc4P = true;
                                            }
                                            if($qnt_cor4_M > 0){
                                                $qc4M = true;
                                            }
                                            if($qnt_cor4_G > 0){
                                                $qc4G = true;
                                            }
                                            if($qnt_cor4_GG > 0){
                                                $qc4GG = true;
                                            }
                                        }elseif($cor4 != null){
                                            ?>
                                                <li class="<?php echo($cor4); ?> inative" id="cor4"></li>
                                            <?php
                                        }
                                        ?>
                                </div>
                                <span class="regular span_cor" id="span_cor">Selecione uma cor disponível</span>
                                <input type="none" class="input_none" id="cor" name="cor" value="none">
                            </ul>
                        </div>
                        <div class="tamanho_produto">
                            <ul>
                                <div class="container_tamanho">
                                    <?php
                                    
                                        // !Verificando se existe o tamanho desejado com relação a cor
                                        if($tc1 != false){
                                            ?>
                                            <h2 class="light">Tamanho: único</h2>

                                            <script lang="javascript">
                                                document.querySelector("#tamanho").setAttribute("value", "unico");
                                            </script>

                                            <?php

                                        }else{
                                            //* COR 1
                                            ?>
                                            <h2 class="light">Tamanhos:</h2>
                                                <div class="tamanhos_cor1" id="tamanhos_cor1">
                                            <?php

                                                //!TAMANHO P
                                                if($qc1P > 0){
                                                    ?>
                                                        <li class="P regular ativo" id="P1" onclick="tamanho_P1()">P</li>
                                                    <?php
                                                }
                                                else{
                                                    ?>
                                                        <li class="P regular inative" id="P1">P</li>
                                                    <?php
                                                }

                                                //!TAMANHO M
                                                if($qc1M > 0){
                                                    ?>
                                                        <li class="M regular ativo" id="M1" onclick="tamanho_M1()">M</li>
                                                    <?php
                                                }
                                                else{
                                                    ?>
                                                        <li class="M regular inative" id="M1">M</li>
                                                    <?php
                                                }

                                                //!TAMANHO G
                                                if($qc1G > 0){
                                                    ?>
                                                        <li class="G regular ativo" id="G1" onclick="tamanho_G1()">G</li>
                                                    <?php
                                                }
                                                else{
                                                    ?>
                                                        <li class="G regular inative" id="G1">G</li>
                                                    <?php
                                                }
                                                
                                                //!TAMANHO GG

                                                if($qc1GG > 0){
                                                    ?>
                                                        <li class="G regular ativo" id="GG1" onclick="tamanho_GG1()">GG</li>
                                                    <?php
                                                }
                                                else{
                                                    ?>
                                                        <li class="GG regular inative" id="GG1">GG</li>
                                                    <?php
                                                }
                                            ?>
                                                </div>
                                            <?PHP

                                            //* COR 2
                                            ?>
                                                <div class="tamanhos_cor2" id="tamanhos_cor2">
                                            <?php
                                                //!TAMANHO P
                                                if($qc2P > 0){
                                                    ?>
                                                        <li class="P regular ativo" id="P2" onclick="tamanho_P2()">P</li>
                                                    <?php
                                                }
                                                else{
                                                    ?>
                                                        <li class="P regular inative" id="P2">P</li>
                                                    <?php
                                                }
                                                //!TAMANHO M
                                                if($qc2M > 0){
                                                    ?>
                                                        <li class="M regular ativo" id="M2" onclick="tamanho_M2()">M</li>
                                                    <?php
                                                }
                                                else{
                                                    ?>
                                                        <li class="M regular inative" id="M2">M</li>
                                                    <?php
                                                }
                                                //!TAMANHO G
                                                if($qc2G > 0){
                                                    ?>
                                                        <li class="G regular ativo" id="G2" onclick="tamanho_G2()">G</li>
                                                    <?php
                                                }
                                                else{
                                                    ?>
                                                        <li class="G regular inative" id="G2">G</li>
                                                    <?php
                                                }
                                                
                                                //!TAMANHO GG
                                                if($qc2GG > 0){
                                                    ?>
                                                        <li class="G regular ativo" id="GG2" onclick="tamanho_GG2()">GG</li>
                                                    <?php
                                                }
                                                else{
                                                    ?>
                                                        <li class="GG regular inative" id="GG2">GG</li>
                                                    <?php
                                                }
                                            ?>
                                                </div>
                                            <?php

                                            //* COR 3
                                            ?>
                                                <div class="tamanhos_cor3" id="tamanhos_cor3">
                                            <?php
                                                //!TAMANHO P
                                                if($qc3P > 0){
                                                    ?>
                                                        <li class="P regular ativo" id="P3" onclick="tamanho_P3()">P</li>
                                                    <?php
                                                }
                                                else{
                                                    ?>
                                                        <li class="P regular inative" id="P3">P</li>
                                                    <?php
                                                }
                                                //!TAMANHO M
                                                if($qc3M > 0){
                                                    ?>
                                                        <li class="M regular ativo" id="M3" onclick="tamanho_M3()">M</li>
                                                    <?php
                                                }
                                                else{
                                                    ?>
                                                        <li class="M regular inative" id="M3">M</li>
                                                    <?php
                                                }
                                                //!TAMANHO G
                                                if($qc3G > 0){
                                                    ?>
                                                        <li class="G regular ativo" id="G3" onclick="tamanho_G3()">G</li>
                                                    <?php
                                                }
                                                else{
                                                    ?>
                                                        <li class="G regular inative" id="G3">G</li>
                                                    <?php
                                                }
                                                
                                                //!TAMANHO GG
                                                if($qc3GG > 0){
                                                    ?>
                                                        <li class="G regular ativo" id="GG3" onclick="tamanho_GG3()">GG</li>
                                                    <?php
                                                }
                                                else{
                                                    ?>
                                                        <li class="GG regular inative" id="GG3">GG</li>
                                                    <?php
                                                }
                                            ?>
                                                </div>
                                            <?php

                                            //* COR 4
                                            ?>
                                                <div class="tamanhos_cor4" id="tamanhos_cor4">
                                            <?php
                                                //!TAMANHO P
                                                if($qc4P > 0){
                                                    ?>
                                                        <li class="P regular ativo" id="P4" onclick="tamanho_P4()">P</li>
                                                    <?php
                                                }
                                                else{
                                                    ?>
                                                        <li class="P regular inative" id="P4">P</li>
                                                    <?php
                                                }
                                                //!TAMANHO M
                                                if($qc4M > 0){
                                                    ?>
                                                        <li class="M regular ativo" id="M4" onclick="tamanho_M4()">M</li>
                                                    <?php
                                                }
                                                else{
                                                    ?>
                                                        <li class="M regular inative" id="M4">M</li>
                                                    <?php
                                                }
                                                //!TAMANHO G
                                                if($qc4G > 0){
                                                    ?>
                                                        <li class="G regular ativo" id="G4" onclick="tamanho_G4()">G</li>
                                                    <?php
                                                }
                                                else{
                                                    ?>
                                                        <li class="G regular inative" id="G4">G</li>
                                                    <?php
                                                }
                                                
                                                //!TAMANHO GG
                                                if($qc4GG > 0){
                                                    ?>
                                                        <li class="G regular ativo" id="GG4" onclick="tamanho_GG4()">GG</li>
                                                    <?php
                                                }
                                                else{
                                                    ?>
                                                        <li class="GG regular inative" id="GG4">GG</li>
                                                    <?php
                                                }
                                            ?>
                                                </div>
                                            <?php
                                        }

                                        

                                    ?>
                                    <div class="tamanhos_cor active" id="tamanhos_cor">
                                        <li class="P regular ativo" id="P" onclick="tamanho_P()">P</li>
                                        <li class="M regular ativo" id="M" onclick="tamanho_M()">M</li>
                                        <li class="G regular ativo" id="G" onclick="tamanho_G()">G</li>
                                        <li class="GG regular ativo" id="GG" onclick="tamanho_GG()">GG</li>
                                    </div>
                                </div>
                                <span class="span_tamanho regular" id="span_tamanho">Selecionar um tamanho</span>
                                <input type="none" id="tamanho" class="input_none" name="tamanho" value="none">
                            </ul>
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
                        <li class="bold" onclick="descricao()">Descrição <div class="row_verde active" id="row_descricao"></div></li>
                        <div class="row"></div>
                        <li class="bold" onclick="medidas()">Medidas <div class="row_verde" id="row_medidas"></div></li>
                    </ul>
                    <div class="descricao active" id="descricao">
                        <?php
                            if($nome != null){
                                ?>
                                    <p class="regular nome_p"><?php echo($nome);?></p>
                                <?php
                            }
                            if($descricao != null){
                                ?>  
                                    <p class="regular descricao_p">Descrição:</p>
                                    <pre class="regular descricao_pre_p"><?php echo($descricao);?></pre>
                                <?php
                            }
                            if($marca != null){
                                ?>
                                    <p class="regular marca_p">Marca: <?php echo($marca); ?></p>
                                <?php
                            }
                            if($modelo != null){
                                ?>
                                    <p class="regular modelo_p">Modelo: <?php echo($modelo) ;?></p>
                                <?php
                            }
                            if($composicao != null){
                                ?>
                                    <p class="regular compativel_p">Composição: <?php echo($composicao) ?></p>
                                <?php
                            }
                            if($compativel != null){
                                ?>
                                    <p class="regular compativel_p">Compatível: <?php echo($compativel) ?></p>
                                <?php
                            }
                            if($cor1 != null && ($cor2 != null or $cor3 != null or $cor4 != null)){
                                ?>
                                    <p class="regular cor_p">
                                        <?php
                                            echo('Cor: ' . $cor1);
                                            if($cor2 != null){
                                                echo(', ' . $cor2);
                                            }
                                            if($cor3 != null){
                                                echo(', ' . $cor3);
                                            }
                                            if($cor4 != null){
                                                echo(', ' . $cor4);
                                            }
                                        ?>
                                    </p>
                                <?php
                            }

                        ?>
                    </div>
                    <div class="medidas" id="medidas">
                    <?php
                            if($peso != null){
                                ?>
                                    <p class="regular nome_p">Peso: <?php echo($peso);?></p>
                                <?php
                            }
                            if($altura != null){
                                ?>
                                    <p class="regular nome_p">Altura: <?php echo($altura);?></p>
                                <?php
                            }
                            if($largura != null){
                                ?>
                                    <p class="regular nome_p">Largura: <?php echo($largura);?></p>
                                <?php
                            }
                            if($comprimento != null){
                                ?>
                                    <p class="regular nome_p">Comprimento: <?php echo($comprimento);?></p>
                                <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        <?php }else{ ?>
            <p>Erro: Produto não encontrado</p>
        <?php } ?>
    
        <script src="assets/js/infos-produto.js"></script>
    </body>
</html>