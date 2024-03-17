<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="assets/css/components/card-produto.css">
        <link rel="stylesheet" href="assets/css/components/view-produtos.css">
    </head>
    <body>
        <section>
            <div class="container">
                <div class="titulo_pagina">
                    <div class="localizacao">
                        <div class="regular"> 
                            Página inicial >
                            <?php
                                if(isset($categoria)){
                                    echo(' '.$tipo.' > '.$categoria);
                                }else{
                                    echo(' '.$tipo);
                                }
                                
                            ?>
                        </div>
                    </div>
                    <div class="titulo">
                        <!-- TESTE -->
                        <h1 class="titulo">
                            <?php
                                if(isset($categoria)){
                                    echo($categoria);
                                }else{
                                    echo($tipo);
                                }
                            ?>
                        </h1>

                        <h1 class=""></h1>
                    </div>
                    <div class="row"></div>
                </div>
                <div class="container_produtos">
                    <div class="filtros">
                        <!-- ADICIONAR TODA A PARDE DE FILTROS  -->
                    </div>
                    <div class="produtos">
                        <?php require('assets/components/card-produto.php') ?>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>