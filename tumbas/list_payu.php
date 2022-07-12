<!DOCTYPE html>
<html>
<head>
	<title>List</title>
</head>
<style type="text/css">
	html{
		background-image: url("2.jpg");
		background-repeat: no-repeat;
		background-size: 100%;
	}
	table{
		margin-top: 150px;
		border: 1px solid black;
		background-color: rgba(106, 90, 205, 0.5);
		padding: 15px;
		width: 1000px;
		color: black;
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
	<tr>
		<td colspan="8"><center><b>List</b></center></td>
	</tr>
	<th>ID</th>
	<th>Nama Barang</th>
	<th>Tanggal Payu</th>
	<th>Jumlah</th>
	<th>Harga</th>
	<th colspan="3">Lain</th>
	<tr>
		<?php
			include 'config.php';
			$query = mysql_query("select p.id_penjualan, b.nama_barang, p.tgl_penjualan, p.jumlah, p.harga from penjualan p, barang b WHERE b.id_barang = p.id_barang");
			$sql = mysql_query("select * from barang");
			$total = mysql_num_rows($sql);
			while($hasil = mysql_fetch_assoc($query)){
		?>
        	<tr>
        	<td><center><?= $hasil['id_penjualan']?></center></td>
        	<td><center><?= $hasil['nama_barang']?></center></td>
        	<td><center><?= $hasil['tgl_penjualan']?></center></td>
        	<td><center><?= $hasil['jumlah']?></center></td>
        	<td><center><?= $hasil['harga']?></center></td>
        	<td><center><a href='delete_penjualan.php?id_penjualan= <?php echo $hasil["id_penjualan"] ?>'><button class="btn">Delete</button></a></center></td>
        	<td><center><a href='edit_penjualan.php?id_penjualan= <?php echo $hasil["id_penjualan"] ?>'><button class="btn">Edit</button></a></center></td>
			</tr>
<?php
    }
    ?>
	</tr>
	<tr>
		<td colspan="8"><center><a href="tumbas.php"><button>Mbalek</button></a></center></td>
	</tr>
</table>
</body>
</html>