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
   		$id_barang=$_POST['id_barang'];
   		$nama_toko=$_POST['nama_toko'];
   		$nama_barang=$_POST['nama_barang'];
   		$nama_supplier=$_POST['nama_supplier'];
   		$stok=$_POST['stok'];
   		$harga_jual=$_POST['harga_jual'];
 
		$query="insert into barang (id_barang, id_cabang, nama_barang, id_supplier, stok, harga_jual) values ('$id_barang', '$nama_toko', '$nama_barang', '$nama_supplier', '$stok', '$harga_jual')";
		$sql=mysql_query($query, $conn);

		header("");
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
		width: 275px;
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
	<?php
		$kntl=mysql_query("select * from cabang")
	?>
	<?php
		$kntl2=mysql_query("select * from supplier")
	?>
<table align="center">	
	<form action="" method="post">
	<tr>
		<td colspan="4"><center><b>Edit</b></center></td>
	</tr>
 	<tr>
		<td>ID : </td><td><input name="id_barang" id="id_barang" readonly=""></td>
	</tr>
	<tr>
		<td>Cabang : </td><td>
						<select name="nama_toko">
						<option selected="selected">Pilih Cabang</option>
						<optgroup>
							<?php while($mmk=mysql_fetch_array($kntl)){?>
							<option value="<?php echo $mmk[id_cabang];?>">
							<?php echo $mmk['nama_toko'];?></option>
							<?php } ?>
						</optgroup>
						</select>
						</td>
	</tr>
	<tr>
		<td>Nama Barang : </td><td><input type="text" name="nama_barang"></td>
	</tr>
	<tr>
		<td>Supplier : </td><td>
						<select name="nama_supplier">
						<option selected="selected">Pilih Supplier</option>
						<optgroup>
							<?php while($mmk2=mysql_fetch_array($kntl2)){?>
							<option value="<?php echo $mmk2[id_supplier];?>">
							<?php echo $mmk2['nama_supplier'];?></option>
							<?php } ?>
						</optgroup>
						</select>	
						</td>
	</tr>
	<tr>
		<td>Stok : </td><td><input type="text" name="stok"></td>
	</tr>
	<tr>
		<td>Harga Jual : </td><td><input type="text" name="harga_jual"></td>
	</tr>
	<tr>
		<td colspan="3"><center><input type="submit" name="simpan" value="Simpan"></center></td>
	</tr>
	</form>
	<tr>
		<td colspan="4"><center><a href="barang.php"><button>Mbalek</button></a></center></td>
	</tr>
</table>
</body>
</html>
<script type="text/javascript">
	id_barang.value = <?= rand();?>
</script>