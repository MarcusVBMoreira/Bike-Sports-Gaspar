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
                            <a href="view-produtos.php?tipo=bicicleta">Bicicletas</a>
                            <i class="fa-solid fa-angle-right" id="seta-bike" onclick="bike_dropdown()"></i>
                        </div>
                        <ul class="bike-dropdown" id="bike">
                            <li><a href="view-produtos.php?categoria=aro29" class="light">ARO 29</a></li>
                            <li><a href="view-produtos.php?categoria=aro26" class="light">ARO 26</a></li>
                            <li><a href="view-produtos.php?categoria=aro24" class="light">ARO 24</a></li>
                            <li><a href="view-produtos.php?categoria=aro20" class="light">ARO 20</a></li>
                            <li><a href="view-produtos.php?categoria=aro16" class="light">ARO 16</a></li>
                            <li><a href="view-produtos.php?categoria=aro12" class="light">ARO 12</a></li>
                            <li><a href="view-produtos.php?categoria=bicicletinha_de_equilibrio" class="light">Bicicletinha de Equilíbrio</a></li>
                        </ul> 
                    </li>
                    <li>
                        <div class="nome-categoria">
                            <a href="view-produtos.php?tipo=acessorios">Acessorios</a>
                            <i class="fa-solid fa-angle-right" id="seta-ace" onclick="ace_dropdown()"></i>
                        </div>
                        <ul class="container-ace-dropdown" id="ace">
                            <ul class="ace-dropdown">
                                <li><a href="view-produtos.php?categoria=adesivos" class="light">Adesivos</a></li>
                                <li><a href="view-produtos.php?categoria=bar_end" class="light">Bar end</a></li>
                                <li><a href="view-produtos.php?categoria=bomda_de_ar" class="light">Bomba de Ar</a></li>
                                <li><a href="view-produtos.php?categoria=bolsa" class="light">Bolsa</a></li>
                                <li><a href="view-produtos.php?categoria=buzinas" class="light">Buzinas</a></li>
                            </ul>
                            <div class="line-ace"></div>
                            <ul class="ace-dropdown">
                                <li><a href="view-produtos.php?categoria=cadeado" class="light">Cadeado</a></li>
                                <li><a href="view-produtos.php?categoria=cadeirinhas" class="light">Cadeirinhas</a></li>
                                <li><a href="view-produtos.php?categoria=cameras" class="light">Câmeras</a></li>
                                <li><a href="view-produtos.php?categoria=capacetes" class="light">Capacetes</a></li>
                                <li><a href="view-produtos.php?categoria=caramanhola" class="light">Caramanhola</a></li>
                            </ul>
                            <div class="line-ace"></div>
                            <ul class="ace-dropdown">
                                <li><a href="view-produtos.php?categoria=co2" class="light">Co2</a></li>
                                <li><a href="view-produtos.php?categoria=cestos" class="light">Cestos</a></li>
                                <li><a href="view-produtos.php?categoria=descanso" class="light">Descanso</a></li>
                                <li><a href="view-produtos.php?categoria=farol" class="light">Farol</a></li>
                                <li><a href="view-produtos.php?categoria=lanterna" class="light">Lanterna</a></li>
                            </ul>
                            <div class="line-ace"></div>
                            <ul class="ace-dropdown">
                                <li><a href="view-produtos.php?categoria=liquido_tubless" class="light">Líquido tubeless</a></li>
                                <li><a href="view-produtos.php?categoria=oculos" class="light">Óculos</a></li>
                                <li><a href="view-produtos.php?categoria=paralamas" class="light">Paralamas</a></li>
                                <li><a href="view-produtos.php?categoria=pneus" class="light">Pneus</a></li>
                                <li><a href="view-produtos.php?categoria=porta_celular" class="light">Porta celular</a></li>
                            </ul>
                            <div class="line-ace"></div>
                            <ul class="ace-dropdown">
                                <li><a href="view-produtos.php?categoria=remendos" class="light">Remendos</a></li>
                                <li><a href="view-produtos.php?categoria=retrovisor" class="light">Retrovisor</a></li>
                                <li><a href="view-produtos.php?categoria=roda_lateral" class="light">Roda lateral</a></li>
                                <li><a href="view-produtos.php?categoria=suporte_caramanhola" class="light">Suporte caramanhola</a></li>
                                <li><a href="view-produtos.php?categoria=suporte_ciclo_computador" class="light">Suporte ciclo computador</a></li>
                            </ul>
                            <div class="line-ace"></div>
                            <ul class="ace-dropdown">
                                <li><a href="view-produtos.php?categoria=suporte_farol" class="light">Suporte de farol</a></li>
                                <li><a href="view-produtos.php?categoria=_suporte_para_bike" class="light">Suporte para bike</a></li>
                                <li><a href="view-produtos.php?categoria=_suporte_para_carro" class="light">Suporte para carro</a></li>
                                <li><a href="view-produtos.php?categoria=suporte_de_farol" class="light">Suporte de Farol</a></li>
                                <li><a href="view-produtos.php?categoria=valvula_presta" class="light">Válvula presta </a></li>
                            </ul>
                        </ul> 
                    </li>
                    <li>
                        <div class="nome-categoria">
                            <a href="view-produtos.php?tipo=vestuario">Vestuario</a>
                            <i class="fa-solid fa-angle-right" id="seta-vest" onclick="vest_dropdown()"></i>
                        </div>
                        <ul class="container-vest-dropdown" id="vest">
                            <ul class="vest-dropdown">
                                <li><a href="view-produtos.php?categoria=bala_clava" class="light">Bala clava</a></li>
                                <li><a href="view-produtos.php?categoria=bota" class="light">Bota</a></li>
                                <li><a href="view-produtos.php?categoria=bretelles" class="light">Bretelles</a></li>
                                <li><a href="view-produtos.php?categoria=camisa" class="light">Camisa</a></li>
                            </ul>
                            <div class="line-vest"></div>
                            <ul class="vest-dropdown">
                                <li><a href="view-produtos.php?categoria=luvas" class="light">Luvas</a></li>
                                <li><a href="view-produtos.php?categoria=macaquinho" class="light">Macaquinhos</a></li>
                                <li><a href="view-produtos.php?categoria=manguito" class="light">Manguito</a></li>
                            </ul>
                            <div class="line-vest"></div>
                            <ul class="vest-dropdown">
                                <li><a href="view-produtos.php?categoria=mochila_hidratacao" class="light">Mochila hidratação</a></li>
                                <li><a href="view-produtos.php?categoria=meias" class="light">Meias</a></li>
                                <li><a href="view-produtos.php?categoria=pernito" class="light">Pernito</a></li>
                            </ul>
                            <div class="line-vest"></div>
                            <ul class="vest-dropdown">
                                <li><a href="view-produtos.php?categoria=sapatilhas" class="light">Sapatilhas</a></li>
                                <li><a href="view-produtos.php?categoria=segunda_pele" class="light">Segunda Pele</a></li>
                                <li><a href="view-produtos.php?categoria=shorts" class="light">Shorts</a></li>
                            </ul>
                        </ul> 
                    </li>
                    <li>
                        <div class="nome-categoria">
                            <a href="view-produtos.php?tipo=ferramentas">Ferramentas</a>
                            <i class="fa-solid fa-angle-right" id="seta-fer" onclick="fer_dropdown()"></i>
                        </div>
                        <ul class="container-fer-dropdown" id="fer">
                            <ul class="fer-dropdown">
                                <li><a href="view-produtos.php?categoria=alicate" class="light">Alicate de corte cabo de aço</a></li>
                                <li><a href="view-produtos.php?categoria=canivete" class="light">Canivete</a></li>
                                <li><a href="view-produtos.php?categoria=chave_de_corretne" class="light">Chave de corrente</a></li>
                            </ul>
                            <div class="line-fer"></div>
                            <ul class="fer-dropdown">
                                <li><a href="view-produtos.php?categoria=chave_de_pedal" class="light">Chave de pedal</a></li>
                                <li><a href="view-produtos.php?categoria=chava_de_raio" class="light">Chave de Raio</a></li>
                                <li><a href="view-produtos.php?categoria=espatula" class="light">Espátula</a></li>
                            </ul>
                            <div class="line-fer"></div>
                            <ul class="fer-dropdown">
                                <li><a href="view-produtos.php?categoria=extrator_cassete" class="light">Extrator cassete</a></li>
                                <li><a href="view-produtos.php?categoria=extrator_mov" class="light">Extrator mov. Central</a></li>
                                <li><a href="view-produtos.php?categoria=extrator_pedivela" class="light">Extrator Pedivela</a></li>
                            </ul>
                        </ul>
                    </li>
                    <li>
                        <div class="nome-categoria">
                            <a href="view-produtos.php?tipo=componentes">Componentes</a>
                            <i class="fa-solid fa-angle-right" id="seta-comp" onclick="comp_dropdown()"></i>
                        </div>
                        <ul class="container-comp-dropdown" id="comp">
                            <ul class="comp-dropdown">
                                <li><a href="view-produtos.php?categoria=abracadeiras" class="light">Abraçadeiras</a></li>
                                <li><a href="view-produtos.php?categoria=aros" class="light">Aros</a></li>
                                <li><a href="view-produtos.php?categoria=blocangens" class="light">Blocagens</a></li>
                                <li><a href="view-produtos.php?categoria=caixa_direcao" class="light">Caixa direção</a></li>
                                <li><a href="view-produtos.php?categoria=cabo_aco" class="light">Cabo aço</a></li>
                            </ul>
                            <div class="line-comp"></div>
                            <ul class="comp-dropdown">
                                <li><a href="view-produtos.php?categoria=cambio_dianteiro" class="light">Cambio dianteiro</a></li>
                                <li><a href="view-produtos.php?categoria=cambio_traseiro" class="light">Cambio traseiro</a></li>
                                <li><a href="view-produtos.php?categoria=canotes" class="light">Canotes</a></li>
                                <li><a href="view-produtos.php?categoria=cassete" class="light">Cassete</a></li>
                                <li><a href="view-produtos.php?categoria=conduites" class="light">Conduites</a></li>
                            </ul>
                            <div class="line-comp"></div>
                            <ul class="comp-dropdown">
                                <li><a href="view-produtos.php?categoria=coroas" class="light">Coroas</a></li>
                                <li><a href="view-produtos.php?categoria=correntes" class="light">Corrente</a></li>
                                <li><a href="view-produtos.php?categoria=cubos" class="light">Cubos</a></li>
                                <li><a href="view-produtos.php?categoria=ezy_fire" class="light">Ezy fire</a></li>
                                <li><a href="view-produtos.php?categoria=fita_guidao" class="light">Fita guidão</a></li>
                            </ul>
                            <div class="line-comp"></div>
                            <ul class="comp-dropdown">
                                <li><a href="view-produtos.php?categoria=garfo" class="light">Garfo</a></li>
                                <li><a href="view-produtos.php?categoria=gancheira_freios" class="light">Gancheira freios</a></li>
                                <li><a href="view-produtos.php?categoria=guidao" class="light">Guidão</a></li>
                                <li><a href="view-produtos.php?categoria=manetes" class="light">Manetes</a></li>
                            </ul>
                            <div class="line-comp"></div>
                            <ul class="comp-dropdown">
                                <li><a href="view-produtos.php?categoria=moviento_central" class="light">Movimento central</a></li>
                                <li><a href="view-produtos.php?categoria=niples" class="light">Niples</a></li>
                                <li><a href="view-produtos.php?categoria=pedivelas" class="light">Pedivelas </a></li>
                                <li><a href="view-produtos.php?categoria=rap_fire" class="light">Rap fire</a></li>
                            </ul>
                            <div class="line-comp"></div>
                            <ul class="comp-dropdown">
                                <li><a href="view-produtos.php?categoria=raios" class="light">Raios</a></li>
                                <li><a href="view-produtos.php?categoria=rolamentos" class="light">Rolamentos</a></li>
                                <li><a href="view-produtos.php?categoria=slim" class="light">Selim</a></li>
                                <li><a href="view-produtos.php?categoria=suspensao" class="light">Suspensão</a></li>
                            </ul>
                        </ul>
                    </li>
                    <li>
                        <div class="nome-categoria">
                            <a href="view-produtos.php?tipo=suplementos">Suplementos</a>
                            <i class="fa-solid fa-angle-right" id="seta-sup" onclick="sup_dropdown()"></i>
                        </div>
                        <ul class="sup-dropdown" id="sup">
                            <li class="li-responsivo"><a href="view-produtos.php?categoria=suplementos" class="light">Suplementos</a></li>
                            <li><a href="view-produtos.php?categoria=creatina" class="light">Creatina</a></li>
                            <li><a href="view-produtos.php?categoria=pre_treino" class="light">Pre treino</a></li>
                            <li><a href="view-produtos.php?categoria=sache_carbom" class="light">Sachê carbom</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
        <div class="space"></div>
        <script src="assets/js/mobile-menu.js"></script>
    </body>
</html>