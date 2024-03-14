<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <link rel="stylesheet" href="assets/css/components/login_cadastro.css">
    </head>
    <body>
        <div class="container">
            <div class="login_cadastro_container">
                <div class="header_login_cadastro">
                    <div class="logo_login_cadastro">
                        <img src="assets/img/logoBSG-preto-menor.png" alt="logo BSG">
                    </div>
                    <div class="titulo_login_cadastro">
                        <h1 class="titulo">Cadastro</h1>
                    </div>
                </div>
                <form action="" class="forms_login">
                    <div class="components_forms">
                        <div class="item_forms">
                            <label for="nome" class="regular">Nome:</label>
                            <input type="text" name="nome" id="nome" class="regular">
                        </div>
                        <div class="item_forms">
                            <label for="CPF" class="regular">Senha:</label>
                            <input type="password" name="CPF" id="CPF" class="regular">
                        </div>
                        <div class="item_forms">
                            <label for="telefone" class="regular">Telefone:</label>
                            <input type="tel" name="telefone" id="telefone" class="regular">
                        </div>
                        <div class="item_forms">
                            <label for="email" class="regular">E-mail:</label>
                            <input type="email" name="email" id="email" class="regular">
                        </div>
                        <div class="item_forms">
                            <label for="senha" class="regular">Senha:</label>
                            <input type="password" name="senha" id="senha" class="regular">
                        </div>
                        <div class="item_forms">
                            <label for="confirmar_senha" class="regular">Confirmar senha:</label>
                            <input type="password" name="confirmar_senha" id="confirmar_senha" class="regular">
                        </div>
                    </div>
                    <button type="submit" class="btn_entrar bold">Cadastrar</button>
                </form>
                <div class="cadastro_login">
                    <p class="regular">Já tem cadastro? <a href="login.php" class="bold">Entrar</a></p>
                </div>
            </div>
        </div>
        <style>
            .container{
                height: 150vh;
            }
        </style>
    </body>
</html>