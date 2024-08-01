<?php

//SETTING SESSION SAFETY CONFIG
ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1);

session_set_cookie_params([
    'lifetime' => 1800,
    'domain' => 'localhost',// bsgbikes.com.br
    'path' => '/',// /app
    'secure' => true,
    'httponly' => true
]);
if(!isset($_SESSION['ultimo_id'])){//REGENERATE SESSION ID EVERY 30 MINUTES
    session_regenerate_id(true);
    $_SESSION['ultimo_id'] = time();
} else{
    $intervalo = 60 * 30;//IN SECONDS

    if(time() - $_SESSION['ultimo_id'] >= $intervalo){
        session_regenerate_id(true);
        $_SESSION['ultimo_id'] = time();
    }
}