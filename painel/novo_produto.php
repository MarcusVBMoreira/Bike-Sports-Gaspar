<?php

    require('conecta.php');


    //! Verificando se está logado em uma sessão


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




    //! Fazendo Uploud da imagem, salvando ela na pasta do site e enviando o nome para o banco de dados

    if(isset($img)){
        $extensao = strtolower(substr($img['name'], -4));
        $nome_imagem = md5(time()) . $extensao;
        $diretorio = "../upload/imagem_produtos/";

        move_uploaded_file($_FILES['imagem_produto']['tmp_name'], $diretorio.$nome_imagem);


        //* Enviando os dados do produto
        $sql = "INSERT INTO produtos (nome, descricao, valor, categoria, qnt_estoque, tipo, modelo, cor, marca, peso, altura, largura, comprimento, especificacoes, tamanho_P, 
        tamanho_M, tamanho_G, tamanho_GG, img) 
        VALUES ('$nome', '$descricao', '$valor', '$categoria', '$qnt_estoque', '$tipo', '$modelo', '$cor', '$marca', '$peso', '$altura', '$largura', '$comprimento', 
        '$especificacoes', '$tamanho_P', '$tamanho_M', '$tamanho_G', '$tamanho_GG', '$img')";

        //* SOMENTE TESTE
        //$sql = "INSERT INTO produtos (img) VALUES ('$nome_imagem')";

        $conexao->query($sql);
        echo "Castrado com sucesso";

    }
    

?>