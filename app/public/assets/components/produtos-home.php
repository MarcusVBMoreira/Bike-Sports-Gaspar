<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="assets/css/components/produtos-home.css">
    </head>
    <body>
        <section id="produtos">
            <div class="produtos">
                <div class="container-produtos">
                    <nav class="nav-homeProd">
                        <div class="navigation">
                            <a href="#produtos">Em alta</a>
                            <a href="">Promoções</a>
                            <a href="#container-servicos">Serviços locais</a>
                        </div>
                    </nav>
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
                    <div id="container-servicos">
                        <a href="bike-fitter.php">
                            <div class="overlay-serv">
                                <p>Bike Fitter</p>   
                            </div>
                            <img src="assets/img/servicos/bike fitter.webp" alt="">
                        </a>
                        <a href="">
                            <div class="overlay-serv">
                                <p>Manutenção e Limpezas</p>   
                            </div>
                            <img src="assets/img/servicos/manutencao.jpg" alt="">
                        </a>
                        <a href="">
                            <div class="overlay-serv">
                                <p>Serviços sociais</p>   
                            </div>
                            <img src="assets/img/servicos/social.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <style>
            .nav-homeProd{
                background-color: #050611;
                width: 95%;
                height: 8vh;
                border-radius: 4px;
                display: flex;
                align-items: center;
                justify-content: start;
            }
            .navigation{
                width: 50%;
                height: 100%;
                display: flex;
                justify-content: space-around;
                align-items: center;
                text-transform: uppercase;
            }
            .container-categories{
                margin: 0 auto;
                width: 95%;
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
            #container-servicos{
                margin: 0 auto;
                width: 95%;
                height: 30vh;
                display: flex;
                justify-content: center;
                align-items: center;
                gap: 15px;
            }
            #container-servicos a{
                position: relative;
                display: flex;
                justify-content: center;
                align-items: center;
                width: 25%;
                height: 70%;
                background-color: #000;
            }
            .overlay-serv{
                position: absolute;
                height: 100%;
                width: 100%;
                background-color: rgba(0, 0, 0, 0.550);
                border-radius: 5px;
                display: flex;
                justify-content: start;
                align-items: flex-start;
                padding: 10px;
            }
            .overlay-serv p{
                color: #fff;
                font-size: 20px;
                font-weight: 500;
                text-transform: uppercase;
                letter-spacing: 1px;
            }
            #container-servicos a img{
                width: 100%;
                height: 100%;
                border-radius: 5px;
            }
        </style>
    </body>
</html>