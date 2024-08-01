<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="assets/css/components/header.css">
    </head>
    <body>
        <header>
            <nav class="nav-1">
                <div class="mob-log" id="mob-lob">
                    <a href="index.php" class="logo"><img src="assets/img/logoNovo.png" alt="Logo Bike Sport Gaspar"></a>
                    <div class="mobile-menu" onclick="menu_clicou()">
                        <div class="line1" id="line1"></div>
                        <div class="line2" id="line2"></div>
                        <div class="line3" id="line3"></div>
                    </div>
                </div>
                <div class="pesquisar">
                    <input type="text" class="pesquisa" placeholder="Pesquisar" >
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                <img class="logo-cell" src="assets/img/logoNovo.png" alt="">
                <ul class="nav-list-1">
                    <li><a href="perfil.php"><i class="fa-solid fa-heart"></i></a></li>
                    <li><a href="carrinho.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
                    <li><a href="perfil.php"><i class="fa-solid fa-user"></i></a></li>
                </ul>
            </nav>
            <nav class="nav-2" id="nav-2">
                <ul class="nav-list-2" id="nav-list-2">
                        <div class="usuario">
                            <a class="user" href="perfil.php">
                                <i class="fa-regular fa-user"></i>
                            </a>
                            <a class="nome" href="perfil.php">
                                <p class="bold username">[ Nome do usuario]</p>
                                <p class="desc">Acessesua conta e seus pedidos</p>
                            </a>
                        </div>
                    <li>
                        <div class="nome-categoria">
                            <a href="view-produtos.php?tipo=BICICLETAS">BICICLETAS</a>
                            <i class="fa-solid fa-angle-right" id="seta-bike" onclick="bike_dropdown()"></i>
                        </div>
                        <ul class="bike-dropdown" id="bike">
                            <li><a href="view-produtos.php?tipo=BICICLETAS & categoria=Aro 29" class="light">ARO 29</a></li>
                            <li><a href="view-produtos.php?tipo=BICICLETAS & categoria=Aro 26" class="light">ARO 26</a></li>
                            <li><a href="view-produtos.php?tipo=BICICLETAS & categoria=Aro 24" class="light">ARO 24</a></li>
                            <li><a href="view-produtos.php?tipo=BICICLETAS & categoria=Aro 20" class="light">ARO 20</a></li>
                            <li><a href="view-produtos.php?tipo=BICICLETAS & categoria=Aro 16" class="light">ARO 16</a></li>
                            <li><a href="view-produtos.php?tipo=BICICLETAS & categoria=Aro 12" class="light">ARO 12</a></li>
                            <li><a href="view-produtos.php?tipo=BICICLETAS & categoria=Bicicletinha de equilíbrio" class="light">Bicicletinha de Equilíbrio</a></li>
                        </ul> 
                    </li>
                    <li>
                        <div class="nome-categoria">
                            <a href="view-produtos.php?tipo=ACESSORIOS">ACESSORIOS</a>
                            <i class="fa-solid fa-angle-right" id="seta-ace" onclick="ace_dropdown()"></i>
                        </div>
                        <ul class="container-ace-dropdown" id="ace">
                            <ul class="ace-dropdown">
                                <li><a href="view-produtos.php?tipo=ACESSORIOS & categoria=Adesivos" class="light">Adesivos</a></li>
                                <li><a href="view-produtos.php?tipo=ACESSORIOS & categoria=Bar end" class="light">Bar end</a></li>
                                <li><a href="view-produtos.php?tipo=ACESSORIOS & categoria=Bomda de ar" class="light">Bomba de Ar</a></li>
                                <li><a href="view-produtos.php?tipo=ACESSORIOS & categoria=Bolsa" class="light">Bolsa</a></li>
                                <li><a href="view-produtos.php?tipo=ACESSORIOS & categoria=Buzinas" class="light">Buzinas</a></li>
                            </ul>
                            <div class="line-ace"></div>
                            <ul class="ace-dropdown">
                                <li><a href="view-produtos.php?tipo=ACESSORIOS & categoria=Cadeado" class="light">Cadeado</a></li>
                                <li><a href="view-produtos.php?tipo=ACESSORIOS & categoria=Cadeirinhas" class="light">Cadeirinhas</a></li>
                                <li><a href="view-produtos.php?tipo=ACESSORIOS & categoria=Câmeras" class="light">Câmeras</a></li>
                                <li><a href="view-produtos.php?tipo=ACESSORIOS & categoria=Capacetes" class="light">Capacetes</a></li>
                                <li><a href="view-produtos.php?tipo=ACESSORIOS & categoria=Caramanhola" class="light">Caramanhola</a></li>
                            </ul>
                            <div class="line-ace"></div>
                            <ul class="ace-dropdown">
                                <li><a href="view-produtos.php?tipo=ACESSORIOS & categoria=Co2" class="light">Co2</a></li>
                                <li><a href="view-produtos.php?tipo=ACESSORIOS & categoria=Cestos" class="light">Cestos</a></li>
                                <li><a href="view-produtos.php?tipo=ACESSORIOS & categoria=Descanso" class="light">Descanso</a></li>
                                <li><a href="view-produtos.php?tipo=ACESSORIOS & categoria=Farol" class="light">Farol</a></li>
                                <li><a href="view-produtos.php?tipo=ACESSORIOS & categoria=Lanterna" class="light">Lanterna</a></li>
                            </ul>
                            <div class="line-ace"></div>
                            <ul class="ace-dropdown">
                                <li><a href="view-produtos.php?tipo=ACESSORIOS & categoria=Liquido tubless" class="light">Líquido tubeless</a></li>
                                <li><a href="view-produtos.php?tipo=ACESSORIOS & categoria=Óculos" class="light">Óculos</a></li>
                                <li><a href="view-produtos.php?tipo=ACESSORIOS & categoria=Paralamas" class="light">Paralamas</a></li>
                                <li><a href="view-produtos.php?tipo=ACESSORIOS & categoria=Pneus" class="light">Pneus</a></li>
                                <li><a href="view-produtos.php?tipo=ACESSORIOS & categoria=Porta celular" class="light">Porta celular</a></li>
                            </ul>
                            <div class="line-ace"></div>
                            <ul class="ace-dropdown">
                                <li><a href="view-produtos.php?tipo=ACESSORIOS & categoria=Remendos" class="light">Remendos</a></li>
                                <li><a href="view-produtos.php?tipo=ACESSORIOS & categoria=Retrovisor" class="light">Retrovisor</a></li>
                                <li><a href="view-produtos.php?tipo=ACESSORIOS & categoria=Roda lateral" class="light">Roda lateral</a></li>
                                <li><a href="view-produtos.php?tipo=ACESSORIOS & categoria=Suporte caramanhola" class="light">Suporte caramanhola</a></li>
                                <li><a href="view-produtos.php?tipo=ACESSORIOS & categoria=Suporte ciclo computador" class="light">Suporte ciclo computador</a></li>
                            </ul>
                            <div class="line-ace"></div>
                            <ul class="ace-dropdown">
                                <li><a href="view-produtos.php?tipo=ACESSORIOS & categoria=Suporte de farol" class="light">Suporte de farol</a></li>
                                <li><a href="view-produtos.php?tipo=ACESSORIOS & categoria=SUPORTE PARA BIKE" class="light">Suporte para bike</a></li>
                                <li><a href="view-produtos.php?tipo=ACESSORIOS & categoria=Suporte para carro" class="light">Suporte para carro</a></li>
                                <li><a href="view-produtos.php?tipo=ACESSORIOS & categoria=Suporte de farol" class="light">Suporte de Farol</a></li>
                                <li><a href="view-produtos.php?tipo=ACESSORIOS & categoria=Válvula presta" class="light">Válvula presta </a></li>
                            </ul>
                        </ul> 
                    </li>
                    <li>
                        <div class="nome-categoria">
                            <a href="view-produtos.php?tipo=Vestuário">Vestuário</a>
                            <i class="fa-solid fa-angle-right" id="seta-vest" onclick="vest_dropdown()"></i>
                        </div>
                        <ul class="container-vest-dropdown" id="vest">
                            <ul class="vest-dropdown">
                                <li><a href="view-produtos.php?tipo=Vestuário & categoria=Bala clava" class="light">Bala clava</a></li>
                                <li><a href="view-produtos.php?tipo=Vestuário & categoria=Bota" class="light">Bota</a></li>
                                <li><a href="view-produtos.php?tipo=Vestuário & categoria=Bretelles" class="light">Bretelles</a></li>
                                <li><a href="view-produtos.php?tipo=Vestuário & categoria=Camisa" class="light">Camisa</a></li>
                            </ul>
                            <div class="line-vest"></div>
                            <ul class="vest-dropdown">
                                <li><a href="view-produtos.php?tipo=Vestuário & categoria=Luvas" class="light">Luvas</a></li>
                                <li><a href="view-produtos.php?tipo=Vestuário & categoria=Macaquinho" class="light">Macaquinhos</a></li>
                                <li><a href="view-produtos.php?tipo=Vestuário & categoria=Manguito" class="light">Manguito</a></li>
                            </ul>
                            <div class="line-vest"></div>
                            <ul class="vest-dropdown">
                                <li><a href="view-produtos.php?tipo=Vestuário & categoria=Mochila hidratação" class="light">Mochila hidratação</a></li>
                                <li><a href="view-produtos.php?tipo=Vestuário & categoria=Meias" class="light">Meias</a></li>
                                <li><a href="view-produtos.php?tipo=Vestuário & categoria=Pernito" class="light">Pernito</a></li>
                            </ul>
                            <div class="line-vest"></div>
                            <ul class="vest-dropdown">
                                <li><a href="view-produtos.php?tipo=Vestuário & categoria=Sapatilhas" class="light">Sapatilhas</a></li>
                                <li><a href="view-produtos.php?tipo=Vestuário & categoria=Segunda pele" class="light">Segunda pele</a></li>
                                <li><a href="view-produtos.php?tipo=Vestuário & categoria=Shorts" class="light">Shorts</a></li>
                            </ul>
                        </ul> 
                    </li>
                    <li>
                        <div class="nome-categoria">
                            <a href="view-produtos.php?tipo=Ferramentas">Ferramentas</a>
                            <i class="fa-solid fa-angle-right" id="seta-fer" onclick="fer_dropdown()"></i>
                        </div>
                        <ul class="container-fer-dropdown" id="fer">
                            <ul class="fer-dropdown">
                                <li><a href="view-produtos.php?tipo=Ferramentas & categoria=Alicate de corte cabo de aço" class="light">Alicate de corte cabo de aço</a></li>
                                <li><a href="view-produtos.php?tipo=Ferramentas & categoria=Canivete" class="light">Canivete</a></li>
                                <li><a href="view-produtos.php?tipo=Ferramentas & categoria=Chave de corretne" class="light">Chave de corrente</a></li>
                            </ul>
                            <div class="line-fer"></div>
                            <ul class="fer-dropdown">
                                <li><a href="view-produtos.php?tipo=Ferramentas & categoria=Chave de pedal" class="light">Chave de pedal</a></li>
                                <li><a href="view-produtos.php?tipo=Ferramentas & categoria=Chava de raio" class="light">Chave de raio</a></li>
                                <li><a href="view-produtos.php?tipo=Ferramentas & categoria=Espátula" class="light">Espátula</a></li>
                            </ul>
                            <div class="line-fer"></div>
                            <ul class="fer-dropdown">
                                <li><a href="view-produtos.php?tipo=Ferramentas & categoria=Extrator cassete" class="light">Extrator cassete</a></li>
                                <li><a href="view-produtos.php?tipo=Ferramentas & categoria=Extrator mov. central" class="light">Extrator mov. central</a></li>
                                <li><a href="view-produtos.php?tipo=Ferramentas & categoria=Extrator pedivela" class="light">Extrator pedivela</a></li>
                            </ul>
                        </ul>
                    </li>
                    <li>
                        <div class="nome-categoria">
                            <a href="view-produtos.php?tipo=COMPONENTES">COMPONENTES</a>
                            <i class="fa-solid fa-angle-right" id="seta-comp" onclick="comp_dropdown()"></i>
                        </div>
                        <ul class="container-comp-dropdown" id="comp">
                            <ul class="comp-dropdown">
                                <li><a href="view-produtos.php?tipo=COMPONENTES & categoria=Abracadeiras" class="light">Abraçadeiras</a></li>
                                <li><a href="view-produtos.php?tipo=COMPONENTES & categoria=Aros" class="light">Aros</a></li>
                                <li><a href="view-produtos.php?tipo=COMPONENTES & categoria=Blocangens" class="light">Blocagens</a></li>
                                <li><a href="view-produtos.php?tipo=COMPONENTES & categoria=Caixa direcao" class="light">Caixa direção</a></li>
                                <li><a href="view-produtos.php?tipo=COMPONENTES & categoria=Cabo aço" class="light">Cabo aço</a></li>
                            </ul>
                            <div class="line-comp"></div>
                            <ul class="comp-dropdown">
                                <li><a href="view-produtos.php?tipo=COMPONENTES & categoria=Cambio dianteiro" class="light">Cambio dianteiro</a></li>
                                <li><a href="view-produtos.php?tipo=COMPONENTES & categoria=Cambio traseiro" class="light">Cambio traseiro</a></li>
                                <li><a href="view-produtos.php?tipo=COMPONENTES & categoria=Canotes" class="light">Canotes</a></li>
                                <li><a href="view-produtos.php?tipo=COMPONENTES & categoria=Cassete" class="light">Cassete</a></li>
                                <li><a href="view-produtos.php?tipo=COMPONENTES & categoria=Conduites" class="light">Conduites</a></li>
                            </ul>
                            <div class="line-comp"></div>
                            <ul class="comp-dropdown">
                                <li><a href="view-produtos.php?tipo=COMPONENTES & categoria=Coroas" class="light">Coroas</a></li>
                                <li><a href="view-produtos.php?tipo=COMPONENTES & categoria=Correntes" class="light">Corrente</a></li>
                                <li><a href="view-produtos.php?tipo=COMPONENTES & categoria=Cubos" class="light">Cubos</a></li>
                                <li><a href="view-produtos.php?tipo=COMPONENTES & categoria=Ezy fire" class="light">Ezy fire</a></li>
                                <li><a href="view-produtos.php?tipo=COMPONENTES & categoria=Fita guidão" class="light">Fita guidão</a></li>
                            </ul>
                            <div class="line-comp"></div>
                            <ul class="comp-dropdown">
                                <li><a href="view-produtos.php?tipo=COMPONENTES & categoria=Garfo" class="light">Garfo</a></li>
                                <li><a href="view-produtos.php?tipo=COMPONENTES & categoria=Gancheira freios" class="light">Gancheira freios</a></li>
                                <li><a href="view-produtos.php?tipo=COMPONENTES & categoria=Guidão" class="light">Guidão</a></li>
                                <li><a href="view-produtos.php?tipo=COMPONENTES & categoria=Manetes" class="light">Manetes</a></li>
                            </ul>
                            <div class="line-comp"></div>
                            <ul class="comp-dropdown">
                                <li><a href="view-produtos.php?tipo=COMPONENTES & categoria=Moviento central" class="light">Movimento central</a></li>
                                <li><a href="view-produtos.php?tipo=COMPONENTES & categoria=Niples" class="light">Niples</a></li>
                                <li><a href="view-produtos.php?tipo=COMPONENTES & categoria=Pedivelas" class="light">Pedivelas </a></li>
                                <li><a href="view-produtos.php?tipo=COMPONENTES & categoria=Rap fire" class="light">Rap fire</a></li>
                            </ul>
                            <div class="line-comp"></div>
                            <ul class="comp-dropdown">
                                <li><a href="view-produtos.php?tipo=COMPONENTES & categoria=Raios" class="light">Raios</a></li>
                                <li><a href="view-produtos.php?tipo=COMPONENTES & categoria=Rolamentos" class="light">Rolamentos</a></li>
                                <li><a href="view-produtos.php?tipo=COMPONENTES & categoria=SELIM" class="light">Selim</a></li>
                                <li><a href="view-produtos.php?tipo=COMPONENTES & categoria=Suspensão" class="light">Suspensão</a></li>
                            </ul>
                        </ul>
                    </li>
                    <li class="for-icon-resp">
                        <div class="nome-categoria">
                            <a href="view-produtos.php?tipo=Suplementos">Suplementos</a>
                            <i class="fa-solid fa-angle-right" id="seta-sup" onclick="sup_dropdown()"></i>
                        </div>
                        <ul class="sup-dropdown" id="sup">
                            <li><a href="view-produtos.php?tipo=Suplementos & categoria=Creatina" class="light">Creatina</a></li>
                            <li><a href="view-produtos.php?tipo=Suplementos & categoria=Pré treino" class="light">Pré treino</a></li>
                            <li><a href="view-produtos.php?tipo=Suplementos & categoria=Sache carbom" class="light">Sachê carbom</a></li>
                        </ul>
                    </li>
                    <div class="icon-resp">
                        <a href=""><i class="fa-solid fa-user resp"></i></a>
                        <a href="#"><i class="fa-solid fa-heart resp"></i></a>            
                    </div>
                </ul>
            </nav>
        </header>
        <div class="space"></div>
        <script src="assets/js/mobile-menu.js"></script>
    </body>
</html>