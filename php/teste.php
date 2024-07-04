<?php
    // Step 1: Require the library from your Composer vendor folder
    require_once 'vendor/autoload.php';

    use MercadoPago\Client\Common\RequestOptions;
    use MercadoPago\Client\Payment\PaymentClient;
    use MercadoPago\Client\Preference\PreferenceClient;
    use MercadoPago\Exceptions\MPApiException;
    use MercadoPago\MercadoPagoConfig;

    // Step 2: Set production or sandbox access token
    MercadoPagoConfig::setAccessToken("TEST-5363700393572476-060316-edab4e04e075b026dd741082c78591d9-1309497727");
    // Step 2.1 (optional - default is SERVER): Set your runtime enviroment from MercadoPagoConfig::RUNTIME_ENVIROMENTS
    // In case you want to test in your local machine first, set runtime enviroment to LOCAL
    MercadoPagoConfig::setRuntimeEnviroment(MercadoPagoConfig::LOCAL);

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
            "differential_pricing" => array(
                "id" => 1,
            ),
            "expires" => false,
            "items" => array(
                array(
                    "id" => "1234",
                    "title" => "bike teste",
                    "description" => "Dummy description",
                    "picture_url" => "http://www.myapp.com/myimage.jpg",
                    "category_id" => "car_electronics",
                    "quantity" => 2,
                    "currency_id" => "BRL",
                    "unit_price" => 100
                )
            ),
            "marketplace_fee" => 0,
            "payer" => array(
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
            ),
            "additional_info" => "Discount: 12.00",
            "auto_return" => "all",
            "binary_mode" => true,
            "external_reference" => "1643827245",
            "marketplace" => "none",
            "notification_url" => "http://notificationurl.com",
            "operation_type" => "regular_payment",
            "payment_methods" => array(
                "default_payment_method_id" => "master",
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
            "shipments" >= array(
                "mode" => "custom",
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
            "statement_descriptor" => "Test Store",
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