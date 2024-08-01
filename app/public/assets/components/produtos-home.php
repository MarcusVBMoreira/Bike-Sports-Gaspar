<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="assets/css/components/produtos-home.css">
    </head>
    <body>
        <section id="produtos">
            <div class="produtos">
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