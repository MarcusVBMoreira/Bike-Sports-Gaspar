<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="assets/css/components/infos-produto.css">
    </head>
    <body>
        <?php if(isset($produto)){ 
            
            $codigo = $produto['id'];
            $nome = $produto['nome'];
            $descricao = $produto['descricao'];
            $valor = $produto['valor'];
            $categoria = $produto['categoria'];
            $qnt_estoque = $produto['quantidade'];
            $tipo = $produto['tipo'];
            $modelo = $produto['modelo'];
            $marca = $produto['marca'];
            $composicao = $produto['composicao'];
            $compativel = $produto['compativel'];
            $peso = $produto['peso'];
            $dimensoes = $produto['dimensoes'];
            $especificacoes = $produto['especificacoes'];

            $img1 = $produto['img1'];
            $img2 = $produto['img2'];
            $img3 = $produto['img3'];
            $img4 = $produto['img4'];
            
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
                                <div class="cores">
                                    <?php switch($produto['cor']): case 'Preto': ?>
                                        <input type="radio" name="" id="cor1">
                                    <?php break; case 'Vermelho': ?>
                                        <input type="radio" name="" id="cor2">
                                    <?php break; case 'Azul': ?>
                                        <input type="radio" name="" id="cor3">
                                    <?php break; case 'Branco': ?>
                                        <input type="radio" name="" id="cor4">
                                    <?php break; case 'Cinza': ?>
                                        <input type="radio" name="" id="cor5">
                                </div>
                                <?php break; default:  ?>
                                    cor nao encotrada
                                <?php endswitch; ?>

                            </ul>
                        </div>
                        <div class="tamanho_produto">
                            <!-- <ul>
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
                            </ul> -->
                        </div>
                        <div class="valor_produto bold">
                            R$<?= $valor ?>
                        </div>
                        <div class="botoes">
                            <div class="compra">
                                <a href="adicionar_carrinho.php?id=<?= $codigo ?>" class="btn_add_carrinho regular">
                                    Adicionar ao carrinho <i class="fa-solid fa-cart-shopping"></i>
                                </a>
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
                        <div class="row_info_produtos"></div>
                        <li class="bold" onclick="medidas()">Medidas <div class="row_verde" id="row_medidas"></div></li>
                    </ul>
                    <div class="descricao active" id="descricao">
                        <?php
                            if($nome != null){
                                ?>
                                    <p class="regular nome_p" style="font-size:0.8em;"><?php echo($nome);?></p>
                                <?php
                            }
                            if($descricao != null){
                                ?>  
                                    <p class="regular descricao_p" style="font-size:0.8em;padding:1%;">Descrição: <?php echo($descricao)?></p>
                                <?php
                            }
                            if($marca != null){
                                ?>
                                    <p class="regular marca_p" style="font-size:0.8em;line-height:1.2em">Marca: <?php echo($marca); ?></p>
                                <?php
                            }
                            if($modelo != null){
                                ?>
                                    <p class="regular modelo_p" style="font-size:0.8em;line-height:1.2em">Modelo: <?php echo($modelo) ;?></p>
                                <?php
                            }
                            if($composicao != null){
                                ?>
                                    <p class="regular compativel_p" style="font-size:0.8em;line-height:1.2em">Composição: <?php echo($composicao) ?></p>
                                <?php
                            }
                            if($compativel != null){
                                ?>
                                    <p class="regular compativel_p" style="font-size:0.8em;line-height:1.2em">Compatível com: <?php echo($compativel) ?></p>
                                <?php
                            }
                            if($especificacoes != null){
                                ?>
                                    <p class="regular compativel_p" style="font-size:0.8em;line-height:1.2em">Especificações: <?php echo $especificacoes ?></p>
                                <?php
                            }
                        ?>
                    </div>
                    <div class="medidas" id="medidas">
                        <p class="regular nome_p" style="font-size:0.8em;line-height:1.2em">Peso: <?= $peso ?> g</p>
                        <p class="regular nome_p" style="font-size:0.8em;line-height:1.2em">Dimensões (C x A x L): <?= $dimensoes ?> cm</p>
                    </div>
                </div>
            </div>
        <?php }else{ ?>
            <p>Erro: Produto não encontrado</p>
        <?php } ?>
    
        <script src="assets/js/infos-produto.js"></script>
    </body>
</html>