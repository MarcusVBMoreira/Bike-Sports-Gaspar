<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/components/header.css">
    </head>
    <body>
        <header>
            <nav class="nav-1">
                <div class="mob-log">
                    <a href="index.php" class="logo"><img src="assets/img/logoBSG-branco-menor.png" alt="Logo Bike Sport Gaspar"></a>
                    <div class="mobile-menu" id="mobile-menu" onclick="menu_clicou()">
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="line3"></div>
                    </div>
                </div>
                <div class="pesquisar">
                    <input type="text" class="pesquisa" placeholder="Pesquisar" >
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                <ul class="nav-list-1">
                    <li><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                    <li><a href="#"><i class="fa-solid fa-user"></i></a></li>
                    <li><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                </ul>
            </nav>
            <nav class="nav-2" id="nav-2">
                <ul class="nav-list-2" id="nav-list-2">
                    <div class="categorias">
                        <a href="">Bikes Magazines</a>
                    </div>
                    <li>
                        <a href="">Bicicletas<i class="fa-solid fa-angle-down"></i></a>
                        <ul class="bike-dropdown">
                            <li><a href="montain_bike.php"  class="light">ARO 29</a></li>
                            <li><a href="" class="light">ARO 26</a></li>
                            <li><a href="" class="light">ARO 24</a></li>
                            <li><a href="" class="light">ARO 20</a></li>
                            <li><a href="" class="light">ARO 16</a></li>
                            <li><a href="" class="light">ARO 12</a></li>
                            <li><a href="" class="light">Bicicleta de Equilibrio</a></li>
                        </ul> 
                    </li>
                    <li>
                        <a href="">Acessorios<i class="fa-solid fa-angle-down"></i></a>
                        <ul class="container-ace-dropdown">
                            <ul class="ace-dropdown">
                                <li><a href="" class="light">Adesivos</a></li>
                                <li><a href="" class="light">Bar end</a></li>
                                <li><a href="" class="light">Bomba de Ar</a></li>
                                <li><a href="" class="light">Bolsa</a></li>
                                <li><a href="" class="light">Buzinas</a></li>
                            </ul>
                            <div class="line-ace"></div>
                            <ul class="ace-dropdown">
                                <li><a href="" class="light">Cadeado</a></li>
                                <li><a href="" class="light">Cadeirinhas</a></li>
                                <li><a href="" class="light">Câmeras</a></li>
                                <li><a href="" class="light">Capacetes</a></li>
                                <li><a href="" class="light">Caramanhola</a></li>
                            </ul>
                            <div class="line-ace"></div>
                            <ul class="ace-dropdown">
                                <li><a href="" class="light">Co2</a></li>
                                <li><a href="" class="light">Cestos</a></li>
                                <li><a href="" class="light">Descanso</a></li>
                                <li><a href="" class="light">Farol</a></li>
                                <li><a href="" class="light">Lanterna</a></li>
                            </ul>
                            <div class="line-ace"></div>
                            <ul class="ace-dropdown">
                                <li><a href="" class="light">Líquido tubeless</a></li>
                                <li><a href="" class="light">Óculos</a></li>
                                <li><a href="" class="light">Paralamas</a></li>
                                <li><a href="" class="light">Pneus</a></li>
                                <li><a href="" class="light">Porta celular</a></li>
                            </ul>
                            <div class="line-ace"></div>
                            <ul class="ace-dropdown">
                                <li><a href="" class="light">Remendos</a></li>
                                <li><a href="" class="light">Retrovisor</a></li>
                                <li><a href="" class="light">Roda lateral</a></li>
                                <li><a href="" class="light">Suporte caramanhola</a></li>
                                <li><a href="" class="light">Suporte ciclo computador</a></li>
                            </ul>
                            <div class="line-ace"></div>
                            <ul class="ace-dropdown">
                                <li><a href="" class="light">Suporte de farol</a></li>
                                <li><a href="" class="light">Suporte para bike</a></li>
                                <li><a href="" class="light">Suporte para carro</a></li>
                                <li><a href="" class="light">Suporte de Farol</a></li>
                                <li><a href="" class="light">Válvula presta </a></li>
                            </ul>
                        </ul> 
                    </li>
                    <li>
                        <a href="">Vestuario<i class="fa-solid fa-angle-down"></i></a>
                        <ul class="container-vest-dropdown">
                            <ul class="vest-dropdown">
                                <li><a href="montain_bike.php"  class="light">Bala clava</a></li>
                                <li><a href="" class="light">Bota</a></li>
                                <li><a href="" class="light">Bretelles</a></li>
                                <li><a href="" class="light">Camisa</a></li>
                            </ul>
                            <div class="line-vest"></div>
                            <ul class="vest-dropdown">
                                <li><a href="" class="light">Luvas</a></li>
                                <li><a href="" class="light">Macaquinhos</a></li>
                                <li><a href="" class="light">Manguito</a></li>
                            </ul>
                            <div class="line-vest"></div>
                            <ul class="vest-dropdown">
                                <li><a href="" class="light">Mochila hidratação</a></li>
                                <li><a href="" class="light">Meias</a></li>
                                <li><a href="" class="light">Pernito</a></li>
                            </ul>
                            <div class="line-vest"></div>
                            <ul class="vest-dropdown">
                                <li><a href="" class="light">Sapatilhas</a></li>
                                <li><a href="" class="light">Segunda Pele</a></li>
                                <li><a href="" class="light">Shots</a></li>
                            </ul>
                        </ul> 
                    </li>
                    <li>
                        <a href="">Ferramentas<i class="fa-solid fa-angle-down"></i></a>
                        <ul class="container-fer-dropdown">
                            <ul class="fer-dropdown">
                                <li><a href="" class="light">Alicate de corte cabo de aço</a></li>
                                <li><a href="" class="light">Canivete</a></li>
                                <li><a href="" class="light">Chave de corrente</a></li>
                            </ul>
                            <div class="line-fer"></div>
                            <ul class="fer-dropdown">
                                <li><a href="" class="light">Chave de pedal</a></li>
                                <li><a href="" class="light">Chave de Raio</a></li>
                                <li><a href="" class="light">Espátula</a></li>
                            </ul>
                            <div class="line-fer"></div>
                            <ul class="fer-dropdown">
                                <li><a href="" class="light">Extrator cassete</a></li>
                                <li><a href="" class="light">Extrator mov. Central</a></li>
                                <li><a href="" class="light">Extrator Pedivela</a></li>
                            </ul>
                        </ul>
                    </li>
                    <li>
                        <a href="">Componentes<i class="fa-solid fa-angle-down"></i></a>
                        <ul class="container-comp-dropdown">
                            <ul class="comp-dropdown">
                                <li><a href="" class="light">Abraçadeiras</a></li>
                                <li><a href="" class="light">Aros</a></li>
                                <li><a href="" class="light">Blocagens</a></li>
                                <li><a href="" class="light">Caixa direção</a></li>
                                <li><a href="" class="light">Cabo aço</a></li>
                            </ul>
                            <div class="comp-fer"></div>
                            <ul class="comp-dropdown">
                                <li><a href="" class="light">Cambio dianteiro</a></li>
                                <li><a href="" class="light">Cambio traseiro</a></li>
                                <li><a href="" class="light">Canotes</a></li>
                                <li><a href="" class="light">Cassete</a></li>
                                <li><a href="" class="light">Conduites</a></li>
                            </ul>
                            <div class="comp-fer"></div>
                            <ul class="comp-dropdown">
                                <li><a href="" class="light">Coroas</a></li>
                                <li><a href="" class="light">Corrente</a></li>
                                <li><a href="" class="light">Cubos</a></li>
                                <li><a href="" class="light">Ezy fire</a></li>
                                <li><a href="" class="light">Fita guidão</a></li>
                            </ul>
                            <div class="comp-fer"></div>
                            <ul class="comp-dropdown">
                                <li><a href="" class="light">Garfo</a></li>
                                <li><a href="" class="light">Gancheira freios</a></li>
                                <li><a href="" class="light">Guidão</a></li>
                                <li><a href="" class="light">Manetes</a></li>
                            </ul>
                            <div class="comp-fer"></div>
                            <ul class="comp-dropdown">
                                <li><a href="" class="light">Movimento central</a></li>
                                <li><a href="" class="light">Niples</a></li>
                                <li><a href="" class="light">Pedivelas </a></li>
                                <li><a href="" class="light">Rap fire</a></li>
                            </ul>
                            <div class="comp-fer"></div>
                            <ul class="comp-dropdown">
                                <li><a href="" class="light">Raios</a></li>
                                <li><a href="" class="light">Rolamentos</a></li>
                                <li><a href="" class="light">Selim</a></li>
                                <li><a href="" class="light">Suspensão</a></li>
                            </ul>
                        </ul>
                    </li>
                    <li>
                        <a href="">Suplementos<i class="fa-solid fa-angle-down"></i></a>
                        <ul class="sup-dropdown">
                            <li><a href="" class="light">Creatina</a></li>
                            <li><a href="" class="light">Pre treino</a></li>
                            <li><a href="" class="light">Sachê carbom</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
        <script src="assets/js/mobile-menu.js"></script>
    </body>
</html>