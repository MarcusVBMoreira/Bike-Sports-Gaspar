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
                    <input type="text" name="nome" id="nome" value="" class="" >
                </div>
                <div>
                    <p>descricao</p>
                    <input type="text" name="descricao" id="descricao" value="" class="" >
                </div>
                <div>
                    <p>valor</p>
                    <input type="number" name="valor" id="valor" value="" class="" >
                </div>
                <div>
                    <p>categoria</p>
                    <input type="text" name="categoria" id="categoria" value="" class="" >
                </div>
                <div>
                    <p>number</p>
                    <input type="number" name="qnt_estoque" id="qnt_estoque" value="" class="" >
                </div>
                <div>
                    <p>tipo</p>
                    <input type="text" name="tipo" id="tipo" value="" class="" >
                </div>
                <div>
                    <p>modelo</p>
                    <input type="text" name="modelo" id="modelo" value="" class="" >
                </div>
                <div>
                    <p>cor</p>
                    <input type="text" name="cor" id="cor" value="" class="" >
                </div>
                <div>
                    <p>marca</p>
                    <input type="text" name="marca" id="marca" value="" class="" >
                </div>
                <div>
                    <p>peso</p>
                    <input type="text" name="peso" id="peso" value="" class="" >
                </div>
                <div>
                    <p>altura</p>
                    <input type="text" name="altura" id="altura" value="" class="" >
                </div>
                <div>
                    <p>largura</p>
                    <input type="text" name="largura" id="largura" value="" class="" >
                </div>
                <div>
                    <p>comprimento</p>
                    <input type="text" name="comprimento" id="comprimento" value="" class="" >
                </div>
                <div>
                    <p>especificacoes</p>
                    <input type="text" name="especificacoes" id="especificacoes" value="" class="" >
                </div>
                <div>
                    <p>tamanho P</p>
                    <input type="checkbox" name="tamanho_P" id="tamanho_P" class="" >
                </div>
                <div>
                    <p>tamanho M</p>
                    <input type="checkbox" name="tamanho_M" id="tamanho_M" class="" >
                </div>
                <div>
                    <p>tamanho G</p>
                    <input type="checkbox" name="tamanho_G" id="tamanho_G" class="" >
                </div>
                <div>
                    <p>tamanho GG</p>
                    <input type="checkbox" name="tamanho_GG" id="tamanho_GG" class="" >
                </div>
                <div>
                    <p>imagem</p>
                    <input type="file" name="img" id="imagem_produto" value="" >
                </div>
                <div>
                    <button type="submit" class="">Adicionar</button>
                </div>
            </div>
        </form>
        
    </body>
</html>