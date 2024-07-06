<html>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="assets/css/components/perfil.css">
</head>
<body>
    <div class="editar-perfil" id="abrir">
        <form method="POST" action="editar_usuario.php">
            <input name="novo_nome" type="text" value="<?= $_SESSION['nome'] ?>" placeholder="Nome">
            <input name="novo_cpf" type="text" value="<?= $_SESSION['CPF'] ?>" placeholder="CPF">
            <input name="novo_data_nascimento" type="text" value="<?= $_SESSION['data_nascimento'] ?>" placeholder="Data de nascimento">
            <input name="novo_telefone" type="text" value="<?= $_SESSION['telefone'] ?>" placeholder="Telefone">
            <input name="novo_email" type="text" value="<?= $_SESSION['email'] ?>" placeholder="Email">
            <div class="btn-salvar-sair">
                <input type="submit" value="Salvar">
                <a href="perfil.php">Cancelar</a>
            </div>
        </form>
    </div>
    <div class="container">
        <div class="row">
            <div class="ttl-perfil">
                <h1>Meu perfil:</h1>
            </div>
            <div class="colunm">
                <div class="card-favoritos">
                    <div class="ttl-fav">
                        <h1>Favoritos</h1>
                    </div>
                    <div class="container-favoritos">
                        <div class="favorito">
                            <div class="img-fav">
                                <img src="upload/produtos/3.png" alt="">
                            </div>
                            <div class="conteudo">
                                <div class="nome-fav">
                                    <p class="txt-fav bold">Cambio Dianteiro Mtb Shimano Tz500 31.8 Puxa Por Baixo 42d</p>
                                </div>
                                <div class="valor-fav">
                                    <p>[Valor]</p>
                                </div>
                            </div>
                        </div>
                        <div class="line"></div>
                        <div class="favorito">
                            <div class="img-fav">
                                <img src="upload/produtos/3.png" alt="">
                            </div>
                            <div class="conteudo">
                                <div class="nome-fav">
                                    <p class="txt-fav bold">Cambio Dianteiro Mtb Shimano Tz500 31.8 Puxa Por Baixo 42d</p>
                                </div>
                                <div class="valor-fav">
                                    <p>[Valor]</p>
                                </div>
                            </div>
                        </div>
                        <div class="line"></div>
                        <div class="favorito">
                            <div class="img-fav">
                                <img src="upload/produtos/3.png" alt="">
                            </div>
                            <div class="conteudo">
                                <div class="nome-fav">
                                    <p class="txt-fav bold">Cambio Dianteiro Mtb Shimano Tz500 31.8 Puxa Por Baixo 42d</p>
                                </div>
                                <div class="valor-fav">
                                    <p>[Valor]</p>
                                </div>
                            </div>
                        </div>
                        <div class="line"></div>
                        <div class="favorito">
                            <div class="img-fav">
                                <img src="upload/produtos/3.png" alt="">
                            </div>
                            <div class="conteudo">
                                <div class="nome-fav">
                                    <p class="txt-fav bold">Cambio Dianteiro Mtb Shimano Tz500 31.8 Puxa Por Baixo 42d</p>
                                </div>
                                <div class="valor-fav">
                                    <p>[Valor]</p>
                                </div>
                            </div>
                        </div>
                        <div class="line"></div>
                        <div class="favorito">
                            <div class="img-fav">
                                <img src="upload/produtos/3.png" alt="">
                            </div>
                            <div class="conteudo">
                                <div class="nome-fav">
                                    <p class="txt-fav bold">Cambio Dianteiro Mtb Shimano Tz500 31.8 Puxa Por Baixo 42d</p>
                                </div>
                                <div class="valor-fav">
                                    <p>[Valor]</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-dados">
                <h1>Meus dados</h1>
                <div class="dados">
                    <div class="dado">
                        <div class="foto">
                            <div class="img-side">

                                <label for="addFoto"><i class="fa-solid fa-user-plus"></i></label>
                            </div>
                            <div class="add-img">
                                <input type="file" name="" id="addFoto">
                                <label for="addFoto">Adicionar foto</label>
                            </div>
                        </div>
                        <h3 class="bold">Nome:</h3>
                        <p class="inter-regular"><?= $_SESSION['nome'] ?></p>
                        <h3 class="bold">CPF:</h3>
                        <p class="inter-regular"><?= $_SESSION['CPF'] ?></p>
                        <h3 class="bold">Data de Nascimento:</h3>
                        <p class="inter-regular"><?= $_SESSION['data_nascimento'] ?></p>
                        <h3 class="bold">Telefone:</h3>
                        <p class="inter-regular"><?= $_SESSION['telefone'] ?></p>
                        <h3 class="bold">Email:</h3>
                        <p class="inter-regular"><?= $_SESSION['email'] ?></p>
                    </div>
                    <div class="btn-dados">
                        <input type="submit" value="Alterar Senha">
                        <input type="submit" onclick="abrirPerfil()" value="Editar Perfil">
                        <a href="finalizar_sessao.php">Sair</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="ttl-pedidos">
            <h1>Meus pedidos:</h1>
        </div>
        <div class="card-pedidos">
            <div class="container-pedidos">
                <div class="separacao">
                        <div class="pedido">
                            <div class="img-ped">
                                <img src="upload/produtos/3.png" alt="">
                            </div>
                            <div class="desc">
                                <div class="nome">
                                    <p class="bold">Cambio Dianteiro Mtb Shimano Tz500 31.8 Puxa Por Baixo 42d</p>
                                </div>
                                <div class="preco">
                                    <p>[ valor ]</p>
                                </div>
                            </div>
                        </div>
                    <div class="line-ped"></div>
                </div>
                <div class="separacao">
                        <div class="pedido">
                            <div class="img-ped">
                                <img src="upload/produtos/3.png" alt="">
                            </div>
                            <div class="desc">
                                <div class="nome">
                                    <p class="bold">Cambio Dianteiro Mtb Shimano Tz500 31.8 Puxa Por Baixo 42d</p>
                                </div>
                                <div class="preco">
                                    <p>[ valor ]</p>
                                </div>
                            </div>
                        </div>
                    <div class="line-ped"></div>
                </div>
                <div class="separacao">
                        <div class="pedido">
                            <div class="img-ped">
                                <img src="upload/produtos/3.png" alt="">
                            </div>
                            <div class="desc">
                                <div class="nome">
                                    <p class="bold">Cambio Dianteiro Mtb Shimano Tz500 31.8 Puxa Por Baixo 42d</p>
                                </div>
                                <div class="preco">
                                    <p>[ valor ]</p>
                                </div>
                            </div>
                        </div>
                    <div class="line-ped"></div>
                </div>
                <div class="separacao">
                        <div class="pedido">
                            <div class="img-ped">
                                <img src="upload/produtos/3.png" alt="">
                            </div>
                            <div class="desc">
                                <div class="nome">
                                    <p class="bold">Cambio Dianteiro Mtb Shimano Tz500 31.8 Puxa Por Baixo 42d</p>
                                </div>
                                <div class="preco">
                                    <p>[ valor ]</p>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="line"></div>
            <div class="mais-detalhes">
                <a href="andamento-pedido.php">Ver Detalhes</a>
                <p class="bold">Total: [ valor ]</p>
            </div>
        </div>
    </div>
<script src="assets/js/editar-perfil.js"></script>
</body>
</html>
