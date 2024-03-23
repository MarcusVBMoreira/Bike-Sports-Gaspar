<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="assets/css/components/cadastro-produto.css">
</head>
<body>
    <div class="container">
        <img class="logo" src="assets/img/logoBSG-branco-menor.png" alt="">
        <div class="card-cadastro">
            <div class="ttl">
                <h1>Cadastrar um produto</h1>
            </div>
            <form class="form">
                <div class="item_forms">
                    <label for="nome">Nome do produto:</label>
                    <input type="text" id="nome" name="nome" placeholder="Digite o nome/título do produto">
                </div>
                <div class="item_forms">
                    <label for="descricao">Descrição do produto:</label>
                    <input type="text" id="descricao" name="descricao" placeholder="Digite a descrição do produto">
                </div>
                <div class="item_forms">
                    <label for="especificacoes">Especificações do produto:</label>
                    <input type="text" id="especificacoes" name="especificacoes" placeholder="Digite as especificações do produto">
                </div>
                <div class="item_forms">
                    <label for="valor">Valor a vista</label>
                    <input type="text" id="valor" name="valor" placeholder="Digite o valor do produto a vista">
                </div>
                <div class="item_forms">
                    <label for="valor_parcelado">Digite o valor do produto parcelado</label>
                    <input type="text" id="valor_parcelado" name="valor_parcelado" placeholder="Valor parcelado">
                </div>
                <div class="item_forms">
                    <label for="tipo">Tipo de produto:</label>
                    <select id="tipo" name="tipo">
                        <option value="">Selecione o tipo de produto</option>
                        <option value="Bicicletas">Bicicletas</option>
                        <option value="Acessórios">Acessórios</option>
                        <option value="Vestuário">Vestuário</option>
                        <option value="Ferramentas">Ferramentas</option>
                        <option value="Componentes">Componentes</option>
                        <option value="Suplementos">Suplementos</option>
                    </select>
                </div>
                <div class="item_forms">
                    <label for="categoria">Tipo do produto:</label>
                    <select id="categoria" name="categoria">
                        <div class="tipo_bicicletas" id="tipo_bicicletas">
                            <option id="tipo_bicicletas" value="">Selecione a categoria dentro de Bicicleta</option>
                            <option id="tipo_bicicletas" value="Aro 29">Aro 29</option>
                            <option id="tipo_bicicletas" value="Aro 26">Aro 26</option>
                            <option id="tipo_bicicletas" value="Aro 24">Aro 24</option>
                            <option id="tipo_bicicletas" value="Aro 20">Aro 20</option>
                            <option id="tipo_bicicletas" value="Aro 16">Aro 16</option>
                            <option id="tipo_bicicletas" value="Aro 12">Aro 12</option>
                            <option id="tipo_bicicletas" value="Bicicletinha de equilíbrio">Bicicletinha de equilíbrio</option>
                        </div>
                        <div class="tipo_acessorios" id="tipo_acessorios">
                            <option id="tipo_acessorios" value="">Selecione a categoria dentro de Acessório</option>
                            <option id="tipo_acessorios" value="Adesivos">Adesivos</option>
                            <option id="tipo_acessorios" value="Bar end">Bar end</option>
                            <option id="tipo_acessorios" value="Bomda de ar">Bomda de ar</option>
                            <option id="tipo_acessorios" value="Bolsa">Bolsa</option>
                            <option id="tipo_acessorios" value="Buzinas">Buzinas</option>
                            <option id="tipo_acessorios" value="Cadeado">Cadeado</option>
                            <option id="tipo_acessorios" value="Cadeirinhas">Cadeirinhas</option>
                            <option id="tipo_acessorios" value="Câmeras">Câmeras</option>
                            <option id="tipo_acessorios" value="Capacetes">Capacetes</option>
                            <option id="tipo_acessorios" value="Caramanhola">Caramanhola</option>
                            <option id="tipo_acessorios" value="Co2">Co2</option>
                            <option id="tipo_acessorios" value="Cestos">Cestos</option>
                            <option id="tipo_acessorios" value="Descanso">Descanso</option>
                            <option id="tipo_acessorios" value="Farol">Farol</option>
                            <option id="tipo_acessorios" value="Lanterna">Lanterna</option>
                            <option id="tipo_acessorios" value="Liquido tubless">Liquido tubless</option>
                            <option id="tipo_acessorios" value="Óculos">Óculos</option>
                            <option id="tipo_acessorios" value="Paralamas">Paralamas</option>
                            <option id="tipo_acessorios" value="Pneus">Pneus</option>
                            <option id="tipo_acessorios" value="Porta celular">Porta celular</option>
                            <option id="tipo_acessorios" value="Remendos">Remendos</option>
                            <option id="tipo_acessorios" value="Retrovisor">Retrovisor</option>
                            <option id="tipo_acessorios" value="Roda lateral">Roda lateral</option>
                            <option id="tipo_acessorios" value="Suporte caramanhola">Suporte caramanhola</option>
                            <option id="tipo_acessorios" value="Suporte ciclo computador">Suporte ciclo computador</option>
                            <option id="tipo_acessorios" value="Suporte de farol">Suporte de farol</option>
                            <option id="tipo_acessorios" value="Suporte para bike">Suporte para bike</option>
                            <option id="tipo_acessorios" value="Suporte para carro">Suporte para carro</option>
                            <option id="tipo_acessorios" value="Suporte de farol">Suporte de farol</option>
                            <option id="tipo_acessorios" value="Válvula presta">Válvula presta</option>
                        </div>
                        <div class="tipo_vestuario" id="tipo_vestuario">
                            <option id="tipo_vestuario" value="">Selecione a categoria dentro de vestuario</option>
                            <option id="tipo_vestuario" value="Bala clava">Bala clava</option>
                            <option id="tipo_vestuario" value="Bota">Bota</option>
                            <option id="tipo_vestuario" value="Bretelles">Bretelles</option>
                            <option id="tipo_vestuario" value="Camisa">Camisa</option>
                            <option id="tipo_vestuario" value="Luvas">Luvas</option>
                            <option id="tipo_vestuario" value="Macaquinho">Macaquinho</option>
                            <option id="tipo_vestuario" value="Manguito">Manguito</option>
                            <option id="tipo_vestuario" value="Mochila hidratação">Mochila hidratação</option>
                            <option id="tipo_vestuario" value="Meias">Meias</option>
                            <option id="tipo_vestuario" value="Pernito">Pernito</option>
                            <option id="tipo_vestuario" value="Sapatilhas">Sapatilhas</option>
                            <option id="tipo_vestuario" value="Segunda pele">Segunda pele</option>
                            <option id="tipo_vestuario" value="Shorts">Shorts</option>
                        </div>
                        <div class="tipo_ferramentas" id="tipo_ferramentas">
                            <option id="tipo_ferramentas" value="">Selecione a categoria dentro de ferramentas</option>
                            <option id="tipo_ferramentas" value="Alicate de corte cabo de aço">Alicate de corte cabo de aço</option>
                            <option id="tipo_ferramentas" value="Canivete">Canivete</option>
                            <option id="tipo_ferramentas" value="Chave de corretne">Chave de corretne</option>
                            <option id="tipo_ferramentas" value="Chave de pedal">Chave de pedal</option>
                            <option id="tipo_ferramentas" value="Chava de raio">Chava de raio</option>
                            <option id="tipo_ferramentas" value="Espátula">Espátula</option>
                            <option id="tipo_ferramentas" value="Extrator cassete">Extrator cassete</option>
                            <option id="tipo_ferramentas" value="Extrator mov. central">Extrator mov. central</option>
                            <option id="tipo_ferramentas" value="Extrator pedivela">Extrator pedivela</option>
                        </div>
                        <div class="tipo_componentes" id="tipo_componentes">
                            <option id="tipo_componentes" value="">Selecione a categoria dentro de componente</option>
                            <option id="tipo_componentes" value="Abracadeiras">Abracadeiras</option>
                            <option id="tipo_componentes" value="Aros">Aros</option>
                            <option id="tipo_componentes" value="Blocangens">Blocangens</option>
                            <option id="tipo_componentes" value="Caixa direcao">Caixa direcao</option>
                            <option id="tipo_componentes" value="Cabo aço">Cabo aço</option>
                            <option id="tipo_componentes" value="Cambio dianteiro">Cambio dianteiro</option>
                            <option id="tipo_componentes" value="Cambio traseiro">Cambio traseiro</option>
                            <option id="tipo_componentes" value="Canotes">Canotes</option>
                            <option id="tipo_componentes" value="Cassete">Cassete</option>
                            <option id="tipo_componentes" value="Conduites">Conduites</option>
                            <option id="tipo_componentes" value="Coroas">Coroas</option>
                            <option id="tipo_componentes" value="Correntes">Correntes</option>
                            <option id="tipo_componentes"value="Cubos">Cubos</option>
                            <option id="tipo_componentes" value="Ezy fire">Ezy fire</option>
                            <option id="tipo_componentes" value="Fita guidão">Fita guidão</option>
                            <option id="tipo_componentes" value="Garfo">Garfo</option>
                            <option id="tipo_componentes" value="Gancheira freios">Gancheira freios</option>
                            <option id="tipo_componentes" value="Guidão">Guidão</option>
                            <option id="tipo_componentes" value="Manetes">Manetes</option>
                            <option id="tipo_componentes" value="Moviento central">Moviento central</option>
                            <option id="tipo_componentes" value="Niples">Niples</option>
                            <option id="tipo_componentes" value="Pedivelas">Pedivelas</option>
                            <option id="tipo_componentes" value="Rap fire">Rap fire</option>
                            <option id="tipo_componentes" value="Raios">Raios</option>
                            <option id="tipo_componentes" value="Rolamentos">Rolamentos</option>
                            <option id="tipo_componentes" value="Slim">Slim</option>
                            <option id="tipo_componentes" value="Suspensão">Suspensão</option>
                        </div>
                        <div class="tipo_suplementos" id="tipo_suplementos">
                            <option id="tipo_suplementos" value="">Selecione a categoria dentro de suplementos</option>
                            <option id="tipo_suplementos" value="Creatina">Creatina</option>
                            <option id="tipo_suplementos" value="Pré treino">Pré treino</option>
                            <option id="tipo_suplementos" value="Sache carbom">Sache carbom</option>
                        </div>                        
                    </select>
                </div>
                <div class="item_forms">
                    <label for="modelo">Modelo do produto</label>
                    <input type="text" id="modelo" name="modelo" placeholder="Digite o modelo do produto">
                </div>
                <div class="item_forms">
                    <label for="marca">Marca do produto:</label>
                    <input type="text" id="marca" name="marca" placeholder="Digite a marda do produto">
                </div>
                <div class="item_forms">
                    <label for="composicao">Composição do produto</label>
                    <input type="text" id="composicao" name="composicao" placeholder="Digite a composição do produto">
                </div>
                <div class="item_forms">
                    <label for="compativel">Compatibilidade do produto</label>
                    <input type="text" id="compativel" name="compativel" placeholder="Digite com quais outras coisas o produto é compatível">
                </div>
                <div class="item_forms">
                    <label for="peso">Peso do produto</label>
                    <input type="text" id="peso" name="peso" placeholder="Digite o preso do produto">
                </div>
                <div class="item_forms">
                    <label for="altura">Altura do produto</label>
                    <input type="text" id="altura" name="altura" placeholder="Digite a altura do produto">
                </div>
                <div class="item_forms">
                    <label for="largura">Largura do produto</label>
                    <input type="text" id="largura" name="largura" placeholder="Digite a largura do produto">
                </div>
                <div class="item_forms">
                    <label for="comprimento">Comprimento do produto</label>
                    <input type="text" id="comprimento" name="comprimento" placeholder="Digite o comprimento do produto">
                </div>
                <div class="item_forms">
                    <input type="text" id="qnt_cores" list="lista_qnt_cores" placeholder="Quantidade de cores do produto">
                    <datalist id="lista_qnt_cores">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </datalist>
                </div>
        
                <!-- !COR1 -->
                <div id="container_cor1" class="container_cor1">
                    <div class="item_forms">
                        <label for="cor1">Primeira cor do produto</label>
                        <select id="cor1" name="cor1">
                            <option value="">Selecione a cor do produto</option>
                            <option value="preto">Preto</option>
                            <option value="vermelho">Vermehlo</option>
                            <option value="azul">Azul</option>
                            <option value="laranja">Laranja</option>
                            <option value="Verde">Verde</option>
                            <option value="rosa">Rosa</option>
                            <option value="roxo">Roxo</option>
                            <option value="branco">Branco</option>
                            <option value="cinza">Cinza</option>
                        </select>
                    </div>
                    <div class="item_forms">
                        <label for="qnt_cor1">Quantidade de produtos:</label>
                        <select name="qnt_cor1" id="qnt_cor1">
                            <option value="">Selecione a quantidade de produtos com a primeira cor</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                            <option value="32">32</option>
                            <option value="33">33</option>
                            <option value="34">34</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                        </select>
                    </div>
                    <div class="item_forms">
                        <label for="tamanho_cor1">Tamanho do produto:</label>
                        <select id="tamanho_cor1" name="tamanho_cor1">
                            <option value="">Selecione o tamanho do produto</option>
                            <option value="unico">Único</option>
                            <option value="PMGGG">P, M, G, GG</option>
                        </select>
                    </div>
                    <div id="container_cor1_PMGGG" class="container_cor1_PMGGG">
                        <div class="item_forms">
                            <label for="qnt_cor1_P">Quantidade de produtos tamanho P</label>
                            <select name="qnt_cor1_P" id="qnt_cor1_P">
                                <option value="">Quantidade de produtos com o tamanho P da primeira cor</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                            </select>
                        </div>
                        <div class="item_forms">
                            <label for="qnt_cor1_M">Quantidade de produtos tamanho M</label>
                            <select name="qnt_cor1_M" id="qnt_cor1_M">
                                <option value="">Quantidade de produtos com o tamanho M da primeira cor</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                            </select>
                        </div>
                        <div class="item_forms">
                            <label for="qnt_cor1_G">Quantidade de produtos tamanho G</label>
                            <select name="qnt_cor1_G" id="qnt_cor1_G">
                                <option value="">Quantidade de produtos com o tamanho G da primeira cor</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                            </select>
                        </div>
                        <div class="item_forms">
                            <label for="qnt_cor1_GG">Quantidade de produtos tamanho GG</label>
                            <select name="qnt_cor1_GG" id="qnt_cor1_GG">
                                <option value="">Quantidade de produtos com o tamanho GG da primeira cor</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                            </select>
                        </div>
                    </div>
                    <div class="item_forms">
                        <label for="img1">Imagem 1 da cor1 do produto</label>
                        <input type="file" name="img1" id="img1">
                    </div>         
                </div>

                <!-- !COR2 -->
                <div id="container_cor2" class="container_cor2">
                    <div class="item_forms">
                        <label for="cor2">Segunda cor do produto</label>
                        <select id="cor2" name="cor2">
                            <option value="">Selecione a cor do produto</option>
                            <option value="preto">Preto</option>
                            <option value="vermelho">Vermehlo</option>
                            <option value="azul">Azul</option>
                            <option value="laranja">Laranja</option>
                            <option value="Verde">Verde</option>
                            <option value="rosa">Rosa</option>
                            <option value="roxo">Roxo</option>
                            <option value="branco">Branco</option>
                            <option value="cinza">Cinza</option>
                        </select>
                    </div>
                    <div class="item_forms">
                        <label for="qnt_cor2">Quantidade de produtos:</label>
                        <select name="qnt_cor2" id="qnt_cor2">
                            <option value="">Selecione a quantidade de produtos com a segunda cor</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                            <option value="32">32</option>
                            <option value="33">33</option>
                            <option value="34">34</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                        </select>
                    </div>
                    <div class="item_forms">
                        <label for="tamanho_cor2">Tamanho do produto:</label>
                        <select id="tamanho_cor2" name="tamanho_cor2">
                            <option value="">Selecione o tamanho do produto</option>
                            <option value="unico">Único</option>
                            <option value="PMGGG">P, M, G, GG</option>
                        </select>
                    </div>
                    <div id="container_cor2_PMGGG" class="container_cor2_PMGGG">
                        <div class="item_forms">
                            <label for="qnt_cor2_P">Quantidade de produtos tamanho P</label>
                            <select name="qnt_cor2_P" id="qnt_cor2_P">
                                <option value="">Quantidade de produtos com o tamanho P da segunda cor</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                            </select>
                        </div>
                        <div class="item_forms">
                            <label for="qnt_cor2_M">Quantidade de produtos tamanho M</label>
                            <select name="qnt_cor2_M" id="qnt_cor2_M">
                                <option value="">Quantidade de produtos com o tamanho M da segunda cor</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                            </select>
                        </div>
                        <div class="item_forms">
                            <label for="qnt_cor2_G">Quantidade de produtos tamanho G</label>
                            <select name="qnt_cor2_G" id="qnt_cor2_G">
                                <option value="">Quantidade de produtos com o tamanho G da segunda cor</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                            </select>
                        </div>
                        <div class="item_forms">
                            <label for="qnt_cor2_GG">Quantidade de produtos tamanho GG</label>
                            <select name="qnt_cor2_GG" id="qnt_cor2_GG">
                                <option value="">Quantidade de produtos com o tamanho GG da segunda cor</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                            </select>
                        </div>
                    </div>
                    <div class="item_forms">
                        <label for="img2">Imagem 2 da cor2 do produto</label>
                        <input type="file" name="img2" id="img2">
                    </div>         
                </div>

                <!-- !COR3 -->
                <div id="container_cor3" class="container_cor3">
                    <div class="item_forms">
                        <label for="cor3">Terceira cor do produto</label>
                        <select id="cor3" name="cor3">
                            <option value="">Selecione a cor do produto</option>
                            <option value="preto">Preto</option>
                            <option value="vermelho">Vermehlo</option>
                            <option value="azul">Azul</option>
                            <option value="laranja">Laranja</option>
                            <option value="Verde">Verde</option>
                            <option value="rosa">Rosa</option>
                            <option value="roxo">Roxo</option>
                            <option value="branco">Branco</option>
                            <option value="cinza">Cinza</option>
                        </select>
                    </div>
                    <div class="item_forms">
                        <label for="qnt_cor3">Quantidade de produtos:</label>
                        <select name="qnt_cor3" id="qnt_cor3">
                            <option value="">Selecione a quantidade de produtos com a terceira cor</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                            <option value="32">32</option>
                            <option value="33">33</option>
                            <option value="34">34</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                        </select>
                    </div>
                    <div class="item_forms">
                        <label for="tamanho_cor3">Tamanho do produto:</label>
                        <select id="tamanho_cor3" name="tamanho_cor3">
                            <option value="">Selecione o tamanho do produto</option>
                            <option value="unico">Único</option>
                            <option value="PMGGG">P, M, G, GG</option>
                        </select>
                    </div>
                    <div id="container_cor3_PMGGG" class="container_cor3_PMGGG">
                        <div class="item_forms">
                            <label for="qnt_cor3_P">Quantidade de produtos tamanho P</label>
                            <select name="qnt_cor3_P" id="qnt_cor3_P">
                                <option value="">Quantidade de produtos com o tamanho P da terceira cor</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                            </select>
                        </div>
                        <div class="item_forms">
                            <label for="qnt_cor3_M">Quantidade de produtos tamanho M</label>
                            <select name="qnt_cor3_M" id="qnt_cor3_M">
                                <option value="">Quantidade de produtos com o tamanho M da terceira cor</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                            </select>
                        </div>
                        <div class="item_forms">
                            <label for="qnt_cor3_G">Quantidade de produtos tamanho G</label>
                            <select name="qnt_cor3_G" id="qnt_cor3_G">
                                <option value="">Quantidade de produtos com o tamanho G da terceira cor</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                            </select>
                        </div>
                        <div class="item_forms">
                            <label for="qnt_cor3_GG">Quantidade de produtos tamanho GG</label>
                            <select name="qnt_cor3_GG" id="qnt_cor3_GG">
                                <option value="">Quantidade de produtos com o tamanho GG da terceira cor</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                            </select>
                        </div>
                    </div>
                    <div class="item_forms">
                        <label for="img3">Imagem 3 da cor3 do produto</label>
                        <input type="file" name="img3" id="img3">
                    </div>         
                </div>

                <!-- !COR4 -->
                <div id="container_cor4" class="container_cor4">
                    <div class="item_forms">
                        <label for="cor4">Terceira cor do produto</label>
                        <select id="cor4" name="cor4">
                            <option value="">Selecione a cor do produto</option>
                            <option value="preto">Preto</option>
                            <option value="vermelho">Vermehlo</option>
                            <option value="azul">Azul</option>
                            <option value="laranja">Laranja</option>
                            <option value="Verde">Verde</option>
                            <option value="rosa">Rosa</option>
                            <option value="roxo">Roxo</option>
                            <option value="branco">Branco</option>
                            <option value="cinza">Cinza</option>
                        </select>
                    </div>
                    <div class="item_forms">
                        <label for="qnt_cor4">Quantidade de produtos:</label>
                        <select name="qnt_cor4" id="qnt_cor4">
                            <option value="">Selecione a quantidade de produtos com a quarta cor</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                            <option value="32">32</option>
                            <option value="33">33</option>
                            <option value="34">34</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                        </select>
                    </div>
                    <div class="item_forms">
                        <label for="tamanho_cor4">Tamanho do produto:</label>
                        <select id="tamanho_cor4" name="tamanho_cor4">
                            <option value="">Selecione o tamanho do produto</option>
                            <option value="unico">Único</option>
                            <option value="PMGGG">P, M, G, GG</option>
                        </select>
                    </div>
                    <div id="container_cor4_PMGGG" class="container_cor4_PMGGG">
                        <div class="item_forms">
                            <label for="qnt_cor4_P">Quantidade de produtos tamanho P</label>
                            <select name="qnt_cor4_P" id="qnt_cor4_P">
                                <option value="">Quantidade de produtos com o tamanho P da quarta cor</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                            </select>
                        </div>
                        <div class="item_forms">
                            <label for="qnt_cor4_M">Quantidade de produtos tamanho M</label>
                            <select name="qnt_cor4_M" id="qnt_cor4_M">
                                <option value="">Quantidade de produtos com o tamanho M da quarta cor</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                            </select>
                        </div>
                        <div class="item_forms">
                            <label for="qnt_cor4_G">Quantidade de produtos tamanho G</label>
                            <select name="qnt_cor4_G" id="qnt_cor4_G">
                                <option value="">Quantidade de produtos com o tamanho G da quarta cor</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                            </select>
                        </div>
                        <div class="item_forms">
                            <label for="qnt_cor4_GG">Quantidade de produtos tamanho GG</label>
                            <select name="qnt_cor4_GG" id="qnt_cor4_GG">
                                <option value="">Quantidade de produtos com o tamanho GG da quarta cor</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                            </select>
                        </div>
                    </div>
                    <div class="item_forms">
                        <label for="img4">Imagem 4 da cor4 do produto</label>
                        <input type="file" name="img4" id="img4">
                    </div>         
                </div>
                <button type="submit" class="btn_cadastrar">Cadastrar</button>
            </form>
        </div>
    </div>
</body>
</html>