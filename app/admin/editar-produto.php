<?php
    require __DIR__ . '/assets/inc/Request.php';
    $id_produto = $_GET['id'];
    $produto = Request::GetById($id_produto);
    $produto = $produto['results'];

    $imgs = explode('|',$produto['imgs']);

    $dimensoes = explode('x',$produto['dimensoes']);
    $comprimento = $dimensoes[0];
    $altura = $dimensoes[1];
    $largura = $dimensoes[2];

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
                        $destino = __DIR__ . '/../public/upload/produtos/' . $file['name'];
                        if(!move_uploaded_file($file['tmp_name'],$destino)){
                            echo 'ERRO';
                        }
                    }
                }
            }
        }
        $produto = [
            'id'=>$id_produto,
            'name' => $_POST['nome'] ?? null,
            'desc' => $_POST['descricao'] ?? null,
            'val' => $_POST['valor'] ?? 0,
            'cat' => $_POST['categoria'] ?? null,
            'qtd' => $_POST['quantidade'] ?? 0,
            'col' => $_POST['cor'] ?? null,
            'tp' => $_POST['tipo'] ?? null,
            'mod' => $_POST['modelo'] ?? null,
            'brnd' => $_POST['marca'] ?? null,
            'compst' => $_POST['composicao'] ?? null,
            'comptb' => $_POST['compativel'] ?? null,
            'wght' => $_POST['peso'] ?? null,
            'dim' => $_POST['comprimento'] . 'x' . $_POST['altura'] . 'x' . $_POST['largura'],
            'spec' => $_POST['especificacoes'] ?? null,
            'video' => $_POST['video'] ?? null,
            'imgs' => $_FILES['img1']['name'] ?? ''. '|' . $_FILES['img2']['name'] ?? '' . '|' . $_FILES['img3']['name'] ?? '' . '|' . $_FILES['img4']['name'] ?? '' . '|' . $_FILES['img5']['name'] ?? '' . '|' . $_FILES['img6']['name'] ?? '' . '|' . $_FILES['img7']['name'] ?? '' . '|' . $_FILES['img8']['name'] ?? '' . '|' . $_FILES['img9']['name'] ?? '' . '|' . $_FILES['img10']['name'] ?? ''
        ];
        
        $result = Request::Update($produto);
        
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
                <h1>Editar um produto</h1>
            </div>
            <?php if($erro_upload): ?>
                <p style="color:red;text-align:center;">Erro: não foi possível enviar os arquivos.</p>
            <?php elseif($nenhum_arquivo): ?>
                <p style="color:red;text-align:center;">Não foi enviado nenhum arquivo.</p>
            <?php endif; ?>
            <form method="post" class="form" id="form_cadastro_produto" enctype="multipart/form-data">
                <div class="item_forms">
                    <label for="nome">Nome do produto:</label>
                    <input type="text" id="nome" name="nome" placeholder="Digite o nome/título do produto" value="<?= $produto['nome'] ?>">
                </div>
                <div class="item_forms">
                    <label for="descricao">Descrição do produto:</label>
                    <textarea type="text" id="descricao" name="descricao" rows="10"><?= $produto['descricao'] ?></textarea>
                </div>
                <div class="item_forms">
                    <label for="especificacoes">Especificações do produto:</label>
                    <input type="text" id="especificacoes" name="especificacoes"
                        placeholder="Digite as especificações do produto" value="<?= $produto['especificacoes'] ?>">
                </div>
                <div class="item_forms">
                    <label for="valor_a_vista">Valor a vista (Formato: 999.99)</label>
                    <input type="text" id="valor_a_vista" name="valor" placeholder="Digite o valor do produto a vista" value="<?= $produto['valor'] ?>">
                </div>
                <!-- <div class="item_forms">
                    <label for="valor_parcelado">Digite o valor do produto parcelado (Formato: 999.99)</label>
                    <input type="text" id="valor_parcelado" name="valor_parcelado" placeholder="Valor parcelado">
                </div> -->
                <div class="item_forms">
                    <label for="categoria">Tipo:</label>
                    <select id="categoria" name="categoria">
                        <option value="" id="default" class="default active">Selecione o tipo de produto</option>
                        <option value="BICICLETAS" <?php if($produto['tipo'] == 'BICICLETAS'): ?> selected <?php endif; ?>>Bicicletas</option>
                        <option value="ACESSORIOS" <?php if($produto['tipo'] == 'ACESSORIOS'): ?> selected <?php endif; ?>>Acessórios</option>
                        <option value="VESTUARIO" <?php if($produto['tipo'] == 'VESTUARIO'): ?> selected <?php endif; ?>>Vestuário</option>
                        <option value="FERRAMENTAS" <?php if($produto['tipo'] == 'FERRAMENTAS'): ?> selected <?php endif; ?>>Ferramentas</option>
                        <option value="COMPONENTES" <?php if($produto['tipo'] == 'COMPONENTES'): ?> selected <?php endif; ?>>Componentes</option>
                        <option value="SUPLEMENTOS" <?php if($produto['tipo'] == 'SUPLEMENTOS'): ?> selected <?php endif; ?>>Suplementos</option>
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
                    <input type="text" id="modelo" name="modelo" placeholder="Digite o modelo do produto" value="<?= $produto['modelo'] ?>">
                </div>
                <div class="item_forms">
                    <label for="marca">Marca do produto:</label>
                    <input type="text" id="marca" name="marca" placeholder="Digite a marda do produto" value="<?= $produto['marca'] ?>">
                </div>
                <div class="item_forms">
                    <label for="composicao">Composição do produto</label>
                    <input type="text" id="composicao" name="composicao" placeholder="Digite a composição do produto" value="<?= $produto['composicao'] ?>">
                </div>
                <div class="item_forms">
                    <label for="compativel">Compatibilidade do produto</label>
                    <input type="text" id="compativel" name="compativel"
                        placeholder="Digite com quais outras coisas o produto é compatível" value="<?= $produto['compativel'] ?>">
                </div>
                <div class="item_forms">
                    <label for="peso">Peso do produto</label>
                    <input type="text" id="peso" name="peso" placeholder="Digite o preso do produto em gramas" value="<?= $produto['peso'] ?>">
                </div>
                <div class="item_forms">
                    <label for="altura">Altura do produto</label>
                    <input type="text" id="altura" name="altura" placeholder="Digite a altura do produto em centímetros" value="<?= $altura ?>">
                </div>
                <div class="item_forms">
                    <label for="largura">Largura do produto</label>
                    <input type="text" id="largura" name="largura" placeholder="Digite a largura do produto em centímetros" value="<?= $largura ?>">
                </div>
                <div class="item_forms">
                    <label for="comprimento">Comprimento do produto</label>
                    <input type="text" id="comprimento" name="comprimento"
                        placeholder="Digite o comprimento do produto em centímetros" value="<?= $comprimento ?>">
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
                            <option value="PRETO" <?php if($produto['cor'] == 'PRETO'): ?> selected <?php endif; ?>>Preto</option>
                            <option value="VERMELHO" <?php if($produto['cor'] == 'VERMELHO'): ?> selected <?php endif; ?>>Vermelho</option>
                            <option value="AMARELO" <?php if($produto['cor'] == 'AMARELO'): ?> selected <?php endif; ?>>Amarelo</option>
                            <option value="AZUL" <?php if($produto['cor'] == 'AZUL'): ?> selected <?php endif; ?>>Azul</option>
                            <option value="LARANJA" <?php if($produto['cor'] == 'LARANJA'): ?> selected <?php endif; ?>>Laranja</option>
                            <option value="VERDE" <?php if($produto['cor'] == 'VERDE'): ?> selected <?php endif; ?>>Verde</option>
                            <option value="ROSA" <?php if($produto['cor'] == 'ROSA'): ?> selected <?php endif; ?>>Rosa</option>
                            <option value="ROXO" <?php if($produto['cor'] == 'ROXO'): ?> selected <?php endif; ?>>Roxo</option>
                            <option value="BRANCO" <?php if($produto['cor'] == 'BRANCO'): ?> selected <?php endif; ?>>Branco</option>
                            <option value="CINZA" <?php if($produto['cor'] == 'CINZA'): ?> selected <?php endif; ?>>Cinza</option>
                        </select>
                    </div>
                <!-- <input type="hidden" name="MAX_FILE_SIZE" value="1048576">
                    <div class="div_img1" id="div_img1">
                    <div class="item_forms">
                        <label for="img1" id="label_img1_opt1" class="label_img1_opt1">Imagem 1</label>
                        <input type="file" name="img1" id="img1" value="<?= $imgs[0] ?> ">
                    </div>
                </div>
                <div class="div_img2 active" id="div_img2">
                    <div class="item_forms">
                        <label for="img2" id="label_img2_opt1" class="label_img2_opt1">Imagem 2</label>
                        <input type="file" name="img2" id="img2" value="<?= $imgs[1] ?>">
                    </div>
                </div>
                <div class="div_img3 active" id="div_img3">
                    <div class="item_forms">
                        <label for="img3" id="label_img3_opt1" class="label_img4_opt1">Imagem 3</label>
                        <input type="file" name="img3" id="img3" value="<?= $imgs[2] ?>">
                    </div>
                </div>
                <div class="div_img4 active" id="div_img4">
                    <div class="item_forms">
                        <label for="img4" id="label_img4_opt1" class="label_img4_opt1">Imagem 4</label>
                        <input type="file" name="img4" id="img4" value="<?= $imgs[3] ?>">
                    </div>
                </div>
                <div class="div_img4 active" id="div_img4">
                    <div class="item_forms">
                        <label for="img5" id="label_img4_opt1" class="label_img4_opt1">Imagem 5</label>
                        <input type="file" name="img5" id="img5" value="<?= $imgs[4] ?>">
                    </div>
                </div>
                <div class="div_img4 active" id="div_img4">
                    <div class="item_forms">
                        <label for="img5" id="label_img4_opt1" class="label_img4_opt1">Imagem 6</label>
                        <input type="file" name="img6" id="img5" value="<?= $imgs[5] ?>">
                    </div>
                </div>
                <div class="div_img4 active" id="div_img4">
                    <div class="item_forms">
                        <label for="img5" id="label_img4_opt1" class="label_img4_opt1">Imagem 7</label>
                        <input type="file" name="img7" id="img5" value="<?= $imgs[6] ?>">
                    </div>
                </div>
                <div class="div_img4 active" id="div_img4">
                    <div class="item_forms">
                        <label for="img5" id="label_img4_opt1" class="label_img4_opt1">Imagem 8</label>
                        <input type="file" name="img8" id="img5" value="<?= $imgs[7] ?>">
                    </div>
                </div>
                <div class="div_img4 active" id="div_img4">
                    <div class="item_forms">
                        <label for="img5" id="label_img4_opt1" class="label_img4_opt1">Imagem 9</label>
                        <input type="file" name="img9" id="img5" value="<?= $imgs[8] ?>">
                    </div>
                </div>
                <div class="div_img4 active" id="div_img4">
                    <div class="item_forms">
                        <label for="img5" id="label_img4_opt1" class="label_img4_opt1">Imagem 10</label>
                        <input type="file" name="img10" id="img5" value="<?= $imgs[9] ?>">
                    </div>
                </div> -->
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