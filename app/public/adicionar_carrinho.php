<?php

session_start();

if(empty($_SESSION['carrinho'])){
    $_SESSION['carrinho'] = [];
}

array_push($_SESSION['carrinho'],$_GET['id']);

header('Location: carrinho.php');