<?php
    require __DIR__ . '/../../inc/Request.php';
    $is_invalid = false;
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $user = Request::GetByEmailUser($_POST['user_email']);
        if(is_array($user['results'])){
            $is_invalid = true;
        }else{
            echo '<pre>';
            //VALIDAÇÃO
            foreach($_POST as $key => $value){//VERIFICA SE TODOS OS CAMPOS OBRIGATÓRIOS FORAM PREENCHIDOS
                if($key  !== "complemento"){
                    if(empty($value)){
                        die('Preencha todos os campos obrigatórios.');
                    } 
                }
            }
            
            if(!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)){
                die('Email inválido');
            }

            if(strlen($_POST['user_senha']) < 8){
                die('Senha precisa conter pelo menos oito caracteres');
            }

            if($_POST['user_senha'] !== $_POST['confirmar_senha']){
                die('Senhas precisam ser identicas');
            }

            $senha_hash = password_hash($_POST['user_senha'],PASSWORD_DEFAULT);

            $result = Request::CreateUser([
                'name' => $_POST['user_nome'] . ' ' . $_POST['user_sobrenome'],
                'email' => $_POST['user_email'],
                'phone' => $_POST['user_telefone'],
                'pwd' => $senha_hash,
                'cpf' => $_POST['user_cpf']
            ]);

            if($result['response_code'] == 201){
                header('Location: login.php');
            }
        }
    }

?>
<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <link rel="stylesheet" href="assets/css/components/cadastro.css">
    </head>
    <body>
    <div class="container_cadastro">

<div class="content-logo">
    <a href="index.php">
        <img src="assets/img/logoBSG-branco" alt="">
    </a>
</div>
<div class="content-cadastro">

    <div class="cadastro_container">
        <div id="progres"></div>
        <div class="row">
            <div class="image-space">
                <img src="assets/img/andandobike.webp" alt="">
            </div>
            <form action="processa_cadastro.php" method="POST" class="formulario-cadastro" id="forms_cadastro">
                <div class="components_forms">
                    <div class="item_forms">
                        <input type="text" placeholder="Nome completo" name="user_nome" id="nome" class="regular">
                        <span class="regular" id="span_nome">Informar seu nome</span>
                        <span class="regular" id="span_nome_errado">O nome deve ter mais de 3 letras</span>
                    </div>
                    <div class="item_forms">
                        <input type="text" placeholder="E-mail" name="user_email" id="email" class="regular">
                        <span class="regular" id="span_email">Informar seu e-mail</span>
                        <span class="regular" id="span_email_valido">Informar um e-mail valido</span>
                    </div>
                    <div class="row-input">
                        <div class="item_forms">
                            <div class="senha_">
                                <input type="password" placeholder="Senha" name="user_senha" id="senha" class="regular">
                                <i id="olho" class="fa-solid fa-eye-slash" onclick="versenha()"></i>
                            </div>
                            <span class="regular" id="span_senha">Informar sua senha</span>
                            <span class="regular" id="span_senha_valida">A senha deve ter ao menos 8 dígitos</span>
                            <span class="regular" id="span_senha_segura">A senha deve ter ao menos uma letra maiúscula uma minuscula um numero e um caracter especial   </span>
                        </div>
                        <div class="item_forms">
                            <div class="senha_">
                                <input type="password" laceholder="Confirmar senha" name="confirmar_senha" id="confirmar_senha" class="regular">
                                <i id="olhoconfirmar" class="fa-solid fa-eye-slash" onclick="verconfirmarsenha()"></i>
                            </div>
                            <span class="regular" id="span_confirmar_senha">Confirmar senha</span>
                            <span class="regular" id="span_senha_diferente">A senha não é igual</span>
                        </div>
                    </div>
                    <div class="row-input">
                        <div class="item_forms">
                            <input type="text" placeholder="Telefone" name="user_telefone" id="telefone" class="regular">
                            <span class="regular" id="span_telefone">Informar seu telefone</span>
                            <span class="regular" id="span_telefone_errado">Seu telefone deve conter o DDD mais os 9 dígitos</span>
                        </div>
                        <div class="item_forms">
                            <input type="text" placeholder="CPF" name="user_cpf" id="CPF" class="regular">
                            <span class="regular" id="span_cpf">Informar seu CPF</span>
                            <span class="regular" id="span_cpf_errado">O CPF só deve ter numeros</span>
                        </div>
                    </div>
                </div>
                <button class="btn-proximo">Cadastrar</button>
            </form>    
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
        <script src="assets/js/cadastro.js"></script>
    </body>
</html>