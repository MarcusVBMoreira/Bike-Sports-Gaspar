<?php
    require('inc/config.php');
    require('inc/api_functions.php');
    require('inc/functions.php');

    $is_invalid = false;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $result = api_request('get_client_by_email','GET',[
            'email' => $_POST['email']
        ]);
        
        $user = $result['data']['results']['0'];

        if(!empty($user)){
            if(password_verify($_POST['senha'],$user['senha'])){
                session_start();
                $_SESSION = $user;
                header('Location: index.php');
            }else{
                $is_invalid = true;
            }
        }
    }
?>
<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <link rel="stylesheet" href="assets/css/components/login_cadastro.css">
    </head>
    <body>
        <div class="container">
            <div class="login_container">
                <div class="header_login_cadastro">
                    <a href="index.php" class="logo_login_cadastro">
                        <img src="assets/img/logoBSG-preto-menor.png" alt="logo BSG">
                    </a>
                    <div class="titulo_login_cadastro">
                        <h1 class="titulo">Login</h1>
                    </div>
                </div>
                <?php if($is_invalid): ?>
                    <p style="color: red;">Login inválido.</p>
                <?php endif; ?>
                <form method="POST" class="forms_login" id="forms_login">
                    <div class="components_forms">
                        <div class="item_forms">
                            <input type="email" value="<?= htmlspecialchars($_POST['email'] ?? "") ?>" placeholder="E-mail" name="email" id="email" class="regular">
                            <span class="regular" id="span_email">Informar seu email</span>
                            <span class="regular" id="span_email_valido">Informe um email valido</span>
                        </div>
                        <div class="item_forms">
                            <div class="senha_">
                                <input type="password" value="<?= htmlspecialchars($_POST['senha'] ?? "") ?>" placeholder="Senha" name="senha" id="senha" class="regular">
                                <i id="olho" class="fa-solid fa-eye-slash" onclick="versenha()"></i>
                            </div>
                           <span class="regular" id="span_senha">Informar sua senha</span> 
                        </div>
                    </div>
                    <button type="submit" class="btn_entrar bold">Entrar</button>
                </form>
                <div class="cadastro_login">
                    <p class="regular">Ainda não tem uma conta? <a href="cadastro.php" class="bold">Cadastre-se</a></p>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
        <script src="assets/js/login.js"></script>
    </body>
</html>