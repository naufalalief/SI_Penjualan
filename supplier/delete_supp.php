<?php 
include 'config.php';
$id_supplier = $_GET['id_supplier'];
mysql_query("DELETE FROM supplier WHERE id_supplier='$id_supplier'")or die(mysql_error());

header("location:list_supp.php");
?>