<?php

    require('conecta.php');


    //! Verificando se está logado em uma sessão

    
    $img = $_FILES['imagem_produto'];

    //! Fazendo Uploud da imagem, salvando ela na pasta do site e enviando o nome para o banco de dados

    if(isset($img)){
        $extensao = strtolower(substr($img['name'], -4));
        $nome_imagem = md5(time()) . $extensao;
        $diretorio = "../upload/imagem_produtos/";

        move_uploaded_file($_FILES['imagem_produto']['tmp_name'], $diretorio.$nome_imagem);
    }
    
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

    if(isset($_POST['tamanho_P'])){
        if($_POST['tamanho_P'] == 'on'){
            $tamanho_P = '1';
        }
    else{
        if(isset($_POST['tamanho_P'])){
            $tamanho_P = '0';
        }
    }
        echo "Checkbox marcada </br>";
        echo "valor: " . $tamanho_P;
    }

?>