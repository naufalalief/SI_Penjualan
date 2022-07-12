<?php 
include 'config.php';
$id_penjualan = $_GET['id_penjualan'];
mysql_query("DELETE FROM penjualan WHERE id_penjualan='$id_penjualan'")or die(mysql_error());

header("location:list_barang.php");
?>