<?php
session_start();
if(in_array($_GET['id'],$_SESSION['carrinho'])){
    unset($_SESSION['carrinho'][array_search($_GET['id'],$_SESSION['carrinho'])]);
    header('Location: carrinho.php');
}else{
    die('error');
}