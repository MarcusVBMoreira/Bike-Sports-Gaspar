<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

        <!-- !SOMENTE TESTE PARA ENVIAR A IMAGEM! -->
        <form action="painel/novo_produto.php" method="POST" enctype="multipart/form-data" class="" id="">
            <div>
                <div>
                    <p>nome</p>
                    <input type="text" name="nome" id="nome" value="" class="" required>
                </div>
                <div>
                    <p>descricao</p>
                    <input type="text" name="descricao" id="descricao" value="" class="" required>
                </div>
                <div>
                    <p>valor</p>
                    <input type="number" name="valor" id="valor" value="" class="" required>
                </div>
                <div>
                    <p>categoria</p>
                    <input type="text" name="categoria" id="categoria" value="" class="" required>
                </div>
                <div>
                    <p>number</p>
                    <input type="number" name="qnt_estoque" id="qnt_estoque" value="" class="" required>
                </div>
                <div>
                    <p>tipo</p>
                    <input type="text" name="" id="tipo" value="tipo" class="" required>
                </div>
                <div>
                    <p>modelo</p>
                    <input type="text" name="modelo" id="modelo" value="" class="" required>
                </div>
                <div>
                    <p>cor</p>
                    <input type="text" name="cor" id="cor" value="" class="" required>
                </div>
                <div>
                    <p>marca</p>
                    <input type="text" name="marca" id="marca" value="" class="" required>
                </div>
                <div>
                    <p>peso</p>
                    <input type="text" name="peso" id="peso" value="" class="" required>
                </div>
                <div>
                    <p>altura</p>
                    <input type="text" name="altura" id="altura" value="" class="" required>
                </div>
                <div>
                    <p>largura</p>
                    <input type="text" name="largura" id="largura" value="" class="" required>
                </div>
                <div>
                    <p>comprimento</p>
                    <input type="text" name="comprimento" id="comprimento" value="" class="" required>
                </div>
                <div>
                    <p>especificacoes</p>
                    <input type="text" name="especificacoes" id="especificacoes" value="" class="" required>
                </div>
                <div>
                    <p>tamanho P</p>
                    <input type="checkbox" name="tamanho_P" id="tamanho_P" value="" class="" required>
                </div>
                <div>
                    <p>tamanho M</p>
                    <input type="checkbox" name="tamanho_M" id="tamanho_M" value="" class="" required>
                </div>
                <div>
                    <p>tamanho G</p>
                    <input type="checkbox" name="tamanho_G" id="tamanho_G" value="" class="" required>
                </div>
                <div>
                    <p>tamanho GG</p>
                    <input type="checkbox" name="tamanho_GG" id="" value="tamanho_GG" class="" required>
                </div>
                <div>
                    <p>imagem</p>
                    <input type="file" name="imagem_produto" id="imagem_produto" value="" required>
                </div>
                <div>
                    <button type="submit" class="">Adicionar</button>
                </div>
            </div>
        </form>
        
    </body>
</html>