<?php

	error_reporting(0);

	$db = "pendjualan1";
	$user = "root";
	$pass = "";
	$host = "localhost";

	$conn = mysql_connect($host, $user, $pass) or die ("gagal");
	mysql_select_db($db, $conn);

	if($_POST["simpan"])
	{

		$id_barang = $_POST["id_barang"];
		$tgl_penjualan = $_POST["tgl_penjualan"];
		$jumlah = $_POST["jumlah"];
		$harga = $_POST["harga"];

		// Mengambil data dari database
		$barang_before = mysql_query("SELECT * FROM penjualan WHERE id_penjualan = $id_penjualan", $conn);
		$barang_before_data = mysql_fetch_array($barang_before);
		//
		$barang_before2 = mysql_query("SELECT * FROM barang WHERE id_barang = $id_barang", $conn);
		$barang_before_data2 = mysql_fetch_array($barang_before2);

		// Pengurangan
		$stok_baru = $_POST['jumlah'] - $barang_before_data['jumlah'];
		//
		$stok_recover = $stok_baru + $barang_before_data2['stok'];
		// Update stok terbaru
		mysql_query("UPDATE barang SET stok = '$stok_recover' WHERE id_barang = $id_barang", $conn);

		$save = mysql_query("UPDATE penjualan set jumlah = $jumlah, harga = $harga");

		header("location : tumbas.php");

	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Pen(d)jualan</title>
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
		width: ;
	}
	.button{
		width: 100px;
	}
	select{
		width: 150px;
	}
</style>
<body>
	<?php
		$s="select * from penjualan where id_penjualan ='".$_GET["id_penjualan"]."'";
		$q=mysql_query($s)or die(mysql_error());
		$l=mysql_fetch_array($q);
	?>
	<?php
	$perintah="select p.id_penjualan, b.id_barang, b.nama_barang, b.harga_jual from barang b, penjualan p where b.id_barang=p.id_barang and id_penjualan = '".$_GET["id_penjualan"]."'";
	$query= mysql_query($perintah,$conn);
	?>

<table align="center">
	<form action="" method="post">
		<tr>
			<td colspan="2"><center>Transaksi</center></td>
		</tr>
		<tr>
			<td>Barang </td>
			<td> :
				<select name="id_barang" id="id_barang">
				<option selected="selected">Pilih </option>
				<?php while($wew=mysql_fetch_array($query)){?>
				<option value="<?php echo $wew['id_barang'];?>" harga="<?=$wew['harga_jual']?>">
				<?php echo $wew['nama_barang'];?></option>
				<?php } ?>
				</select>
			</td></tr>
			<tr><td>Harga :</td><td>
				<?php while($wew2=mysql_fetch_array($query)){?>
				<input type="text" name="harga1" value=<?php echo $wew2['harga1']; ?>>
				<?php } ?>
				<input type="text" name="" id="harga1" readonly="readonly">
			</td>
		</tr>
		<tr>
			<td>Jumlah :</td>
			<td><input type="text" name="jumlah" id="jumlah" placeholder="Jumlah.." required></td>
		</tr>
		<tr>
			<td>Harga :</td>
			<td><input type="text" id="harga" name="harga" placeholder="Harga.." required"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" class="button" name="simpan" id="button1" value="Simpan"></td>
		</tr>
	</form>
		<tr>
			<td colspan="2" align="center"><a href="list_payu.php"><button class="button">Kembali</button></a></td>
		</tr>
</table>
 		<script type="text/javascript">
			const id_barang = document.getElementById('id_barang')
			const harga1 = document.getElementById('harga1')
			const jumlah = document.getElementById('jumlah')
			const harga = document.getElementById('harga')

			let hargaD = ''

			let hargaBarang

			jumlah.addEventListener('keyup', function(e) {
				harga.value = (parseInt(hargaBarang) || 0) * (parseInt(e.target.value) || 0)
			})

			id_barang.addEventListener('change', function(e) {
				hargaBarang = this.options[this.selectedIndex].getAttribute('harga')
				harga1.value = hargaBarang
			})

		</script> 
</body>
</html>	