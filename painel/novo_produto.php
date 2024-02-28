<?php

    require('conecta.php');


    //! Verificando se está logado em uma sessão


    //$nome = $_POST['nome'];
    //$descricao = $_POST[''];
    //$valor = $_POST[''];
    //$categoria = $_POST[''];
    //$qnt_estoque = $_POST[''];
    //$tipo = $_POST[''];
    //$modelo = $_POST[''];
    //$cor = $_POST[''];
    //$marca = $_POST[''];
    //$peso = $_POST[''];
    //$altura = $_POST[''];
    //$largura = $_POST[''];
    //$comprimento = $_POST[''];
    //$especificacoes = $_POST[''];
    //$tamanho_P = $_POST[''];
    //$tamanho_M = $_POST[''];
    //$tamanho_G = $_POST[''];
    //$tamanho_GG = $_POST[''];


    $img = $_FILES['imagem_produto'];




    //! Fazendo Uploud da imagem, salvando ela na pasta do site e enviando o nome para o banco de dados

    if(isset($img)){
        $extensao = strtolower(substr($img['name'], -4));
        $nome_imagem = md5(time()) . $extensao;
        $diretorio = "../upload/imagem_produtos/";

        move_uploaded_file($_FILES['imagem_produto']['tmp_name'], $diretorio.$nome_imagem);


        //* Enviando os dados do produto
        //$sql = "INSERT INTO produtos (nome, descricao, valor, categoria, qnt_estoque, tipo, modelo, cor, marca, peso, altura, largura, comprimento, especificacoes, tamanho_P, 
        //tamanho_M, tamanho_G, tamanho_GG, img) 
        //VALUES ('$nome', '$descricao', '$valor', '$categoria', '$qnt_estoque', '$tipo', '$modelo', '$cor', '$marca', '$peso', '$altura', '$largura', '$comprimento', 
        //'$especificacoes', '$tamanho_P', '$tamanho_M', '$tamanho_G', '$tamanho_GG', '$img')";

        //* SOMENTE TESTE
        $sql = "INSERT INTO produtos (img) VALUES ('$nome_imagem')";

        $conexao->query($sql);
        echo "Castrado com sucesso";

    }
    

?>