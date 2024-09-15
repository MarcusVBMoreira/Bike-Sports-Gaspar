<?php
    // Step 1: Require the library from your Composer vendor folder
    require_once 'vendor/autoload.php';

    use MercadoPago\Client\Common\RequestOptions;
    use MercadoPago\Client\Payment\PaymentClient;
    use MercadoPago\Client\Preference\PreferenceClient;
    use MercadoPago\Exceptions\MPApiException;
    use MercadoPago\MercadoPagoConfig;

    $file = parse_ini_file('.env');
    $access_token = $file['mercado_pago_access_token'];
    // Step 2: Set production or sandbox access token
    MercadoPagoConfig::setAccessToken($access_token);
    // Step 2.1 (optional - default is SERVER): Set your runtime enviroment from MercadoPagoConfig::RUNTIME_ENVIROMENTS
    // In case you want to test in your local machine first, set runtime enviroment to LOCAL
    MercadoPagoConfig::setRuntimeEnviroment(MercadoPagoConfig::LOCAL);
    
    // $data = $_POST;
    $data = [
        'products' => [
            ['id' => 1123,
            'nome' => 'teste',
            'img' => 'aaa',
            'quantidade' => 12,
            'valor' => 2.00]
        ],
        'user' => [
            "name" => "APRO",
            "surname" => "User",
            "email" => "testeemail@email.com",
            "phone" => array(
                "area_code" => "11",
                "number" => "4444-4444"
            ),
            "identification" => array(
                "type" => "CPF",
                "number" => "12345678909"
            ),
            "address" => array(
                "zip_code" => "06233200",
                "street_name" => "Street",
                "street_number" => "123"
            )
        ]
    ];

    $items = array();
    foreach($data['products'] as $p){
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
    $now = date("Y-m-d\TH:i:s.000P");

    $expire_hour = date('H:i:s',time() + 60*60);
    $expire_date = date("Y-m-d\T$expire_hour.000P");


    // Step 3: Initialize the API client
    $client = new PreferenceClient();

    try {

        // Step 4: Create the request array
        $request = [
            "back_urls"=>array(
                "success" => "http://test.com/success",
                "failure" => "http://test.com/failure",
                "pending" => "http://test.com/pending"
            ),
            "expiration_date_from" => $now,
            "expiration_date_to" => $expire_date,
            "expires" => true,
            "items" => $items,
            "marketplace_fee" => 0,
            "payer" => $user,
            // "additional_info" => "Discount: 12.00",
            "auto_return" => "all",
            "binary_mode" => true,
            "marketplace" => "none",
            "notification_url" => "http://notificationurl.com",
            "operation_type" => "regular_payment",
            "payment_methods" => array(
                "default_payment_method_id" => "",
                "excluded_payment_types" => array(
                    array(
                        "id" => "visa"
                    )
                ),
                "excluded_payment_methods" => array(
                    array(
                        "id" => ""
                    )
                ),
                "installments" => 5,
                "default_installments" => 1
            ),
            "shipments" => array(
                "mode" => "not_specified",
                "local_pickup" => false,
                "default_shipping_method" => null,
                "free_methods" => array(
                    array(
                        "id" => 1
                    )
                ),
                "cost" => 10,
                "free_shipping" => false,
                "dimensions" => "10x10x20,500",
                "receiver_address" => array(
                    "zip_code" => "06000000",
                    "street_number" => "123",
                    "street_name" => "Street",
                    "floor" => "12",
                    "apartment" => "120A",
                    "city_name" => "Rio de Janeiro",
                    "state_name" => "Rio de Janeiro",
                    "country_name" => "Brasil"
                )
            ),
            "statement_descriptor" => "BSG Bikes",
        ];
        

        // Step 5: Create the request options, setting X-Idempotency-Key
        $request_options = new RequestOptions();
        $request_options->setCustomHeaders(["X-Idempotency-Key: <SOME_UNIQUE_VALUE>"]);

        // Step 6: Make the request
        $payment = $client->create($request, $request_options);
        echo '<pre>';
        print_r($payment);

    // Step 7: Handle exceptions
    } catch (MPApiException $e) {
        echo "Status code: " . $e->getApiResponse()->getStatusCode() . "\n";
        echo "Content: ";
        var_dump($e->getApiResponse()->getContent());
        echo "\n";
    } catch (\Exception $e) {
        echo $e->getMessage();
    }