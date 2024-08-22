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
                    <div class="container-categories">
                        <a href="">
                            <div class="overlay">
                                <p>Ferramentas</p>   
                            </div>
                            <img src="assets/img/Categories/ferramentas.jpg" alt="">
                        </a>
                        <a href="">
                            <div class="overlay">
                                <p>Componentes</p>   
                            </div>
                            <img src="assets/img/Categories/componentes.jpg" alt="">
                        </a>
                        <a href="">
                            <div class="overlay">
                                <p>Vestuário</p>   
                            </div>
                            <img src="assets/img/Categories/vestuario.jpg" alt="">
                        </a>
                        <a href="">
                            <div class="overlay">
                                <p>Acessórios</p>   
                            </div>
                            <img src="assets/img/Categories/acessorios.jpg" alt="">
                        </a>
                        <a href="">
                            <div class="overlay">
                                <p>Suplementos</p>   
                            </div>
                            <img src="assets/img/Categories/suplementos.webp" alt="">
                        </a>
                    </div>
                    <?php
                        require('assets/components/card-produto.php');
                    ?>
                </div>
            </div>
        </section>
        <style>
            .container-categories{
                margin: 0 auto;
                width: 100%;
                height: 30vh;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
            .container-categories a{
                position: relative;
                display: flex;
                justify-content: center;
                align-items: center;
                width: 19%;
                height: 70%;
                background-color: #000;
            }
            .overlay{
                position: absolute;
                height: 100%;
                width: 100%;
                background-color: rgba(0, 0, 0, 0.550);
                border-radius: 5px;
                display: flex;
                justify-content: end;
                align-items: flex-start;
                padding: 10px;
            }
            .overlay p{
                color: #fff;
                font-size: 20px;
                font-weight: 500;
                text-transform: uppercase;
                letter-spacing: 1px;
            }
            .container-categories a img{
                width: 100%;
                height: 100%;
                border-radius: 5px;
            }
        </style>
    </body>
</html>