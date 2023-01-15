<?php
include 'koneksi.php'

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Adidas Store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
  <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
  <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
  <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
  <link rel="stylesheet" type="text/css" href="styles/responsive.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
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

  <header class="header">
    <div class="header_container">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="header_content d-flex flex-row align-items-center justify-content-start">
              <div class="logo"><a href="index.php">Adidas</a></div>
              <nav class="main_nav">
                <ul>
                  <li class=""><a href="index.php">Home</a>
                  <li class="hassubs">
                    <a>Kategori</a>
                    <ul>
                      <?php
                      $query =
                        "SELECT * from kategori order by nama_kategori";

                      $result = mysqli_query($koneksi, $query);

                      if (mysqli_num_rows($result) > 0) {
                        $index = 1;

                        while ($row = mysqli_fetch_assoc($result)) {
                          $id_kategori = $row['id_kategori'];
                          echo "
																<li><a href='kategories.php'>" . $row['nama_kategori'] . "</a></li>
															";
                        }
                      }
                      ?>
                    </ul>
                  </li>
                </ul>
              </nav>
              <div class="header_social">
                <nav class="main_nav">
                  <ul>
                    <li><a href="login.php">Login</a>
                      <ul>
                      </ul>
                    </li>
                  </ul>
                </nav>
              </div>
  </header>
  <!-- HOME -->
  <div class="home" style="background-image: url(images/adidas11.jpg); width:auto;height:800px">
    <div class="home_slider_container">

      <!-- Home Slider -->
      <div class="owl-carousel owl-theme home_slider">

        <!-- Slider Item -->

        <div class="home_slider_content_container">
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="home_slider_content" data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
                  <div class="home_slider_title">
                    <font size="5px">Adidas Store Yogyakarta</font> Malioboro Km No.3
                  </div>
                  <div class="home_slider_subtitle">Selamat Datang di toko adidas</div>
                  <div class="button button_light home_button"><a href="#produk">
                      <font color="black" style="font-size: 20px;">Beli Sekarang</font>
                    </a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  <!-- AKHIR HOME -->
  <!-- MARKET -->
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
  </section><br><br>
  <!-- akhir contact -->
</body>

</html>