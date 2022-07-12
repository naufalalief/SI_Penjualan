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
		<td colspan="6"><center><b>List</b></center></td>
	</tr>
	<th>ID</th>
	<th>Nama Toko</th>
	<th>Alamat</th>
	<th>Kepala</th>
	<th colspan="2">Lain</th>
	<tr>
		<?php
			include 'config.php';
			$query = mysql_query("select * from cabang");
			$sql = mysql_query("select * from cabang");
			$total = mysql_num_rows($sql);
			while($hasil = mysql_fetch_assoc($sql)){
		?>
        	<tr>
        	<td><center><?= $hasil['id_cabang']?></center></td>
        	<td><center><?= $hasil['nama_toko']?></center></td>
        	<td><center><?= $hasil['alamat']?></center></td>
        	<td><center><?= $hasil['kepala']?></center></td>
        	<td><center><a href='delete_cabang.php?id_cabang= <?php echo $hasil["id_cabang"] ?>'><button class="btn">Delete</button></a></center></td>
        	<td><center><a href='edit_cabang.php?id_cabang= <?php echo $hasil["id_cabang"] ?>'><button class="btn">Edit</button></a></center></td>
			</tr>
<?php
    }
    ?>
	</tr>
	<tr>
		<td colspan="6"><center><a href="cabang.php"><button>Mbalek</button></a></center></td>
	</tr>
</table>
</body>
</html>