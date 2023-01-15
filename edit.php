<?php
include('koneksi.php');

$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$kategori = $_POST['kategori'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
$nama_file = $_FILES['gambar']['name'];
$source = $_FILES['gambar']['tmp_name'];
$folder = './upload/';

move_uploaded_file($source, $folder . $nama_file);
$edit = mysqli_query($koneksi, "UPDATE produk SET nama_barang='$nama_barang', kategori='$kategori', stok='$stok', harga='$harga', gambar='$nama_file' WHERE id_barang='$id_barang'");
var_dump($edit);
if ($edit)
	header('location: market.php');
else
	echo "Edit Prodak Gagal";
