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
	<th>Nama Toko</th>
	<th>Nama Barang</th>
	<th>Nama Supplier</th>
	<th>Stok</th>
	<th>Harga Jual</th>
	<th colspan="3">Lain</th>
	<tr>
		<?php
			include 'config.php';
			$query = mysql_query("select b.id_barang, c.nama_toko, b.nama_barang, s.nama_supplier, b.stok, b.harga_jual FROM barang b, cabang c, supplier s WHERE b.id_cabang = c.id_cabang AND b.id_supplier = s.id_supplier");
			$sql = mysql_query("select * from barang");
			$total = mysql_num_rows($sql);
			while($hasil = mysql_fetch_assoc($query)){
		?>
        	<tr>
        	<td><center><?= $hasil['id_barang']?></center></td>
        	<td><center><?= $hasil['nama_toko']?></center></td>
        	<td><center><?= $hasil['nama_barang']?></center></td>
        	<td><center><?= $hasil['nama_supplier']?></center></td>
        	<td><center><?= $hasil['stok']?></center></td>
        	<td><center><?= $hasil['harga_jual']?></center></td>
        	<td><center><a href='delete_barang.php?id_barang= <?php echo $hasil["id_barang"] ?>'><button class="btn">Delete</button></a></center></td>
        	<td><center><a href='edit_barang.php?id_barang= <?php echo $hasil["id_barang"] ?>'><button class="btn">Edit</button></a></center></td>
			</tr>
<?php
    }
    ?>
	</tr>
	<tr>
		<td colspan="8"><center><a href="barang.php"><button>Mbalek</button></a></center></td>
	</tr>
</table>
</body>
</html>