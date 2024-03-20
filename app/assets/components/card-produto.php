<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="assets/css/components/card-produto.css">
    </head>
    <body>
        <?php if(count($produtos)==0): ?>
            <p>Não há clientes registrados</p>
        <?php else: ?>
            <?php foreach($produtos as $p): ?>
                <div class="produto">
                    <div class="coracao">
                        <i class="fa-regular fa-heart"></i>
                    </div>
                    <div class="img_produto">
                        <a href="infos-produto.php?codigo=<?= $p['codigo'] ?>" style="width: 100%;"><img src="upload/produtos/<?= $p['img1'] ?>" style="width: 100%; border-radius: 5%;" class="produto_img"></a>
                    </div>
                    <div class="nome_produto">
                        <p class="bold"><?= $p['nome'] ?></p>
                        <p class="regular">(cod. <?= $p['codigo'] ?>)</p>
                    </div>
                    <div class="avaliacao">
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <div class="valor_produto">
                        <p class="bold">R$ <?= $p['valor'] ?></p>
                    </div>
                    <div class="botao_comprar">
                        <a href="infos-produto.php?codigo=<?= $p['codigo'] ?>" class="btn_comprar bold">Comprar</a>
                    </div>
                    <div class="ver-mais">
                        <p>Veja mais em: <a href="">bicicletas</a></p>
                    </div>
                </div>
            <?php endforeach; ?>
            
        <?php endif ?>
    </body>
</html>