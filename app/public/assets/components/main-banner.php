<!DOCTYPE html>
<body>
  <main class="main-banner">
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="assets/img/banner/banner1_deitado.jpg" class="w-100 deitado" alt="...">
          <img src="assets/img/banner/banner1_vertical.jpg" class="w-100 vertical" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="assets/img/banner/banner2_deitado.jpg" class="w-100 deitado" alt="...">
          <img src="assets/img/banner/banner2_vertical.jpg" class="w-100 vertical" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="3000">
          <img src="assets/img/banner/banner3_deitado.jpg" class="w-100 deitado" alt="...">
          <img src="assets/img/banner/banner3_vertical.jpg" class="w-100 vertical" alt="...">
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
    </div>
    <style>
      /* Banner Rotativo */ 
      .main-banner{
        width: 100%;
        margin: 0 auto;
      }
      .carousel-item img{
        width: 80%;
        height: 400px;
        z-index: 0;
      }
      .carousel{
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .vertical{
        display: none;
      }
      .deitado{
        display: flex;
      }
      /* ---------Responsivo Header--------- */
      @media screen  and (max-width: 480px){
        .carousel-inner{
          width: 80%;
        }
        main{
          margin-top: 50px;
        }
        .vertical{
          display: flex;
        }
        .deitado{
          display: none;
        }
      }

    </style>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
