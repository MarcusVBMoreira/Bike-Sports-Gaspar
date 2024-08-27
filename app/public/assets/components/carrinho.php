<html>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="assets/css/components/carrinho.css">
</head>
<body>
    <div class="container">
        <div class="ttl-cart">
            <div class="icon-content">
                <a href="index.php">
                    <i class="fa-solid fa-arrow-left"></i>
                </a>
            </div>
            <div class="car-content">
                <a href="">Carrinho</a>
            </div>
        </div>
        <?php if(!empty($_SESSION['carrinho'])): ?>
            <?php 
                require __DIR__ . '/../../inc/Request.php';
                $produtos = [];
                foreach($_SESSION['carrinho'] as $p){
                    
                    $produto = Request::GetByIdProd($p);
                    array_push($produtos, $produto['results']);
                }
                

                
                foreach($produtos as $p){ ?>
                    <div class="container-carrinho">
                        <div class="pedido">
                            <div class="delete" role="link">
                                <a href="remover_carrinho.php?id=<?= $p['id'] ?>"><i class="fa-regular fa-circle-xmark"></i></a>
                            </div>
                            <div class="produto">
                                <div class="content-img">
                                    <img src="upload/produtos/<?= $p['img1'] ?>" alt="">
                                </div>
                                <div class="desc">
                                    <div class="nome">
                                        <p class="bold"><?= $p['nome'] ?></p>
                                    </div>
                                    <div class="valor">
                                        <p>Total produto: R$ <?= $p['valor'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="line"></div>
                        </div>
                    </div>
                <?php 
                }
            ?>
            <div class="content-compra">
                <div class="compra">
                    <p>Valor dos produtos: R$</p>
                    <button>Comprar</button>
                </div>
                <div class="line-compra"></div>
            </div>
            <style>
                .content-compra{
                    width: 80%;
                    height: 15vh;
                }
                .compra{
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    width: 100%;
                    height: 50%;
                }
                .compra button{
                    border-radius: 5px;
                    padding: 15px;
                    width: 20%;
                    border: none;
                    font-size: 15px;
                    color: #fff;
                    text-transform: uppercase;
                    background-color: #ec5615;
                    font-weight: 600;
                    letter-spacing: 1px;
                }
                .line-compra{
                    border-bottom: 1px solid #fff;
                }
            </style>
        <?php else: ?>
            
        <?php endif; ?>
    </div>
</body>
</html>
