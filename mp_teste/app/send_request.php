<?php

define("API_BASE_URL","http://localhost/bike-sports-gaspar/mp_teste/api/"); //LOCALHOST CONFIG FOR API PATH


function send_request($route, $endpoint = '', $method, $variables = []){

    $client = curl_init();

    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

    $url = API_BASE_URL;

    if($method == 'GET'){
        $url .= $route . "/" . $endpoint; 
        if(!empty($variables)){
            $url .= "&" . http_build_query($variables);
        }
    }else if($method == 'POST'){
        $body = array_merge(['endpoint' => $endpoint], $variables);
        curl_setopt($client, CURLOPT_POST, true);
        curl_setopt($client, CURLOPT_POSTFIELDS, $body);
    }else{
        echo "APP: Método não reconhecido: " . $method;
    }

    curl_setopt($client, CURLOPT_URL, $url);
    
    $response = curl_exec($client);
    curl_close($client);
    
    return json_decode($response, true);
}