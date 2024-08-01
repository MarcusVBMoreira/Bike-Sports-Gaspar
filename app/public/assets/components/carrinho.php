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
                                <img src="upload/produtos/<?= $p['img1'] ?>" alt="">
                                <div class="desc">
                                    <div class="nome">
                                        <p class="bold"><?= $p['nome'] ?></p>
                                    </div>
                                    <div class="valor">
                                        <p>R$<?= $p['valor'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="line"></div>
                        </div>
                    </div>
                <?php 
                }
            ?>
            
        <?php else: ?>
            
        <?php endif; ?>
    </div>
</body>
</html>
