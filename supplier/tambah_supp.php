<?php

	error_reporting(0);

	//KONEKSI PHP MYSQL
	$database="pendjualan1";
	$host="localhost";
	$username="root";
	$password="";

	$conn = mysql_connect ($host,$username,$password) or die ("koneksi gagal");
	mysql_select_db ($database, $conn);

	if ($_POST["simpan"])
	{
		//SIMPAN DATA
		$id_supplier=$_POST['id_supplier'];
		$nama_supplier=$_POST['nama_supplier'];
		$alamat=$_POST['alamat'];
		$telp=$_POST['telp'];

		$query="insert into supplier (id_supplier, nama_supplier, alamat, telp) values ('$id_supplier', '$nama_supplier', '$alamat', '$telp')";
		$sql=mysql_query($query, $conn);

		header("supplier.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah</title>
</head>
<style type="text/css">
	html{
		background-image: url("2.jpg");
		background-repeat: no-repeat;
		background-size: 100%;
	}
	.ipt{
		width: 100px;
	}
	.ipt2{
		width: 100px;
	}
	table{
		margin-top: 150px;
		border: 1px solid black;
		background-color: rgba(106, 90, 205, 0.5);
		padding: 15px;
		width: 300px;
	}
	button{
		width: 100px;
	}
</style>
<script src="jquery.min.js"></script>
<script>
$(document).ready(function(){
  $(".1").click(function(){
    $("table").toggle(400);
  });
});
</script>
<body><button class="1">Hide</button>
<table align="center">
	<form action="" method="post">
	<tr>
		<td colspan="4"><center><b>Tambah Supplier</b></center></td>
	</tr>
	<tr>
		<td>ID : </td><td><input type="text" name="id_supplier" id="id_supplier"></td>
	</tr>
	<tr>
		<td>Nama Supplier : </td><td><input type="text" name="nama_supplier"></td>
	</tr>
	<tr>
		<td>Alamat : </td><td><input type="text" name="alamat"></td>
	</tr>
	<tr>
		<td>Telepon : </td><td><input type="text" name="telp"></td>
	</tr>
	<tr>
		<td colspan="4"><center><input type="submit" name="simpan" value="Simpan"></center></td>
	</tr>
</form>
	<tr>
		<td colspan="4"><center><a href="supplier.php"><button>Mbalek</button></a></center></td>
	</tr>
</table>
</body>
</html>
<script type="text/javascript">
	id_supplier.value = <?= rand();?>
</script>