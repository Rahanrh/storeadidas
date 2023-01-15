<?php
if (isset($_POST['input'])) {
  $nama = $_POST['nama_barang'];
  $jenis = $_POST['kategori'];
  $stok = $_POST['stok'];
  $harga = $_POST['harga'];
  $nama_file = $_FILES['gambar']['name'];
  $source = $_FILES['gambar']['tmp_name'];
  $folder = './upload/';

  move_uploaded_file($source, $folder . $nama_file);
  $insert = mysqli_query($koneksi, "INSERT INTO produk VALUES (NULL, '$nama', '$jenis', '$stok', '$harga', '$nama_file')");

  if ($insert) {
    header("location: market.php");
  } else {
    echo "Gagal menambahkan prodak";
  }
}
