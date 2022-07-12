<?php


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
 
		$query="update barang set id_barang='$id_barang', id_cabang='$nama_toko', nama_barang='$nama_barang', id_supplier='$nama_supplier', stok='$stok', harga_jual='$harga_jual' where id_barang='$id_barang' ";
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
		width: 250px;
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
		<?php
			$s="select * from barang where id_barang='".$_GET["id_barang"]."'";
			$q=mysql_query($s);
			$l=mysql_fetch_array($q);
		?>
	<form action="" method="post">
	<tr>
		<td colspan="4"><center><b>Edit</b></center></td>
	</tr>
	<tr>
		<td>ID : </td><td><input type="text" name="id_barang" value="<?= $l['id_barang']?>" readonly></td>
	</tr>
	<tr>
		<td>ID Cabang : </td><td>
						<?php

						echo "<select name='nama_toko'>";
						$e=mysql_query("SELECT * FROM cabang order by id_cabang DESC");
						echo "<option value='belum milih' selected>- Pilih Cabang -</option>";

						while($w=mysql_fetch_array($e))
						{
						echo "<option value=$w[id_cabang] selected>$w[nama_toko]</option> readonly";        
						}
						echo "</select>";
						?>
							
						</td>
	</tr>
	<tr>
		<td>Nama Barang : </td><td><input type="text" name="nama_barang" value="<?= $l['nama_barang']?>"></td>
	</tr>
	<tr>
		<td>ID Supplier : </td><td>
						<?php

						echo "<select name='nama_supplier'>";
						$tampil=mysql_query("SELECT * FROM supplier");
						echo "<option value='belum milih' selected>- Pilih Suplier -</option>";

						while($w=mysql_fetch_array($tampil))
						{
						echo "<option value=$w[id_supplier] selected>$w[nama_supplier]</option>";        
						}
						echo "</select>";
						?>
							
						</td>
	</tr>
	<tr>
		<td>Stok : </td><td><input type="text" name="stok" value="<?= $l['stok']?>"></td>
	</tr>
	<tr>
		<td>Harga Jual : </td><td><input type="text" name="harga_jual" value="<?= $l['harga_jual']?>"></td>
	</tr>
	<tr>
		<td colspan="3"><center><input type="submit" name="simpan" value="Simpan"></center></td>
	</tr>
	</form>
	<tr>
		<td colspan="4"><center><a href="list_barang.php"><button>Mbalek</button></a></center></td>
	</tr>
</table>
</body>
</html>