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
                        <a href="view-produtos.php?tipo=Ferramentas">
                            <div class="overlay">
                                <p>Ferramentas</p>   
                            </div>
                            <img src="assets/img/Categories/ferramentas.jpg" alt="">
                        </a>
                        <a href="view-produtos.php?tipo=COMPONENTES">
                            <div class="overlay">
                                <p>Componentes</p>   
                            </div>
                            <img src="assets/img/Categories/componentes.jpg" alt="">
                        </a>
                        <a href="view-produtos.php?tipo=Vestuário">
                            <div class="overlay">
                                <p>Vestuário</p>   
                            </div>
                            <img src="assets/img/Categories/vestuario.jpg" alt="">
                        </a>
                        <a href="view-produtos.php?tipo=ACESSORIOS">
                            <div class="overlay">
                                <p>Acessórios</p>   
                            </div>
                            <img src="assets/img/Categories/acessorios.jpg" alt="">
                        </a>
                        <a href="view-produtos.php?tipo=Suplementos">
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
                flex-wrap: wrap;
                justify-content: center;
                align-items: center;
                gap: 20px;
            }
            .container-categories a{
                position: relative;
                display: flex;
                justify-content: center;
                align-items: center;
                width: 240px;
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
                flex-wrap: wrap;
                justify-content: center;
                align-items: center;
                gap: 20px;
            }
            #container-servicos a{
                position: relative;
                display: flex;
                justify-content: center;
                align-items: center;
                width: 240px;
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
            @media screen and (max-width: 1416px){
                .container-categories{
                    margin-bottom: 100px;
                }
            }
            @media screen and (max-width: 912px){
                .navigation{
                    width: 100%;
                }
            }
            @media screen and (max-width: 842px){
                .container-categories{
                    margin-bottom: 300px;
                }
                #container-servicos{
                    margin-bottom: 150px;
                }
            }
            @media screen and (max-width: 554px){
                .container-categories{
                    margin-bottom: 650px;
                }
                #container-servicos{
                    margin-bottom: 250px;
                }
                .navigation a{
                    font-size: .9rem;
                }
            }
            @media screen and (max-width: 440px){
                .container-categories{
                    margin-bottom: 500px;
                }
                .container-categories a{
                    height: 50%;
                }
                .navigation a{
                    font-size: .8rem;
                }
                #container-servicos a{
                    height: 50%;
                }
            }
            @media screen and (max-width: 412px){
                .navigation a{
                    font-size: .8rem;
                }
            }
        </style>
    </body>
</html>