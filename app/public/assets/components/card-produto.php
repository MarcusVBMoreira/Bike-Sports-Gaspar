<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="assets/css/components/card-produto.css">
    </head>
    <body>
        <?php if(count($produtos)==0): ?>
            <p class="nao-tem">Não há produtos registrados</p>
        <?php else: ?>
            <?php foreach($produtos as $p): ?>
                <div class="produto">
                    <div class="produto-content">
                        <div class="img_produto">
                            <a href="infos-produto.php?codigo=<?= $p['id'] ?>"><img src="upload/produtos/<?= $p['img1'] ?>" style="width: 100%; border-radius: 5%;" class="produto_img"></a>
                        </div>
                        <div class="nome_produto">
                            <p class="bold"><?= $p['nome'] ?></p>
                        </div>
                        <div class="valor_produto">
                            <p class="bold">R$ <?= $p['valor'] ?></p>
                        </div>
                        <div class="botao_comprar">
                            <a href="infos-produto.php?codigo=<?= $p['id'] ?>" class="btn_comprar bold">Comprar</a>
                        </div>
                        <div class="ver-mais">
                            <p>Veja mais em: <a href="">bicicletas</a></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            
        <?php endif ?>
    </body>
    <style>
        .nao-tem{
            color: #fff;
        }
    </style>
</html>