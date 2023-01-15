<?php
session_start();
if (!isset($_SESSION['login_user'])) {
  header("location: login.php");
} else {
?>

  <!doctype html>
  <html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <style>
      a {
        font-family: 'Times New Roman', Times, serif;
      }
    </style>
    <title>Adidas Store</title>
  </head>

  <body id="home">
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-light shadow-sm mt-1 fixed-top">
      <div class="container">
        <a class="navbar-brand text-dark" href="user.php"><strong>Adidas </strong>Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link mr-4 a text-dark" href="user.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4 a text-dark" href="market_pembeli.php">MARKET</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4 a text-dark" href="cart_pembeli.php">CART</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4 a text-dark" href="logout.php">LOGOUT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Awal Carousel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/carousel/adidass11.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Adidas Super Speed</h5>
            <p>Happy Shopping</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/carousel/adidass111.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Hight Speed</h5>
            <p>Happy Shopping</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/carousel/adidass1111.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Adidas T shirt</h5>
            <p>Cotton Product</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- AKHIR CAROUSEL -->

    <!-- Market -->
    <div class="row ms-5 me-5 ">
      <div class="row ">
        <div class="col mt-4">
          <h2 class="p1 text-center" style="font-family: 'Times New Roman', Times, serif; font-size:50px">PRODAK</h2>
        </div>
      </div>
      <?php
      include 'koneksi.php';
      $query = mysqli_query($koneksi, "SELECT * FROM produk ORDER BY id_barang DESC limit 4");
      $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
      ?>
      <?php foreach ($result as $result) : ?>
        <div class="col-md-3 mt-3">
          <div class="card">
            <a href="#"><img src="upload/<?php echo $result['gambar'] ?>" class="card-img-top" alt=""></a>
            <div class="card-body">
              <h1 class="card-tittle fs-6 p1"><?php echo $result['nama_barang'] ?></h1>
              <label class="card-tittle fs-6 p1"><strong class="p1">Stok : </strong><?php echo $result['stok'] ?></label><br>
              <label class="card-text harga"><strong class="p1">Rp. </strong><?php echo number_format($result['harga']); ?></label>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <!-- Akhir Market -->

    <!-- ABOUT -->
    <br>
    <section id="About">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <h2 class="p1" style="font-family: 'Times New Roman', Times, serif; font-size:50px">Welcome Adidas Store</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5 p1">
          <div class="col-md-5"><br>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto enim itaque excepturi, quis perspiciatis corporis, deserunt alias, praesentium obcaecati atque omnis pariatur numquam eius. Culpa dolorem consequatur natus delectus debitis!</p>
            <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur iste consequuntur facilis. Repudiandae vel fuga placeat? Laudantium qui itaque, architecto accusamus cupiditate debitis, officiis sit voluptatibus ipsa, ut magnam optio.</P>
          </div>
          <div class="col-md-5"><br>
            <img src="images/profile/profile.jpg" height="60%" alt="">
          </div>
        </div>
      </div>
    </section>
    <!-- AKHIR ABOUT -->
    <!-- contact -->
    <section>
      <div id="Contact">
        <div class="container">
          <div class="row text-center mb-3">
            <div class="col ">
              <h3>Contact Me</h3>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-8">
              <form>
                <div class="mb-3">
                  <label for="name" class="form-label">Full name</label>
                  <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Full Name">
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Email Address">
                </div>
                <div class="mb-3">
                  <label for="pesan" class="form-label">Message</label>
                  <textarea class="form-control" id="pesan" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir contact -->

    <!-- Awal Footer -->
    <hr class="footer ">
    <div class="container ">
      <div class="row footer-body">
        <div class="col-md-6">
          <div class="copyright">
            <strong>Copyright</strong> <i class="far fa-copyright"></i> 2022 - Designed Adidas Store Jogja</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
  </body>

  </html>
<?php } ?>