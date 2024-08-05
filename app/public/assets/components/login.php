<?php
    require __DIR__ . '/../../inc/Request.php';

    $is_invalid = false;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $result = Request::GetByEmailUser($_POST['email']);
        $user = $result['results'];
        
        if(!empty($user)){
            if(password_verify($_POST['senha'],$user['senha'])){    
                require __DIR__ . '/../../inc/config.php';
                session_start();
                $_SESSION = [
                    'nome' => $user['nome'],
                    'email' => $user['email'],
                    'telefone' => $user['telefone'],
                    'data_nascimento' => $user['data_nascimento'],
                    'CPF' => $user['CPF'],
                    'carrinho' => []
                ];
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
        <link rel="stylesheet" href="assets/css/components/login.css">
    </head>
    <body>
        <div class="container">
            <div class="content-logo">
                <a href="index.php">
                    <img src="assets/img/logoBSG-branco" alt="">
                </a>
            </div>
            <div class="content-login">
                <div class="login_container">
                    <h2>ENTRAR</h2>
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
        </div>

        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
        <script src="assets/js/login.js"></script>
    </body>
</html>