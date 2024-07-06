<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="assets/css/components/produtos-home.css">
    </head>
    <body>
        <section id="produtos">
            <div class="produtos">
                <div class="header-produtos">
                    <h1 class="titulo">Produtos</h1>
                    <div class="line-green"></div>
                </div>
                <div class="container-produtos">
                    <?php
                        require('assets/components/card-produto.php');
                    ?>
                    <div class="banners">
                        <div class="banner-1">

                        </div>
                        <div class="banner-2">

                        </div>
                    </div>
                    <?php
                        require('assets/components/card-produto.php');
                    ?>
                </div>
            </div>
        </section>
    </body>
</html>