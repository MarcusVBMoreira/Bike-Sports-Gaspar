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
                </div>
                <form action="#" class="forms_login" id="forms_cadastro">
                    <div class="components_forms">
                        <div class="titulo_login_cadastro">
                            <h1 class="titulo">Cadastro</h1>
                        </div>
                        <div class="item_forms">
                            <input type="text" placeholder="Nome" name="" id="nome" class="regular">
                            <span class="regular" id="span_nome">Informar seu nome</span>
                        </div>
                        <div class="item_forms">
                            <input type="text" placeholder="Sobrenome" name="sobrenome" id="sobrenome" class="regular">
                            <span class="regular" id="span_sobrenome">Informar seu Sobrenome</span>
                        </div>
                        <div class="item_forms">
                            <input type="text" placeholder="Telefone" name="telefone" id="telefone" class="regular">
                            <span class="regular" id="span_telefone">Informar seu telefone</span>
                        </div>
                        <div class="item_forms">
                            <input type="text" placeholder="Data de nascimento" name="data_nascimento" id="data_nascimento" class="regular">
                            <span class="regular" id="span_data">Informar sua data de nascimento</span>
                        </div>
                        <div class="item_forms">
                            <input type="text" placeholder="E-mail" name="email" id="email" class="regular">
                            <span class="regular" id="span_email">Informar seu e-mail</span>
                            <span class="regular" id="span_email_valido">Informar um e-mail valido</span>
                        </div>
                        <div class="item_forms">
                            <div class="senha_">
                                <input type="password" placeholder="Senha" name="senha" id="senha" class="regular">
                                <i id="olho" class="fa-solid fa-eye-slash" onclick="versenha()"></i>
                            </div>
                            <span class="regular" id="span_senha">Informar sua senha</span>
                            <span class="regular" id="span_senha_valida">A senha deve ter ao menos 8 dígitos</span>
                            <span class="regular" id="span_senha_segura">A senha deve ter ao menos uma letra maiúscula uma minuscula um numero e um caracter especial   </span>
                        </div>
                        <div class="item_forms">
                            <div class="senha_">
                                <input type="password" placeholder="Confirmar senha" name="confirmar_senha" id="confirmar_senha" class="regular">
                                <i id="olhoconfirmar" class="fa-solid fa-eye-slash" onclick="verconfirmarsenha()"></i>
                            </div>
                            <span class="regular" id="span_confirmar_senha">Confirmar senha</span>
                            <span class="regular" id="span_senha_diferente">A senha não é igual</span>
                        </div>
                        <div class="titulo_login_cadastro">
                            <h1 class="titulo">Endereço</h1>
                        </div>
                        <div class="item_forms">
                            <input type="text" placeholder="CEP" name="CEP" id="CEP" class="regular">
                            <span class="regular" id="span_CEP">Informar o CEP</span>
                        </div>
                        <div class="item_forms">
                            <input type="text" placeholder="Estado" name="estado" id="estado" class="regular">
                            <span class="regular" id="span_estado">Informar o estado</span>
                        </div>
                        <div class="item_forms">
                            <input type="text" placeholder="Cidade" name="cidade" id="cidade" class="regular">
                            <span class="regular" id="span_cidade">Informar a cidade</span>
                        </div>
                        <div class="item_forms">
                            <input type="text" placeholder="Bairro" name="bairro" id="bairro" class="regular">
                            <span class="regular" id="span_bairro">Informar o bairro</span>
                        </div>
                        <div class="item_forms">
                            <input type="text" placeholder="Rua" name="rua" id="rua" class="regular">
                            <span class="regular" id="span_rua">Informar a rua</span>
                        </div>
                        <div class="item_forms">
                            <input type="text" placeholder="Número" name="numero" id="numero" class="regular">
                            <span class="regular" id="span_numero">Informar o número</span>
                        </div>
                        <div class="item_forms">
                            <input type="text" placeholder="Complemento(Opcional)" name="complemento" id="complemento" class="regular">
                        </div>
                    </div>
                    <button type="submit" class="btn_entrar bold">Cadastrar</button>
                </form>
                <div class="cadastro_login">
                    <p class="regular">Já tem cadastro? <a href="login.php" class="bold">Entrar</a></p>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
        <script src="assets/js/cadastro.js"></script>
    </body>
</html>