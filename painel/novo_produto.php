<?PHP

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
    $tamanho_P = $_POST['tamanho_P'];
    $tamanho_M = $_POST['tamanho_M'];
    $tamanho_G = $_POST['tamanho_G'];
    $tamanho_GG = $_POST['tamanho_GG'];
    $img = $_FILES['imagem_produto'];

    //?---------------------------------------------------------------------------------------------------------------?

    //! Fazendo Uploud da imagem, salvando ela na pasta do site e enviando o nome para o banco de dados

    if(isset($img)){
        $extensao = strtolower(substr($img['name'], -4));
        $nome_imagem = md5(time()) . $extensao;
        $diretorio = "../upload/imagem_produtos/";

        move_uploaded_file($_FILES['imagem_produto']['tmp_name'], $diretorio.$nome_imagem);
    }

    //?---------------------------------------------------------------------------------------------------------------?

    //! Mudando de on ou none para 0 ou 1 nas checkbox de mamanhos de produto

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


?>