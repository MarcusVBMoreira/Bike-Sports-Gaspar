<!DOCTYPE html>
<html lang="en">
  <head>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    />
  </head>
  <body>
    <div class="content">
      <i class="fa-solid fa-angle-left" onclick="direcao(1)"></i>
      <div id="container-cardProduto">
      <?php if(count($produtos)==0): ?>
      <p>Não há clientes registrados</p>
      <?php else: ?>
      <?php foreach($produtos as $p): ?>
        <div class="cardProduto">
          <div class="content-cart">
            <i class="fa-solid fa-cart-shopping"></i>
          </div>
          <div class="content-img">
            <a href="infos-produto.php?codigo=<?= $p['id'] ?>">
              <img src="upload/produtos/<?= $p['img1'] ?>" />
            </a>
          </div>
          <div class="content-desc-cod">
              <div class="content-descricao">
                <p><?= $p['nome']; ?></p>
              </div>
              <div class="content-codigo">
                <p>
                  ( Cód:
                  <?= $p['id']; ?>
                  )
                </p>
              </div>
          </div>
          <div class="content-preco">
            <p class="preco">
              R$
              <?= $p['valor']; ?>
            </p>
            <p class="parcelado">12x de R$ <?= number_format($p['valor'] / 12, 2, ',', '.'); ?> sem juros</p>
          </div>
          <div class="content-button">
            <a href="infos-produto.php?codigo=<?= $p['id'] ?>" class="ver-produto">Ver Produto</a>
          </div>
        </div>
        <?php endforeach; ?>
        <?php endif ?>
      </div>
      <i class="fa-solid fa-angle-right" onclick="direcao(2)"></i>
    </div>
    <script>
      function direcao(e) {
        let direcao = document.getElementById("container-cardProduto");

        if (e == 1) {
          //Right
          direcao.scrollLeft = direcao.scrollLeft - 300;
        } else if (e == 2) {
          //Left
          direcao.scrollLeft = direcao.scrollLeft + 300;
        }
      }
    </script>
    <style>
      .nao-tem {
        color: #fff;
        margin-bottom: 1%;
      }
      body {
        background-color: rgb(17, 17, 23);
      }
      .content {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 500px;
        width: 100%;
      }
      .content i {
        font-size: 30px;
        cursor: pointer;
        color: #fff;
      }
      #container-cardProduto {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: space-around;
        align-items: center;
        padding: 10px;
        overflow: hidden;
        scroll-behavior: smooth;
        gap: 20px;
      }
      .cardProduto {
        cursor: pointer;
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
        align-items: center;
        height: 100%;
        min-width: 280px;
        max-width: 290px;
        transition: 0.5s ease;
        border-radius: 5px;
        background-color: #050611;
      }
      .cardProduto:hover {
        box-shadow: 0px 12px 12px  rgba(0, 0, 0, .3) ;
      }
      .content-cart {
        width: 85%;
        height: 8%;
        display: flex;
        justify-content: end;
        align-items: center;
      }
      .content-cart i {
        font-size: 20px;
      }
      .content-img {
        width: 85%;
        height: 43%;
        background-color: #fff;
      }
      .content-img img {
        width: 100%;
        height: 100%;
      }
      p, a{
        color: #fff;
      }
      .content-desc-cod{
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        width: 85%;
        height: 12%;
      }
      .content-descricao{
        width: 100%;
        height: 70%;
        display: flex;
        justify-content: start;
        align-items: start;
      }
      .content-descricao p{
        color: #fff;
        font-size: 15px;
        font-family: sans-serif;
        text-align: left;
        display: -webkit-box;
        -webkit-line-clamp: 2; /* Número máximo de linhas visíveis */
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        line-height: 1.5;
      }
      .content-codigo{
          width: 100%;
          height: 30%;
          display: flex;
          align-items: center;
          justify-content: left;
      }
      .content-codigo p{
          color: #fff;
          font-size: 10px;
          text-transform: uppercase;
          font-family: sans-serif;
          text-align: left;
      }
      .content-preco{
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            width: 85%;
            height: 8%;
        }
        .content-preco .preco{
            color: #fff;
            font-size: 20px;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-family: sans-serif;
            text-align: left;
        }
        .content-preco .parcelado{
            color: #fff;
            font-size: 10px;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-family: sans-serif;
            text-align: left;
        }
        .content-button{
            user-select: none;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 85%;
            height: 10%;
            background-color: #ec5615;
            border-radius: 2px;
            margin-bottom: 5px;
        }
    </style>
  </body>
</html>