<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <!-- !RESET CSS! -->
        <link rel="stylesheet" href="assets/css/reset.css">
        <!-- Links CSS -->
        <link rel="stylesheet" href="assets/css/padrao.css">
        <link rel="stylesheet" href="assets/css/cadastro-produto.css">
        <link rel="stylesheet" href="assets/css/administracao.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <!-- !Favicon! -->
        <link rel="shortcut icon" alt="logo DKS" href="assets/img/logoBSG-branco-menor.ico" type="image/x-icon">
        <title>Sport Gaspar</title>
    </head>
    <body>
        <div class="container">
            <img class="logo" src="assets/img/logoBSG-branco-menor.png" alt="">
            <div class="card-cadastro">
                <div class="ttl">
                    <h1>Cadastrar um produto</h1>
                </div>
                <form class="form" id="form_cadastro_produto">
                    <div class="item_forms">
                        <label for="nome">Nome do produto:</label>
                        <input type="text" id="nome" name="nome" placeholder="Digite o nome/título do produto">
                    </div>
                    <div class="item_forms">
                        <label for="descricao">Descrição do produto:</label>
                        <textarea type="text" id="descricao" name="descricao" rows="10"></textarea>
                    </div>
                    <div class="item_forms">
                        <label for="especificacoes">Especificações do produto:</label>
                        <input type="text" id="especificacoes" name="especificacoes" placeholder="Digite as especificações do produto">
                    </div>
                    <div class="item_forms">
                        <label for="valor_a_vista">Valor a vista (Formato: 999.99)</label>
                        <input type="text" id="valor_a_vista" name="valor" placeholder="Digite o valor do produto a vista">
                    </div>
                    <div class="item_forms">
                        <label for="valor_parcelado">Digite o valor do produto parcelado (Formato: 999.99)</label>
                        <input type="text" id="valor_parcelado" name="valor_parcelado" placeholder="Valor parcelado">
                    </div>
                    <div class="item_forms">
                    <label for="categoria">Categoria:</label>
    <select id="categoria" name="categoria">
        <option value="" id="default" class="default active">Selecione a categoria de produto</option>
        <option value="BICICLETAS">Bicicletas</option>
        <option value="ACESSORIOS">Acessórios</option>
        <option value="VESTUARIO">Vestuário</option>
        <option value="FERRAMENTAS">Ferramentas</option>
        <option value="COMPONENTES">Componentes</option>
        <option value="SUPLEMENTOS">Suplementos</option>
    </select>
                    </div>
                    <div class="item_forms">
                        
    <label for="tipo">Tipo do produto:</label>
    <select id="tipo" name="tipo">
        <option value="" id="default" class="default active">Selecione primeiro a categoria do produto</option>
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
                        <input type="text" id="peso" name="peso" placeholder="Digite o preso do produto em gramas">
                    </div>
                    <div class="item_forms">
                        <label for="altura">Altura do produto</label>
                        <input type="text" id="altura" name="altura" placeholder="Digite a altura do produto em Metros">
                    </div>
                    <div class="item_forms">
                        <label for="largura">Largura do produto</label>
                        <input type="text" id="largura" name="largura" placeholder="Digite a largura do produto em Metros">
                    </div>
                    <div class="item_forms">
                        <label for="comprimento">Comprimento do produto</label>
                        <input type="text" id="comprimento" name="comprimento" placeholder="Digite o comprimento do produto em Metros">
                    </div>
                    <!-- <div class="item_forms">
                        <label for="qnt_cores">Quantidade de cores do produto</label>
                        <select id="qnt_cores" class="qnt_cores">
                            <option value="">Selecione a quantidade de cores do produto</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div> -->
            
                    <!-- !COR1 -->
                    <div id="container_cor1" class="container_cor1">
                        <h1>COR 1</h1>
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
                            <label for="quantidade">Quantidade de produtos:</label>
                            <input type="number" name="quantidade">
                        </div>
                        <div class="item_forms">
                            <label for="tamanho_cor1">Tamanho do produto:</label>
                            <select id="tamanho_cor1" name="tamanho_cor1">
                                <option value="">Selecione o tamanho do produto</option>
                                <option value="Único">Único</option>
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
                    </div>
                    <div class="div_img1" id="div_img1">
                        <div class="item_forms">
                            <label for="img1" id="label_img1_opt1" class="label_img1_opt1">Imagem 1</label>
                            <label for="img1" id="label_img1_opt2" class="label_img1_opt2">Imagem 1 da cor1 do produto</label>
                            <input type="file" name="img1" id="img1">
                        </div>
                    </div>

                    <!-- !COR2 -->
                    <div id="container_cor2" class="container_cor2">
                        <h1>COR 2</h1>
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
                                <option value="Único">Único</option>
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
                    </div>
                    <div class="div_img2 active" id="div_img2">
                        <div class="item_forms">
                            <label for="img2" id="label_img2_opt1" class="label_img2_opt1">Imagem 2</label>
                            <label for="img2" id="label_img2_opt2" class="label_img2_opt2">Imagem 2 da cor2 do produto</label>
                            <input type="file" name="img2" id="img2">
                        </div> 
                    </div>

                    <!-- !COR3 -->
                    <div id="container_cor3" class="container_cor3">
                        <h1>COR 3</h1>
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
                                <option value="Único">Único</option>
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
                    </div>
                    <div class="div_img3 active" id="div_img3">
                        <div class="item_forms">
                            <label for="img3" id="label_img3_opt1" class="label_img4_opt1">Imagem 3</label>
                            <label for="img3" id="label_img3_opt2" class="label_img4_opt2">Imagem 3 da cor3 do produto</label>
                            <input type="file" name="img3" id="img3">
                        </div>  
                    </div>

                    <!-- !COR4 -->
                    <div id="container_cor4" class="container_cor4">
                        <h1>COR 4</h1>
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
                                <option value="Único">Único</option>
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
                    </div>
                    <div class="div_img4 active" id="div_img4">
                        <div class="item_forms">
                            <label for="img4" id="label_img4_opt1" class="label_img4_opt1">Imagem 4</label>
                            <label for="img4" id="label_img4_opt2" class="label_img4_opt2">Imagem 4 da cor4 do produto</label>
                            <input type="file" name="img4" id="img4">
                        </div>
                    </div>
                    <button type="submit" class="btn_cadastrar">Cadastrar</button>
                </form>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
        <script src="assets/js/cadastro-produto.js"></script>
        <script>
            const categorias = {
            "BICICLETAS": [
                {value: "Aro 29", text: "Aro 29"},
                {value: "Aro 26", text: "Aro 26"},
                {value: "Aro 24", text: "Aro 24"},
                {value: "Aro 20", text: "Aro 20"},
                {value: "Aro 16", text: "Aro 16"},
                {value: "Aro 12", text: "Aro 12"},
                {value: "Bicicletinha de equilíbrio", text: "Bicicletinha de equilíbrio"}
            ],
            "ACESSORIOS": [
                {value: "Adesivos", text: "Adesivos"},
                {value: "Bar end", text: "Bar end"},
                {value: "Bomba de ar", text: "Bomba de ar"},
                {value: "Bolsa", text: "Bolsa"},
                {value: "Buzinas", text: "Buzinas"},
                {value: "Cadeado", text: "Cadeado"},
                {value: "Cadeirinhas", text: "Cadeirinhas"},
                {value: "Câmeras", text: "Câmeras"},
                {value: "Capacetes", text: "Capacetes"},
                {value: "Caramanhola", text: "Caramanhola"},
                {value: "Co2", text: "Co2"},
                {value: "Cestos", text: "Cestos"},
                {value: "Descanso", text: "Descanso"},
                {value: "Farol", text: "Farol"},
                {value: "Lanterna", text: "Lanterna"},
                {value: "Líquido tubeless", text: "Líquido tubeless"},
                {value: "Óculos", text: "Óculos"},
                {value: "Paralamas", text: "Paralamas"},
                {value: "Pneus", text: "Pneus"},
                {value: "Porta celular", text: "Porta celular"},
                {value: "Remendos", text: "Remendos"},
                {value: "Retrovisor", text: "Retrovisor"},
                {value: "Roda lateral", text: "Roda lateral"},
                {value: "Suporte caramanhola", text: "Suporte caramanhola"},
                {value: "Suporte ciclo computador", text: "Suporte ciclo computador"},
                {value: "Suporte de farol", text: "Suporte de farol"},
                {value: "Suporte para bike", text: "Suporte para bike"},
                {value: "Suporte para carro", text: "Suporte para carro"},
                {value: "Válvula presta", text: "Válvula presta"}
            ],
            "VESTUARIO": [
                {value: "Bala clava", text: "Bala clava"},
                {value: "Bota", text: "Bota"},
                {value: "Bretelles", text: "Bretelles"},
                {value: "Camisa", text: "Camisa"},
                {value: "Luvas", text: "Luvas"},
                {value: "Macaquinho", text: "Macaquinho"},
                {value: "Manguito", text: "Manguito"},
                {value: "Mochila hidratação", text: "Mochila hidratação"},
                {value: "Meias", text: "Meias"},
                {value: "Pernito", text: "Pernito"},
                {value: "Sapatilhas", text: "Sapatilhas"},
                {value: "Segunda pele", text: "Segunda pele"},
                {value: "Shorts", text: "Shorts"}
            ],
            "FERRAMENTAS": [
                {value: "Alicate de corte cabo de aço", text: "Alicate de corte cabo de aço"},
                {value: "Canivete", text: "Canivete"},
                {value: "Chave de corrente", text: "Chave de corrente"},
                {value: "Chave de pedal", text: "Chave de pedal"},
                {value: "Chave de raio", text: "Chave de raio"},
                {value: "Espátula", text: "Espátula"},
                {value: "Extrator cassete", text: "Extrator cassete"},
                {value: "Extrator mov. central", text: "Extrator mov. central"},
                {value: "Extrator pedivela", text: "Extrator pedivela"}
            ],
            "COMPONENTES": [
                {value: "Abraçadeiras", text: "Abraçadeiras"},
                {value: "Aros", text: "Aros"},
                {value: "Blocagens", text: "Blocagens"},
                {value: "Caixa direção", text: "Caixa direção"},
                {value: "Cabo aço", text: "Cabo aço"},
                {value: "Câmbio dianteiro", text: "Câmbio dianteiro"},
                {value: "Câmbio traseiro", text: "Câmbio traseiro"},
                {value: "Canotes", text: "Canotes"},
                {value: "Cassete", text: "Cassete"},
                {value: "Conduítes", text: "Conduítes"},
                {value: "Coroas", text: "Coroas"},
                {value: "Correntes", text: "Correntes"},
                {value: "Cubos", text: "Cubos"},
                {value: "EZY Fire", text: "EZY Fire"},
                {value: "Fita guidão", text: "Fita guidão"},
                {value: "Garfo", text: "Garfo"},
                {value: "Gancheira freios", text: "Gancheira freios"},
                {value: "Guidão", text: "Guidão"},
                {value: "Manetes", text: "Manetes"},
                {value: "Movimento central", text: "Movimento central"},
                {value: "Niples", text: "Niples"},
                {value: "Pedivelas", text: "Pedivelas"},
                {value: "RAP Fire", text: "RAP Fire"},
                {value: "Raios", text: "Raios"},
                {value: "Rolamentos", text: "Rolamentos"},
                {value: "SLIM", text: "SLIM"},
                {value: "Suspensão", text: "Suspensão"}
            ],
            "SUPLEMENTOS": [
                {value: "Creatina", text: "Creatina"},
                {value: "Pré treino", text: "Pré treino"},
                {value: "Sachê carbo", text: "Sachê carbo"}
            ]
        };

        document.getElementById('categoria').addEventListener('change', function() {
            const tipoSelect = document.getElementById('tipo');
            const categoria = this.value;

            // Limpar as opções anteriores
            tipoSelect.innerHTML = '<option value="" id="default" class="default active">Selecione primeiro um tipo de produto</option>';

            if (categorias[categoria]) {
                categorias[categoria].forEach(function(tipo) {
                    const option = document.createElement('option');
                    option.value = tipo.value;
                    option.text = tipo.text;
                    tipoSelect.appendChild(option);
                });
            }
        });
    </script>
        </script>
    </body>
</html>