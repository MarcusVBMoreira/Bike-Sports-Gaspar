<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <style>
            :root{
                --Preto-Cor: #000;
                --Branco-Cor: #FFF;
                --Branco-50-Cor:#C4C4C4;
                --CinzaClaro-Cor: #DFDFDF;
                --CinzaEscuro-Cor: #a8a8a8;
                --Verde-Cor: #9CCC3C;
                --Amarelo-Cor: #F2EA01;
                --Vermelho-Cor: #E72526;
                --Azul-Cor: #00C1EC;
                --Laranja-Cor: #F24701;
            }


            .produto_adm{
                width: 350px;
                height: 100px;
                padding: 1%;
                display: flex;
                justify-content: center;
                align-items: center;
                background-color: var(--Branco-Cor);
                border-radius: 15px;
                gap: 10px;
            }
            .img_produto{
                padding: 1%;
                width: 20%;
                height: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .infos_produto{
                width: 80%;
                padding: 1%;
                display: flex;
                flex-direction: column;
                height: 100%;
            }
            .top_infos{
                width: 100%;
                height: 50%;
                display: flex;
                justify-content: center;
            }
            .top_infos{
                font-size: 15px;
            }
            .bottom_infos{
                width: 100%;
                height: 100%;
                display: flex;
                justify-content: space-between;
            }
            .left_infos{
                width: 70%;
                display: flex;
                gap: 10px;
                justify-content: start;
                align-items: flex-end;
            }
            .left_infos div{
                font-size: 15px;
            }
            .right_infos{
                width: 30%;
                display: flex;
                gap: 10px;
                justify-content: end;
                align-items: flex-end;
            }
            .btn_editar{
                color: var(--Preto-Cor);
            }
            .btn_deletar{
                color: var(--Vermelho-Cor);
            }
            .right_infos a i{
                font-size: 20px;
            }

        </style>
    </head>
    <body>
    <?php if(count($produtos)==0): ?>
            <p>Não há clientes registrados</p>
        <?php else: ?>
            
            <?php foreach($produtos as $p): ?>
                <div class="produto_adm">
                    <div class="img_produto">
                        <img src="../upload/<?= $p['img1'] ?>" alt="">
                    </div>
                    <div class="infos_produto">
                        <div class="top_infos">
                            <div class="titulo nome_produto"><?= $p['nome']; ?></div>
                        </div>
                        <div class="bottom_infos">
                            <div class="left_infos">
                                <div class="valor_produto bold">R$<?= $p['valor']; ?></div>
                                <div class="cod_produto regular">Cód. <?= $p['id']; ?></div>
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