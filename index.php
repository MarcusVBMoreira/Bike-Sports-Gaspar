<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- !RESET CSS! -->
    <link rel="stylesheet" href="assets/css/reset.css">
    <!-- Links CSS -->
    <link rel="stylesheet" href="assets/css/padrao.css">
    <link rel="stylesheet" href="assets/css/header_footer.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- !Favicon! -->
    <link rel="shortcut icon" alt="logo DKS" href="assets/img/logoBSG-branco-menor.ico" type="image/x-icon">
    <title>Sport Gaspar</title>
  </head>
  <body>
    <header>
      <nav class="nav-1">
        <a href="index.php" class="logo"><img src="assets/img/logoBSG-preto-menor.png"></a>
        <div class="pesquisar">
            <input type="text" class="pesquisa" placeholder="Pesquisar...">
            <input type="submit" value="Pesquisar">
        </div>
        <ul class="nav-list-1">
            <li><a href="#"><i class="fa-solid fa-user"></i></a></li>
            <li><a href="#"><i class="fa-solid fa-heart"></i></a></li>
            <li><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
        </ul>
      </nav>
      <nav class="nav-2">
        <div class="categorias">
            <i class="fa-solid fa-list"></i>
            <h2>categorias</h2>
        </div>
        <ul class="nav-list-2">
            <li>
                <a href="">Bicicletas</a>
                <ul class="dropdown">
                    <li><a href="montain_bike.php">Montain Bike</a></li>
                    <li><a href="">Eletric Bike</a></li>
                    <li><a href="">Road Bike</a></li>
                    <li><a href="">Simple Bike</a></li>
                </ul> 
            </li>
            <li><a href="">Acessorios</a></li>
            <li><a href="">Vestuario</a></li>
            <li><a href="">Ferramentas</a></li>
            <li><a href="">Componentes</a></li>
            <li><a href="">Suplementos</a></li>
        </ul>
      </nav>
    </header>
    <!-- <main class="main-banner">
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="assets/img/banner-1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="assets/img/banner-2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/img/banner-3.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div> -->
    <!-- </main>
    <div class="container">
      <section id="section-destaques">
        <div class="destaques">
          <h1>Destaques</h1>
        </div>
      </section>
      
      <section class="section-categs">
        <div class="box-categ">
          <div class="row-categ">
            <a href="" class="manu">
              <img src="assets/img/manutencao.jpg" alt="">
            </a>
            <a href="" class="nutri">
              <img src="assets/img/nutri.jpg" alt="">
            </a>
          </div>
          <div class="row-categ">
            <a href="" class="outlet">
              <img src="assets/img/outlet.jpg" alt="">
            </a>
            <a href="" class="seminovas">
              <img src="assets/img/seminovas.jpg" alt="">
            </a>
          </div>
        </div>
      </section>
    </div>
    <footer>
      <h1>Bike Sport Gaspar</h1>
      <div class="line"></div>
      <p>&copy; Code Track</p>
    </footer> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/banner_rotate.js"></script>
  </body>
</html>