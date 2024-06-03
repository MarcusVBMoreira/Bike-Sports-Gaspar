<?php

define("API_BASE_URL","http://localhost/bike-sports-gaspar/mp_teste/api"); //LOCALHOST CONFIG FOR API PATH


function send_request($route, $method, array $variables = []){

    $client = curl_init();

    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

    $url = API_BASE_URL;

    if($method == 'GET'){
        $url .= "$route"; 
        if(!empty($variables)){
            $url .= "?" . http_build_query($variables);
        }
    }else if($method == 'POST'){
        curl_setopt($client, CURLOPT_POST, true);
        curl_setopt($client, CURLOPT_POSTFIELDS, $variables);
    }else{
        echo "APP: Método não reconhecido: " . $method;
    }

    curl_setopt($client, CURLOPT_URL, $url);
    
    $response = curl_exec($client);
    curl_close($client);
    
    return json_decode($response, true);
}