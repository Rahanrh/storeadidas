<?php
session_start();

$id_barang = $_GET['id_barang'];

if (isset($_SESSION['pesanan'][$id_barang])) {
	$_SESSION['pesanan'][$id_barang] += 1;
} else {
	$_SESSION['pesanan'][$id_barang] = 1;
}

echo "<script>alert('Produk telah masuk ke cart ');</script>";
echo "<script>location= 'cart_pembeli.php'</script>";
