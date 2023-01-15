<?php
session_start();

$id_barang = $_GET["id_barang"];

unset($_SESSION["pesanan"][$id_barang]);

echo "<script>alert('Produk telah dihapus');</script>";
echo "<script>location= 'cart_pembeli.php'</script>";
