<?php
    require '../api/controllers/UserController.php';
    require './send_request.php';

    $res = send_request('users','getUsers','GETad');// NAO PODE TER ESPACO
    echo '<pre>';
    print_r($res);
    die();

    $userController = new UserController();
    $users = $userController->GetUsers();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Teste  Mercado - Pago</title>
</head>
<body>
    <div class=" h-100 d-flex justify-content-center align-items-center">
        <div class="center-box">
            <h1>Teste de pagamento</h1>
            <p>Nome do usuário: <strong><?php echo '<pre>'; print_r($users) ?></strong></p>
        </div>
    </div>
</body>
</html>