<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="assets/css/components/card-produto-adm.css">
    </head>
    <body>
    <?php if(count($produtos)==0): ?>
            <p>Não há clientes registrados</p>
        <?php else: ?>
            <?php foreach($produtos as $p): ?>
                <div class="produto_adm">
                    <div class="img_produto">
                        <img src="upload/produtos/<?= $p['img1']; ?>" alt="">
                    </div>
                    <div class="infos_produto">
                        <div class="top_infos">
                            <div class="titulo nome_produto"><?= $p['nome']; ?></div>
                        </div>
                        <div class="bottom_infos">
                            <div class="left_infos">
                                <div class="valor_produto bold">R$<?= $p['valor']; ?></div>
                                <div class="cod_produto regular">Cód. <?= $p['codigo']; ?></div>
                            </div>
                            <div class="right_infos">
                                <a href="editar-produto.php" class="btn_editar"><i class="fa-solid fa-pencil"></i></a>
                                <a href="deletar-produto.php" class="btn_deletar"><i class="fa-solid fa-trash-can"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            
        <?php endif ?>
    </body>
</html>