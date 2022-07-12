<?php 
include 'config.php';
$id_barang = $_GET['id_barang'];
mysql_query("DELETE FROM barang WHERE id_barang='$id_barang'")or die(mysql_error());

header("location:list_barang.php");
?>