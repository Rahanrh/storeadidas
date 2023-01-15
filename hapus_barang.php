<?php

include('koneksi.php');

$id_barang = $_GET['id_barang'];

$hapus = mysqli_query($koneksi, "DELETE FROM produk WHERE id_barang='$id_barang'");

if ($hapus)
	header('location: market.php');
else
	echo "Barang gagal untuk di Hapus";
