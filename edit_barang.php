<?php
include('koneksi.php');

$id_barang = $_GET['id_barang'];

$ambil = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_barang='$id_barang'");
$result = mysqli_fetch_all($ambil, MYSQLI_ASSOC);

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
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

  <title>FORM BARANG</title>
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
      <a class="navbar-brand text-dark" href="admin.php"><strong>Adidas </strong>Store</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link mr-4 a text-dark" href="admin.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mr-4 a text-dark" href="market.php">MARKET</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mr-4 a text-dark" href="cart.php">CART</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mr-4 a text-dark" href="logout.php">LOGOUT</a>
          </li>
        </ul>
      </div>
    </div>
  </nav><br><br><br><br>
  <!-- Akhir Navbar  -->
  <!-- Form Registrasi -->
  <div class="container">
    <h3 class="text-center mt-3 mb-5">EDIT BARANG</h3>
    <div class="card p-5 mb-5">
      <form method="POST" action="edit.php" enctype="multipart/form-data">
        <div class="form-group">
          <label for="barang1">Nama Barang :</label>
          <input type="hidden" name="id_barang" value="<?php echo $result[0]['id_barang'] ?>">
          <input type="text" class="form-control" id="barang1" name="nama_barang" value="<?php echo $result[0]['nama_barang'] ?>">
        </div>

        <div class="form-group">
          <label for="stok1">Stok</label>
          <input type="text" class="form-control" id="stok1" name="stok" value="<?php echo $result[0]['stok'] ?>">
        </div>
        <div class="form-group">
          <label for="harga1">Harga :</label>
          <input type="text" class="form-control" id="harga1" name="harga" value="<?php echo $result[0]['harga'] ?>">
        </div>
        <div class="form-group">
          <img src="./upload/<?php echo $result[0]['gambar'] ?>" class="card-img-top" style="width: 100px;" alt=""></a>
          <br>
          <label for="gambar">Foto Prodak :</label>
          <input type="file" class="form-control-file border" id="gambar" name="gambar" required oninvalid="this.setCustomValidity('Input Foto !')" oninput="setCustomValidity('')">
        </div>
        <div class="form-group md-3" style="width: 20%;">
          <label for="kategori">Pilih Kategori</label>
          <select id="kategori" class="form-control" name="jkategori" required oninvalid="this.setCustomValidity('Pilih Salah Satu Kategori !')" oninput="setCustomValidity('')">
            <option required>Pilih Kategori ..</option>
            <option value="sepatu">Sepatu</option>
            <option value="baju">Baju</option>
            <option value="celana">Celana</option>
            <option value="aksesories">Aksesories</option>
          </select>
        </div><br>
        <button type="submit" class="btn btn-primary" name="tambah">Edit</button>
        <a href="market.php" class="btn btn-warning" name="reset">Cancel</a>
    </div>
  </div>
  <!-- Akhir Form Registrasi -->




  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.js"></script>
</body>

</html>