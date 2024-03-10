<?PHP
    require('conecta.php');

    //!selecionando as informações do cadastro de um produto novo

    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $valor = $_POST['valor'];
    $categoria = $_POST['categoria'];
    $qnt_estoque = $_POST['qnt_estoque'];
    $tipo = $_POST['tipo'];
    $modelo = $_POST['modelo'];
    $cor = $_POST['cor'];
    $marca = $_POST['marca'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $largura = $_POST['largura'];
    $comprimento = $_POST['comprimento'];
    $especificacoes = $_POST['especificacoes'];
    $img = $_FILES['img'];

    //?---------------------------------------------------------------------------------------------------------------?

    //! Fazendo Uploud da imagem, salvando ela na pasta do site e enviando o nome para o banco de dados

    if(isset($img)){
        $extensao = strtolower(substr($img['name'], -4));
        $nome_imagem = md5(time()) . $extensao;
        $diretorio = "../upload/imagem_produtos/";

        move_uploaded_file($_FILES['img']['tmp_name'], $diretorio.$nome_imagem);

        //* Tamanho P
        if(isset($_POST['tamanho_P'])){
            if($_POST['tamanho_P'] == 'on'){
                $tamanho_P = '1';
            }
            //echo "Checkbox marcada </br>";
            //echo "valor: " . $tamanho_P;
        }else{
            $tamanho_P = '0';
            //echo "Checkbox Não marcada </br>";
            //echo "valor: " . $tamanho_P;
        }
        //?-----------------------------------------?
        //* Tamanho M
        if(isset($_POST['tamanho_M'])){
            if($_POST['tamanho_M'] == 'on'){
                $tamanho_M = '1';
            }
            //echo "Checkbox marcada </br>";
            //echo "valor: " . $tamanho_P;
        }else{
            $tamanho_M = '0';
            //echo "Checkbox Não marcada </br>";
            //echo "valor: " . $tamanho_P;
        }
        //?-----------------------------------------?
        //* Tamanho G
        if(isset($_POST['tamanho_G'])){
            if($_POST['tamanho_G'] == 'on'){
                $tamanho_G = '1';
            }
            //echo "Checkbox marcada </br>";
            //echo "valor: " . $tamanho_P;
        }else{
            $tamanho_G = '0';
            //echo "Checkbox Não marcada </br>";
            //echo "valor: " . $tamanho_P;
        }
        //?-----------------------------------------?
        //* Tamanho GG
        if(isset($_POST['tamanho_GG'])){
            if($_POST['tamanho_GG'] == 'on'){
                $tamanho_GG = '1';
            }
            //echo "Checkbox marcada </br>";
            //echo "valor: " . $tamanho_P;
        }else{
            $tamanho_GG = '0';
            //echo "Checkbox Não marcada </br>";
            //echo "valor: " . $tamanho_P;
        }
        //?-----------------------------------------?

        $sql = "INSERT INTO produtos (nome, descricao, valor, categoria, qnt_estoque, tipo, modelo, cor, marca, peso, altura, largura, comprimento, especificacoes, tamanho_P, tamanho_M, tamanho_G, tamanho_GG, img)
        VALUES ('$nome', '$descricao', '$valor', '$categoria', '$qnt_estoque', '$tipo', '$modelo', '$cor', '$marca', '$peso', '$altura', '$largura', '$comprimento', '$especificacoes', '$tamanho_P', '$tamanho_M', '$tamanho_G', '$tamanho_GG', '$nome_imagem')";

        $conexao -> query($sql);
    }


?>