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
    MercadoPagoConfig::setAccessToken($access_token);
    
    $client = new PreferenceClient();
    $preference = $client->create([
        "items"=> array(
            array(
            "title" => "Meu produto",
            "quantity" => 1,
            "unit_price" => 25
            )
        )
    ]);
    
    