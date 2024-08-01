<?php

session_start();

if(empty($_SESSION['carrinho'])){
    $_SESSION['carrinho'] = [];
}

if(!in_array($_GET['id'],$_SESSION['carrinho'])){
    array_push($_SESSION['carrinho'],$_GET['id']);
}
header('Location: carrinho.php');