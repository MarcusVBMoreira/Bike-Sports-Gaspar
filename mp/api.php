<?php

$file = parse_ini_file('.env');
$access_token = $file['mercado_pago_access_token'];

$data = json_decode(file_get_contents('php://input'),true);
$items = array();
foreach ($data['products'] as $p) {
    $product_mp = [
        "id" => $p['id'] ?? '',
        "title" => $p['nome'] ?? '',
        "description" => $p['descricao'] ?? '',
        "picture_url" => $p['img'] ?? '',
        "category_id" => $p['categoria'] ?? '',
        "quantity" => $p['quantidade'] ?? '',
        "currency_id" => "BRL",
        "unit_price" => $p['valor']
    ];
    array_push($items, $product_mp);
}

