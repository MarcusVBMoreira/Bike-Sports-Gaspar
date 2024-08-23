<?php
    require __DIR__ . '/assets/inc/Request.php';
    $nenhum_arquivo = false;
    $erro_upload = false;
    //UPLOAD
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(empty($_FILES)){
            $erro_upload = true;
        }else{
            $erros = 0;
            foreach($_FILES as $file){
                if($file['error'] !== UPLOAD_ERR_OK){
                    $erros += 1;
                }
            }
            if($erros >= 4){
                $nenhum_arquivo = true;
            }else{
                foreach($_FILES as $file){
                    if($file['error'] == UPLOAD_ERR_OK){
                        $destino = __DIR__ . '/assets/upload/' . $file['name'];
                        if(!move_uploaded_file($file['tmp_name'],$destino)){
                            echo 'ERRO';
                        }
                    }
                }
            }
        }
        $produto = [
            'name' => $_POST['nome'] ?? '',
            'desc' => $_POST['descricao'] ?? '',
            'val' => $_POST['valor'] ?? 0,
            'cat' => $_POST['categoria'] ?? '',
            'qtd' => $_POST['quantidade'] ?? 0,
            'col' => $_POST['cor'] ?? '',
            'tp' => $_POST['tipo'] ?? '',
            'mod' => $_POST['modelo'] ?? '',
            'brnd' => $_POST['marca'] ?? '',
            'compst' => $_POST['composicao'] ?? '',
            'comptb' => $_POST['compativel'] ?? '',
            'wght' => $_POST['peso'] ?? 0,
            'dim' => $_POST['comprimento'] . 'x' . $_POST['altura'] . 'x' . $_POST['largura'],
            'spec' => $_POST['especificacoes'] ?? '',
            'i1' => $_FILES['img1']['name'] ?? '',
            'i2' => $_FILES['img2']['name'] ?? '',
            'i3' => $_FILES['img3']['name'] ?? '',
            'i4' => $_FILES['img4']['name'] ?? ''
        ];
        
        $result = Request::Create($produto);
        
    }

    
?>
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
    <title>Bike Sport Gaspar</title>
</head>

<body>
    <div class="container">
        <img class="logo" src="assets/img/logoBSG-branco-menor.png" alt="">
        <div class="card-cadastro">
            <div class="ttl">
                <h1>Cadastrar um produto</h1>
            </div>
            <?php if($erro_upload): ?>
                <p style="color:red;text-align:center;">Erro: não foi possível enviar os arquivos.</p>
            <?php elseif($nenhum_arquivo): ?>
                <p style="color:red;text-align:center;">Não foi enviado nenhum arquivo.</p>
            <?php endif; ?>
            <form method="post" class="form" id="form_cadastro_produto" enctype="multipart/form-data">
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
                    <input type="text" id="especificacoes" name="especificacoes"
                        placeholder="Digite as especificações do produto">
                </div>
                <div class="item_forms">
                    <label for="valor_a_vista">Valor a vista (Formato: 999.99)</label>
                    <input type="text" id="valor_a_vista" name="valor" placeholder="Digite o valor do produto a vista">
                </div>
                <!-- <div class="item_forms">
                    <label for="valor_parcelado">Digite o valor do produto parcelado (Formato: 999.99)</label>
                    <input type="text" id="valor_parcelado" name="valor_parcelado" placeholder="Valor parcelado">
                </div> -->
                <div class="item_forms">
                    <label for="categoria">Tipo:</label>
                    <select id="categoria" name="categoria">
                        <option value="" id="default" class="default active">Selecione o tipo de produto</option>
                        <option value="BICICLETAS">Bicicletas</option>
                        <option value="ACESSORIOS">Acessórios</option>
                        <option value="VESTUARIO">Vestuário</option>
                        <option value="FERRAMENTAS">Ferramentas</option>
                        <option value="COMPONENTES">Componentes</option>
                        <option value="SUPLEMENTOS">Suplementos</option>
                    </select>
                </div>
                <div class="item_forms">

                    <label for="tipo">Categoria do produto:</label>
                    <select id="tipo" name="tipo">
                        <option value="" id="default" class="default active">Selecione primeiro o tipo do produto
                        </option>
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
                    <input type="text" id="compativel" name="compativel"
                        placeholder="Digite com quais outras coisas o produto é compatível">
                </div>
                <div class="item_forms">
                    <label for="peso">Peso do produto</label>
                    <input type="text" id="peso" name="peso" placeholder="Digite o preso do produto em gramas">
                </div>
                <div class="item_forms">
                    <label for="altura">Altura do produto</label>
                    <input type="text" id="altura" name="altura" placeholder="Digite a altura do produto em centímetros">
                </div>
                <div class="item_forms">
                    <label for="largura">Largura do produto</label>
                    <input type="text" id="largura" name="largura" placeholder="Digite a largura do produto em centímetros">
                </div>
                <div class="item_forms">
                    <label for="comprimento">Comprimento do produto</label>
                    <input type="text" id="comprimento" name="comprimento"
                        placeholder="Digite o comprimento do produto em centímetros">
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
                    <div class="item_forms">
                        <label for="cor">Cor do produto</label>
                        <select id="cor1" name="cor">
                            <option value="">Selecione a cor do produto</option>
                            <option value="preto">Preto</option>
                            <option value="vermelho">Vermelho</option>
                            <option value="vermelho">Amarelo</option>
                            <option value="azul">Azul</option>
                            <option value="laranja">Laranja</option>
                            <option value="Verde">Verde</option>
                            <option value="rosa">Rosa</option>
                            <option value="roxo">Roxo</option>
                            <option value="branco">Branco</option>
                            <option value="cinza">Cinza</option>
                        </select>
                    </div>
                <input type="hidden" name="MAX_FILE_SIZE" value="1048576">
                    <div class="div_img1" id="div_img1">
                    <div class="item_forms">
                        <label for="img1" id="label_img1_opt1" class="label_img1_opt1">Imagem 1</label>
                        <label for="img1" id="label_img1_opt2" class="label_img1_opt2">Imagem 1 </label>
                        <input type="file" name="img1" id="img1">
                    </div>
                </div>
                <div class="div_img2 active" id="div_img2">
                    <div class="item_forms">
                        <label for="img2" id="label_img2_opt1" class="label_img2_opt1">Imagem 2</label>
                        <label for="img2" id="label_img2_opt2" class="label_img2_opt2">Imagem 2 </label>
                        <input type="file" name="img2" id="img2">
                    </div>
                </div>
                <div class="div_img3 active" id="div_img3">
                    <div class="item_forms">
                        <label for="img3" id="label_img3_opt1" class="label_img4_opt1">Imagem 3</label>
                        <label for="img3" id="label_img3_opt2" class="label_img4_opt2">Imagem 3 da cor3 do
                            produto</label>
                        <input type="file" name="img3" id="img3">
                    </div>
                </div>
                <div class="div_img4 active" id="div_img4">
                    <div class="item_forms">
                        <label for="img4" id="label_img4_opt1" class="label_img4_opt1">Imagem 4</label>
                        <label for="img4" id="label_img4_opt2" class="label_img4_opt2">Imagem 4 da cor4 do
                            produto</label>
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
                { value: "Aro 29", text: "Aro 29" },
                { value: "Aro 26", text: "Aro 26" },
                { value: "Aro 24", text: "Aro 24" },
                { value: "Aro 20", text: "Aro 20" },
                { value: "Aro 16", text: "Aro 16" },
                { value: "Aro 12", text: "Aro 12" },
                { value: "Bicicletinha de equilíbrio", text: "Bicicletinha de equilíbrio" }
            ],
            "ACESSORIOS": [
                { value: "Adesivos", text: "Adesivos" },
                { value: "Bar end", text: "Bar end" },
                { value: "Bomba de ar", text: "Bomba de ar" },
                { value: "Bolsa", text: "Bolsa" },
                { value: "Buzinas", text: "Buzinas" },
                { value: "Cadeado", text: "Cadeado" },
                { value: "Cadeirinhas", text: "Cadeirinhas" },
                { value: "Câmeras", text: "Câmeras" },
                { value: "Capacetes", text: "Capacetes" },
                { value: "Caramanhola", text: "Caramanhola" },
                { value: "Co2", text: "Co2" },
                { value: "Cestos", text: "Cestos" },
                { value: "Descanso", text: "Descanso" },
                { value: "Farol", text: "Farol" },
                { value: "Lanterna", text: "Lanterna" },
                { value: "Líquido tubeless", text: "Líquido tubeless" },
                { value: "Óculos", text: "Óculos" },
                { value: "Paralamas", text: "Paralamas" },
                { value: "Pneus", text: "Pneus" },
                { value: "Porta celular", text: "Porta celular" },
                { value: "Remendos", text: "Remendos" },
                { value: "Retrovisor", text: "Retrovisor" },
                { value: "Roda lateral", text: "Roda lateral" },
                { value: "Suporte caramanhola", text: "Suporte caramanhola" },
                { value: "Suporte ciclo computador", text: "Suporte ciclo computador" },
                { value: "Suporte de farol", text: "Suporte de farol" },
                { value: "Suporte para bike", text: "Suporte para bike" },
                { value: "Suporte para carro", text: "Suporte para carro" },
                { value: "Válvula presta", text: "Válvula presta" }
            ],
            "VESTUARIO": [
                { value: "Bala clava", text: "Bala clava" },
                { value: "Bota", text: "Bota" },
                { value: "Bretelles", text: "Bretelles" },
                { value: "Camisa", text: "Camisa" },
                { value: "Luvas", text: "Luvas" },
                { value: "Macaquinho", text: "Macaquinho" },
                { value: "Manguito", text: "Manguito" },
                { value: "Mochila hidratação", text: "Mochila hidratação" },
                { value: "Meias", text: "Meias" },
                { value: "Pernito", text: "Pernito" },
                { value: "Sapatilhas", text: "Sapatilhas" },
                { value: "Segunda pele", text: "Segunda pele" },
                { value: "Shorts", text: "Shorts" }
            ],
            "FERRAMENTAS": [
                { value: "Alicate de corte cabo de aço", text: "Alicate de corte cabo de aço" },
                { value: "Canivete", text: "Canivete" },
                { value: "Chave de corrente", text: "Chave de corrente" },
                { value: "Chave de pedal", text: "Chave de pedal" },
                { value: "Chave de raio", text: "Chave de raio" },
                { value: "Espátula", text: "Espátula" },
                { value: "Extrator cassete", text: "Extrator cassete" },
                { value: "Extrator mov. central", text: "Extrator mov. central" },
                { value: "Extrator pedivela", text: "Extrator pedivela" }
            ],
            "COMPONENTES": [
                { value: "Abraçadeiras", text: "Abraçadeiras" },
                { value: "Aros", text: "Aros" },
                { value: "Blocagens", text: "Blocagens" },
                { value: "Caixa direção", text: "Caixa direção" },
                { value: "Cabo aço", text: "Cabo aço" },
                { value: "Câmbio dianteiro", text: "Câmbio dianteiro" },
                { value: "Câmbio traseiro", text: "Câmbio traseiro" },
                { value: "Canotes", text: "Canotes" },
                { value: "Cassete", text: "Cassete" },
                { value: "Conduítes", text: "Conduítes" },
                { value: "Coroas", text: "Coroas" },
                { value: "Correntes", text: "Correntes" },
                { value: "Cubos", text: "Cubos" },
                { value: "EZY Fire", text: "EZY Fire" },
                { value: "Fita guidão", text: "Fita guidão" },
                { value: "Garfo", text: "Garfo" },
                { value: "Gancheira freios", text: "Gancheira freios" },
                { value: "Guidão", text: "Guidão" },
                { value: "Manetes", text: "Manetes" },
                { value: "Movimento central", text: "Movimento central" },
                { value: "Niples", text: "Niples" },
                { value: "Pedivelas", text: "Pedivelas" },
                { value: "Quadros", text: "Quadros" },
                { value: "RAP Fire", text: "RAP Fire" },
                { value: "Raios", text: "Raios" },
                { value: "Rolamentos", text: "Rolamentos" },
                { value: "SLIM", text: "SLIM" },
                { value: "Suspensão", text: "Suspensão" }
            ],
            "SUPLEMENTOS": [
                { value: "Creatina", text: "Creatina" },
                { value: "Pré treino", text: "Pré treino" },
                { value: "Sachê carbo", text: "Sachê carbo" }
            ]
        };

        document.getElementById('categoria').addEventListener('change', function () {
            const tipoSelect = document.getElementById('tipo');
            const categoria = this.value;

            // Limpar as opções anteriores
            tipoSelect.innerHTML = '<option value="" id="default" class="default active">Selecione primeiro um tipo de produto</option>';

            if (categorias[categoria]) {
                categorias[categoria].forEach(function (tipo) {
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