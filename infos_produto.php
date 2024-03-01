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
    <title>Sport Gaspar</title>
</head>
<body>
    
<header>
      <nav class="nav-1">
          <a href="#" class="logo">Logo</a>
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
                  <a href="">Bike</a>
                  <ul class="dropdown">
                      <li><a href="montain_bike.php">Montain Bike</a></li>
                      <li><a href="">Eletric Bike</a></li>
                      <li><a href="">Road Bike</a></li>
                      <li><a href="">Simple Bike</a></li>
                  </ul> 
              </li>
              <li><a href="">Acessorios</a></li>
              <li><a href="">Roupas</a></li>
              <li><a href="">Ferramentas</a></li>
              <li><a href="">Nutrição</a></li>
          </ul>
      </nav>
    </header>

    <div class="container">
        <section id="produto">

        </section>
        <section id="detalhes-medidas">
            <div class="box-detalhes-medidas">
                <div class="ttl-deta-medi">
                    <h1>Detalhes</h1>|  
                    <h1>Medidas</h1>
                </div>
            </div>
        </section>
    </div>

    <footer>
      <h1>Bike Sport Gaspar</h1>
      <div class="line"></div>
      <p>&copy; Code Track</p>
    </footer>

</body>
</html>