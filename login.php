<?php
include 'koneksi.php';
?>

<!doctype html>
<html lang="en">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="css/login.css">


  <title>Halaman Login</title>
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
  <!-- Form Login -->
  <div class="container">
    <h4 class="text-center">FORM LOGIN</h4>
    <hr>
    <form method="POST" action="">
      <div class="form-group">
        <label for="exampleInputEmail1">Username</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-user"></i></div>
          </div>
          <input type="text" class="form-control" placeholder="Masukkan Username" name="username">
        </div>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
          </div>
          <input type="password" class="form-control" placeholder="Masukkan Password" name="password">
        </div>
      </div>
      <div class="mb-3">
        <small><a href="registers.php" class="text-dark">Belum Punya Akun ? Buat Akun Anda !</a></small>
      </div>
      <button type="submit" name="submit" class="btn btn-primary">LOGIN</button>
      <a href="index.php"><button class="btn btn-info" type="button">HOME</button></a>
    </form>
    <a href="forget.php">Lupa Password</a>
    <!-- Akhir Form Login -->

    <!-- Eksekusi Form Login -->
    <?php
    if (isset($_POST['submit'])) {
      $user = $_POST['username'];
      $password = $_POST['password'];

      // Query untuk memilih tabel
      $cek_data = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$user' AND password = '$password'");
      $hasil = mysqli_fetch_array($cek_data);
      $status = $hasil['status'];
      $login_user = $hasil['username'];
      $row = mysqli_num_rows($cek_data);

      // Pengecekan Kondisi Login Berhasil/Tidak
      if ($row > 0) {
        session_start();
        $_SESSION['login_user'] = $login_user;

        if ($status == 'admin') {
          header('location: admin.php');
        } else if ($status == 'user') {
          header('location: user.php');
        } else if ($status == 'owner') {
          header('location:cart.php');
        }
      } else {
        echo "<script>
				alert('Anda Gagal Login !');
				document.location='login.php';
		  </script>";
      }
    }
    ?>
  </div>
  <!-- Akhir Eksekusi Form Login -->
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.js"></script>
</body>

</html>