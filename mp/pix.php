<?php

$file = parse_ini_file('.env');
$access_token = $file['mercado_pago_access_token'];

$data = json_decode(file_get_contents('php://input'),true);
$items = array();
foreach ($data['products'] as $p) {
    $product_mp = [
        'id' => $p['id'] ?? '',
        'title' => $p['nome'] ?? '',
        'description' => $p['descricao'] ?? '',
        'picture_url' => $p['img'] ?? '',
        'category_id' => $p['categoria'] ?? '',
        'quantity' => $p['quantidade'] ?? '',
        'currency_id' => 'BRL',
        'unit_price' => $p['valor']
    ];
    array_push($items, $product_mp);
}
// $items = json_encode($items);
$payer = $data['user'];
$request_options = [
    "additional_info" => "Discount 12.00",
    "auto_return" => "approved",
    "back_urls" => [
        "success" => "http://test.com/success",
        "pending" => "http://test.com/pending",
        "failure" => "http://test.com/failure"
    ],
    "differential_pricing" => [
        "id" => 1
    ],
    "expiration_date_from" => "2022-11-17T09:37:52.000-04:00",
    "expiration_date_to" => "2024-11-17T10:37:52.000-05:00",
    "expires" => false,
    "external_reference" => "1643827245",
    "items" => 
        $items
    ,
    "marketplace" => "NONE",
    "marketplace_fee" => 0,
    "metadata" => null,
    "notification_url" => "http://notificationurl.com",
    "payer" => $payer,
    "payment_methods" => [
        "default_payment_method_id" => "",
        "installments" => 10,
        "default_installments" => 5
    ],
    "shipments" => [
        "local_pickup" => false,
        "dimensions" => "32 x 25 x 16",
        "default_shipping_method" => null,
        "free_methods" => [
            [
                "id" => null
            ]
        ],
        "cost" => 20,
        "free_shipping" => false,
        "receiver_address" => [
            "zip_code" => "72549555",
            "street_name" => "Street address test",
            "city_name" => "São Paulo",
            "state_name" => "São Paulo",
            "street_number" => 100,
            "country_name" => "Brazil"
        ]
    ]
];
    
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.mercadopago.com/checkout/preferences',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>json_encode($request_options),
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        "Authorization: Bearer $access_token"
    ),
));

$response = curl_exec($curl);

curl_close($curl);

$response = json_decode($response,true);
print_r($response);
