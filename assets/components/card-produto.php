<?php
    require('painel/conecta.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="assets/css/components/card-produto.css">
    </head>
    <body>
        <?php
            $sql = "SELECT * FROM produtos";
            $consulta = $conexao->query($sql);
            while($dados = $consulta->fetch_assoc()){
                ?>
                <div class="produto">
                    <div class="img_produto">
                        <a href="infos_produto.php?codigo=<?php echo $dados['codigo']; ?>" style="width: 100%;"><img src="upload/imagem_produtos/<?php echo($dados['img']); ?>" style="width: 100%; border-radius: 5%;" class="produto_img"></a>
                    </div>
                    <div class="nome_produto">
                        <p class="bold"><?php echo $dados['nome']; ?></p>
                        <p class="regular">(cod. <?php echo $dados['codigo']; ?>)</p>
                    </div>
                    <div class="valor_produto">
                        <p class="bold">R$ <?php echo $dados['valor']; ?></p>
                    </div>
                    <div class="botao_comprar">
                        <a href="infos_produto.php?codigo=<?php echo $dados['codigo']; ?>" class="btn_comprar bold">Comprar</a>
                    </div>
                    <div class="ver-mais">
                        <p>Veja mais em: <a href="">bicicletas</a></p>
                    </div>
                    
                </div>
                <?php
            }
        ?>
    </body>
</html>