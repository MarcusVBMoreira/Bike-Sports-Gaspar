<?php
require_once 'vendor/autoload.php';

use MercadoPago\Client\Common\RequestOptions;
use MercadoPago\Client\Preference\PreferenceClient;
use MercadoPago\Exceptions\MPApiException;
use MercadoPago\MercadoPagoConfig;

$file = parse_ini_file('.env');
$access_token = $file['mercado_pago_access_token'];

// Set production access token
MercadoPagoConfig::setAccessToken($access_token);
MercadoPagoConfig::setRuntimeEnviroment(MercadoPagoConfig::SERVER);

$data = [
    'products' => [
        ['id' => 1123,
        'nome' => 'teste',
        'img' => 'aaa',
        'quantidade' => 12,
        'valor' => 2.00]
    ],
    'user' => [
        "name" => "Miguel",
        "surname" => "User",
        "email" => "miguel2020carneiro@gmail.com"
    ]
];

$items = array();
foreach ($data['products'] as $p) {
    $product_mp = [
        "id" => $p['id'],
        "title" => $p['nome'],
        "description" => $p['descricao'] ?? '',
        "picture_url" => $p['img'],
        "category_id" => $p['categoria'] ?? '',
        "quantity" => $p['quantidade'],
        "currency_id" => "BRL",
        "unit_price" => $p['valor']
    ];
    array_push($items, $product_mp);
}

$user = $data['user'];

date_default_timezone_set('America/Sao_Paulo');
$now = date("Y-m-d\TH:i:sP");
$expire_date = date("Y-m-d\TH:i:sP", strtotime("+1 hour"));

$client = new PreferenceClient();

try {
    $request = [
        "back_urls" => [
            "success" => "http://test.com/success",
            "failure" => "http://test.com/failure",
            "pending" => "http://test.com/pending"
        ],
        "expiration_date_from" => $now,
        "expiration_date_to" => $expire_date,
        "expires" => true,
        "items" => $items,
        "payer" => [
            "name" => $user['name'],
            "surname" => $user['surname'],
            "email" => $user['email']
        ],
        "auto_return" => "all",
        "binary_mode" => true,
        "notification_url" => "http://notificationurl.com",
        "payment_methods" => [
            "excluded_payment_types" => [
                ["id" => "ticket"]
            ],
            "excluded_payment_methods" => [
                ["id" => ""]
            ],
            "installments" => 5,
            "default_installments" => 1
        ],
        "statement_descriptor" => "BSG Bikes",
    ];

    $request_options = new RequestOptions();
    $request_options->setCustomHeaders(["X-Idempotency-Key: <SOME_UNIQUE_VALUE>"]);

    $payment = $client->create($request, $request_options);
    echo '<pre>';
    print_r($payment);

} catch (MPApiException $e) {
    echo "Status code: " . $e->getApiResponse()->getStatusCode() . "\n";
    echo "Content: ";
    var_dump($e->getApiResponse()->getContent());
    echo "\n";
} catch (\Exception $e) {
    echo $e->getMessage();
}
