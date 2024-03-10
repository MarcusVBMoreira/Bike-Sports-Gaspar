<?php
    //*CONEXÃO COM A API*

    //*CONEXÃO DO SITE COM O BANDO DE DADOS*

    //!----------------------------------------------------------!/

    //?Conexão com o servidor
    //$servidor = "localhost";
    //$usuario = "";
    //$senha = "";
    //$banco = "bike_sport_gaspar";

    //!----------------------------------------------------------!/

    //?Coneão com maquina local
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "bike_sport_gaspar";

    //!----------------------------------------------------------!/

    $conexao = new mysqli($servidor,$usuario,$senha,$banco);

    //!----------------------------------------------------------!/

    //?Verificando de o banco foi conectado com sucesso ou não
    if(mysqli_connect_errno()){
        echo "ERRO DE CONEXÃO";
    }

?>