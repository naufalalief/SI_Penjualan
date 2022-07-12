<?php 
include 'config.php';
$id_cabang = $_GET['id_cabang'];
mysql_query("DELETE FROM cabang WHERE id_cabang='$id_cabang'")or die(mysql_error());

header("location:list_cabang.php");
?>