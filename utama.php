<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
      body{
        background-image:url('5.jpg');
        background-size:cover;
        background-repeat:no-repeat;
        background-attachment:fixed;
      }
    .header {
    font-family: 'Poppins', sans-serif;
    place-content: center;
    background-color: white;
    margin: 80px 50px 50px 50px;
    box-shadow: -2px 2px 6px rgba(70, 70, 70, 0.4);
    }

    .header h5 {
    margin: 10px 10px;
    font-size: 40px;
    opacity: .7;
    color:black;
    }
    
    </style>
  </head>
  <body>

  <!--navbar-->
  <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">My Products</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#about">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#produk">Product</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li> -->
      </ul>
  </div>
</nav>
<!-- header -->
<div class="header text-center p-1">
  <h5>Welcome To Butterfly's Food</h5>
  <div class="order mt-2">
      <a href="#produk" class="btn btn-primary">Lihat Produk</a>
      </div>
</div>

<!-- Carousel & About us -->
<div class="container py-5 mt-5" id="about">
  <div class="row">
  <div class="col">
    <div class="card" style="width:30rem; height:25rem">
    <div class="card-body">
        <h5 class="card-title">Gallery</h5>
        <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="3.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="4.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  </div>
    </div>
    </div>
    <div class="col">
    <div class="card" style="width:30rem; height:25rem">
    <div class="card-body">
    <h5 class="card-title">About Us</h5>
    <p class="card-text">Selamat datang di Restoran kami,selamat makan dan merasakan makanan buatan kami,kami harap kalian senang dan nyaman di restoran kami Terima kasih....</p>

    <p> My Product<br>
     Jl.Asia<br>
     Kota Medan<br>
     Telepon<br>
     Email
    </p>
    </div>
  </div>
  </div>

<!-- produk -->

  <div class="container py-5" id="produk">
    <div class="row">
    <h3>Product</h3>
      <div class="col mb-4">
        <div class="card" style="width: 15rem;">
        <img src="6.jpg" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Pilih 1</h5>
        <p class="card-text">Sosis</p>
        </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="card" style="width: 15rem;">
        <img src="7.jpg" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Pilih 2</h5>
        <p class="card-text">Nugget</p>
        </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="card" style="width: 15rem;">
        <img src="8.jpg" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Pilih 3</h5>
        <p class="card-text">Croissant</p>
        </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="card" style="width: 15rem;">
        <img src="9.jpg" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Pilih 4</h5>
        <p class="card-text">Roti Tawar</p>
        </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="card" style="width: 15rem;">
        <img src="10.jpg" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Pilih 5</h5>
        <p class="card-text">Nasi Goreng</p>
        </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="card" style="width: 15rem;">
        <img src="11.jpg" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Pilih 6</h5>
        <p class="card-text">Ifumie Goreng</p>
        </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="card" style="width: 15rem;">
        <img src="12.jpg" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Pilih 7</h5>
        <p class="card-text">Indomie Goreng</p>
        </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="card" style="width: 15rem;">
        <img src="13.jpg" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Pilih 8</h5>
        <p class="card-text">Bakso</p>
        </div>
        </div>
      </div>
      <div class="order mt-2">
      <a href="https://wa.me/081264925342?text=kak%20saya%20mau%20Order%20" class="btn btn-primary">Order Now</a>
      </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>