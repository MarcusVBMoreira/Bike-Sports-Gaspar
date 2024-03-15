<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <link rel="stylesheet" href="assets/css/components/login_cadastro.css">
    </head>
    <body>
        <div class="container_cadastro">
            <div class="cadastro_container">
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
                            <input type="text" placeholder="E-mail" name="nome" id="nome" class="regular">
                        </div>
                        <div class="item_forms">
                            <input type="text" placeholder="Sobrenome" name="CPF" id="CPF" class="regular">
                        </div>
                        <div class="item_forms">
                            <input type="tel" placeholder="Telefone" name="telefone" id="telefone" class="regular">
                        </div>
                        <div class="item_forms">
                            <input type="email" placeholder="E-mail" name="email" id="email" class="regular">
                        </div>
                        <div class="item_forms">
                            <input type="password" placeholder="Senha" name="senha" id="senha" class="regular">
                        </div>
                        <div class="item_forms">
                            <input type="password" placeholder="Confirmar senha" name="confirmar_senha" id="confirmar_senha" class="regular">
                        </div>
                    </div>
                    <button type="submit" class="btn_entrar bold">Cadastrar</button>
                </form>
                <div class="cadastro_login">
                    <p class="regular">Já tem cadastro? <a href="login.php" class="bold">Entrar</a></p>
                </div>
            </div>
        </div>
    </body>
</html>