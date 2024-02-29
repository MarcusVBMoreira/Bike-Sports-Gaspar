<?php
    //!REQUEST DA API!

    function api_request($endpoint, $method, $variables = []){

        $client = curl_init();
    
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);// a resposta virá em string
    
        $url = API_BASE_URL;
    
        if($method == 'GET'){
            $url .= "?endpoint=$endpoint";//se for get, adicione a variavel endpoint à url  
            if(!empty($variables)){
                $url .= "&" . http_build_query($variables);//função nativa para construir a url com as variaveis
            }
        }else if($method == 'POST'){
            $variables = array_merge(['endpoint' => $endpoint], $variables);//adiciona o endpoint às variáveis, dentro da chave 'endpoint'
            curl_setopt($client, CURLOPT_POSTFIELDS, $variables);//envia as variáveis como campos do metodo POST
        }else{
            echo "APP: Método não reconhecido: " . $method;
        }
    
        curl_setopt($client, CURLOPT_URL, $url);//definindo a url para enviar a resposta
    
        $response = curl_exec($client);//envia a requisição para a api e retorna a resposta
    
        return json_decode($response, true);//true para retornar atraves de um array associativo
    }

    //!selecionando as informações do cadastro de um produto novo

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

    //header('location: ../'); //!PARA NAVEGAR PARA OUTRA PÁGINA!

?>