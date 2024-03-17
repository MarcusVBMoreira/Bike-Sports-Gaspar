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
                <div class="mob-log" id="mob-lob">
                    <a href="index.php" class="logo"><img src="assets/img/logoBSG-branco-menor.png" alt="Logo Bike Sport Gaspar"></a>
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
                <ul class="nav-list-1">
                    <li><a href="#"><i class="fa-solid fa-heart"></i></a></li>
                    <li><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                    <li><a href="#"><i class="fa-solid fa-user"></i></a></li>
                </ul>
            </nav>
            <nav class="nav-2" id="nav-2">
                <ul class="nav-list-2" id="nav-list-2">
                    <div class="categorias">
                        <a href="">Bikes Magazines</a>
                    </div>
                    <li>
                        <div class="nome-categoria">
                            <a href="view-produtos.php?tipo=Bicicletas">Bicicletas</a>
                            <i class="fa-solid fa-angle-right" id="seta-bike" onclick="bike_dropdown()"></i>
                        </div>
                        <ul class="bike-dropdown" id="bike">
                            <li><a href="view-produtos.php?tipo=Bicicletas & categoria=Aro 29" class="light">ARO 29</a></li>
                            <li><a href="view-produtos.php?tipo=Bicicletas & categoria=Aro 26" class="light">ARO 26</a></li>
                            <li><a href="view-produtos.php?tipo=Bicicletas & categoria=Aro 24" class="light">ARO 24</a></li>
                            <li><a href="view-produtos.php?tipo=Bicicletas & categoria=Aro 20" class="light">ARO 20</a></li>
                            <li><a href="view-produtos.php?tipo=Bicicletas & categoria=Aro 16" class="light">ARO 16</a></li>
                            <li><a href="view-produtos.php?tipo=Bicicletas & categoria=Aro 12" class="light">ARO 12</a></li>
                            <li><a href="view-produtos.php?tipo=Bicicletas & categoria=Bicicletinha de equilíbrio" class="light">Bicicletinha de Equilíbrio</a></li>
                        </ul> 
                    </li>
                    <li>
                        <div class="nome-categoria">
                            <a href="view-produtos.php?tipo=Acessórios">Acessórios</a>
                            <i class="fa-solid fa-angle-right" id="seta-ace" onclick="ace_dropdown()"></i>
                        </div>
                        <ul class="container-ace-dropdown" id="ace">
                            <ul class="ace-dropdown">
                                <li><a href="view-produtos.php?tipo=Acessórios & categoria=Adesivos" class="light">Adesivos</a></li>
                                <li><a href="view-produtos.php?tipo=Acessórios & categoria=Bar end" class="light">Bar end</a></li>
                                <li><a href="view-produtos.php?tipo=Acessórios & categoria=Bomda de ar" class="light">Bomba de Ar</a></li>
                                <li><a href="view-produtos.php?tipo=Acessórios & categoria=Bolsa" class="light">Bolsa</a></li>
                                <li><a href="view-produtos.php?tipo=Acessórios & categoria=Buzinas" class="light">Buzinas</a></li>
                            </ul>
                            <div class="line-ace"></div>
                            <ul class="ace-dropdown">
                                <li><a href="view-produtos.php?tipo=Acessórios & categoria=Cadeado" class="light">Cadeado</a></li>
                                <li><a href="view-produtos.php?tipo=Acessórios & categoria=Cadeirinhas" class="light">Cadeirinhas</a></li>
                                <li><a href="view-produtos.php?tipo=Acessórios & categoria=Câmeras" class="light">Câmeras</a></li>
                                <li><a href="view-produtos.php?tipo=Acessórios & categoria=Capacetes" class="light">Capacetes</a></li>
                                <li><a href="view-produtos.php?tipo=Acessórios & categoria=Caramanhola" class="light">Caramanhola</a></li>
                            </ul>
                            <div class="line-ace"></div>
                            <ul class="ace-dropdown">
                                <li><a href="view-produtos.php?tipo=Acessórios & categoria=Co2" class="light">Co2</a></li>
                                <li><a href="view-produtos.php?tipo=Acessórios & categoria=Cestos" class="light">Cestos</a></li>
                                <li><a href="view-produtos.php?tipo=Acessórios & categoria=Descanso" class="light">Descanso</a></li>
                                <li><a href="view-produtos.php?tipo=Acessórios & categoria=Farol" class="light">Farol</a></li>
                                <li><a href="view-produtos.php?tipo=Acessórios & categoria=Lanterna" class="light">Lanterna</a></li>
                            </ul>
                            <div class="line-ace"></div>
                            <ul class="ace-dropdown">
                                <li><a href="view-produtos.php?tipo=Acessórios & categoria=Liquido tubless" class="light">Líquido tubeless</a></li>
                                <li><a href="view-produtos.php?tipo=Acessórios & categoria=Óculos" class="light">Óculos</a></li>
                                <li><a href="view-produtos.php?tipo=Acessórios & categoria=Paralamas" class="light">Paralamas</a></li>
                                <li><a href="view-produtos.php?tipo=Acessórios & categoria=Pneus" class="light">Pneus</a></li>
                                <li><a href="view-produtos.php?tipo=Acessórios & categoria=Porta celular" class="light">Porta celular</a></li>
                            </ul>
                            <div class="line-ace"></div>
                            <ul class="ace-dropdown">
                                <li><a href="view-produtos.php?tipo=Acessórios & categoria=Remendos" class="light">Remendos</a></li>
                                <li><a href="view-produtos.php?tipo=Acessórios & categoria=Retrovisor" class="light">Retrovisor</a></li>
                                <li><a href="view-produtos.php?tipo=Acessórios & categoria=Roda lateral" class="light">Roda lateral</a></li>
                                <li><a href="view-produtos.php?tipo=Acessórios & categoria=Suporte caramanhola" class="light">Suporte caramanhola</a></li>
                                <li><a href="view-produtos.php?tipo=Acessórios & categoria=Suporte ciclo computador" class="light">Suporte ciclo computador</a></li>
                            </ul>
                            <div class="line-ace"></div>
                            <ul class="ace-dropdown">
                                <li><a href="view-produtos.php?tipo=Acessórios & categoria=Suporte de farol" class="light">Suporte de farol</a></li>
                                <li><a href="view-produtos.php?tipo=Acessórios & categoria=Suporte para bike" class="light">Suporte para bike</a></li>
                                <li><a href="view-produtos.php?tipo=Acessórios & categoria=Suporte para carro" class="light">Suporte para carro</a></li>
                                <li><a href="view-produtos.php?tipo=Acessórios & categoria=Suporte de farol" class="light">Suporte de Farol</a></li>
                                <li><a href="view-produtos.php?tipo=Acessórios & categoria=Válvula presta" class="light">Válvula presta </a></li>
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
                            <a href="view-produtos.php?tipo=Componentes">Componentes</a>
                            <i class="fa-solid fa-angle-right" id="seta-comp" onclick="comp_dropdown()"></i>
                        </div>
                        <ul class="container-comp-dropdown" id="comp">
                            <ul class="comp-dropdown">
                                <li><a href="view-produtos.php?tipo=Componentes & categoria=Abracadeiras" class="light">Abraçadeiras</a></li>
                                <li><a href="view-produtos.php?tipo=Componentes & categoria=Aros" class="light">Aros</a></li>
                                <li><a href="view-produtos.php?tipo=Componentes & categoria=Blocangens" class="light">Blocagens</a></li>
                                <li><a href="view-produtos.php?tipo=Componentes & categoria=Caixa direcao" class="light">Caixa direção</a></li>
                                <li><a href="view-produtos.php?tipo=Componentes & categoria=Cabo aço" class="light">Cabo aço</a></li>
                            </ul>
                            <div class="line-comp"></div>
                            <ul class="comp-dropdown">
                                <li><a href="view-produtos.php?tipo=Componentes & categoria=Cambio dianteiro" class="light">Cambio dianteiro</a></li>
                                <li><a href="view-produtos.php?tipo=Componentes & categoria=Cambio traseiro" class="light">Cambio traseiro</a></li>
                                <li><a href="view-produtos.php?tipo=Componentes & categoria=Canotes" class="light">Canotes</a></li>
                                <li><a href="view-produtos.php?tipo=Componentes & categoria=Cassete" class="light">Cassete</a></li>
                                <li><a href="view-produtos.php?tipo=Componentes & categoria=Conduites" class="light">Conduites</a></li>
                            </ul>
                            <div class="line-comp"></div>
                            <ul class="comp-dropdown">
                                <li><a href="view-produtos.php?tipo=Componentes & categoria=Coroas" class="light">Coroas</a></li>
                                <li><a href="view-produtos.php?tipo=Componentes & categoria=Correntes" class="light">Corrente</a></li>
                                <li><a href="view-produtos.php?tipo=Componentes & categoria=Cubos" class="light">Cubos</a></li>
                                <li><a href="view-produtos.php?tipo=Componentes & categoria=Ezy fire" class="light">Ezy fire</a></li>
                                <li><a href="view-produtos.php?tipo=Componentes & categoria=Fita guidão" class="light">Fita guidão</a></li>
                            </ul>
                            <div class="line-comp"></div>
                            <ul class="comp-dropdown">
                                <li><a href="view-produtos.php?tipo=Componentes & categoria=Garfo" class="light">Garfo</a></li>
                                <li><a href="view-produtos.php?tipo=Componentes & categoria=Gancheira freios" class="light">Gancheira freios</a></li>
                                <li><a href="view-produtos.php?tipo=Componentes & categoria=Guidão" class="light">Guidão</a></li>
                                <li><a href="view-produtos.php?tipo=Componentes & categoria=manetes" class="light">Manetes</a></li>
                            </ul>
                            <div class="line-comp"></div>
                            <ul class="comp-dropdown">
                                <li><a href="view-produtos.php?tipo=Componentes & categoria=Moviento central" class="light">Movimento central</a></li>
                                <li><a href="view-produtos.php?tipo=Componentes & categoria=Niples" class="light">Niples</a></li>
                                <li><a href="view-produtos.php?tipo=Componentes & categoria=Pedivelas" class="light">Pedivelas </a></li>
                                <li><a href="view-produtos.php?tipo=Componentes & categoria=Rap fire" class="light">Rap fire</a></li>
                            </ul>
                            <div class="line-comp"></div>
                            <ul class="comp-dropdown">
                                <li><a href="view-produtos.php?tipo=Componentes & categoria=Raios" class="light">Raios</a></li>
                                <li><a href="view-produtos.php?tipo=Componentes & categoria=Rolamentos" class="light">Rolamentos</a></li>
                                <li><a href="view-produtos.php?tipo=Componentes & categoria=Slim" class="light">Selim</a></li>
                                <li><a href="view-produtos.php?tipo=Componentes & categoria=Suspensão" class="light">Suspensão</a></li>
                            </ul>
                        </ul>
                    </li>
                    <li>
                        <div class="nome-categoria">
                            <a href="view-produtos.php?tipo=Suplementos">Suplementos</a>
                            <i class="fa-solid fa-angle-right" id="seta-sup" onclick="sup_dropdown()"></i>
                        </div>
                        <ul class="sup-dropdown" id="sup">
                            <li class="li-responsivo"><a href="view-produtos.php?categoria=Suplementos" class="light">Suplementos</a></li>
                            <li><a href="view-produtos.php?tipo=Suplementos & categoria=Creatina" class="light">Creatina</a></li>
                            <li><a href="view-produtos.php?tipo=Suplementos & categoria=Pré treino" class="light">Pré treino</a></li>
                            <li><a href="view-produtos.php?tipo=Suplementos & categoria=Sache carbom" class="light">Sachê carbom</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
        <div class="space"></div>
        <script src="assets/js/mobile-menu.js"></script>
    </body>
</html>