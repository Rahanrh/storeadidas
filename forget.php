<?php

require 'koneksi.php';

if (isset($_POST['password'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $hasil = mysqli_query($koneksi, "UPDATE user SET password='$password' WHERE username = '$username'");
  if ($hasil == 'username') {
    echo "<script>
    alert ('Berhasil Ganti password');
    document.location.href='login.php';
    </script>";
  } else {
    echo "<script>
    alert ('Gagal Ganti Password');
    document.location.href='forget.php';
    </script>";
  }
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <title>Forget</title>
</head>

<body>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  <div class="container">

    <h3 class="text-center">Lupa password</h3>

    <form action="" method="POST">
      <!-- username -->
      <div class="form-group">
        <label for="exampleInputEmail1">Username</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-user"></i></div>
          </div>
          <input type="text" class="form-control" placeholder="Masukkan Username" name="username">
        </div>
      </div>
      <!-- password -->
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
        <button class="btn btn-primary" type="submit" name="submit">Lupa Password</button>
        <a href="login.php"><button class="btn btn-warning" type="button">Cancel</button></a>
      </div><br>
    </form>
  </div>


</body>

</html>