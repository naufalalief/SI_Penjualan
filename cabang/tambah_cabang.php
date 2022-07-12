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
		$id_cabang=$_POST['id_cabang'];
		$nama_toko=$_POST['nama_toko'];
		$alamat=$_POST['alamat'];
		$kepala=$_POST['kepala'];

		$query="insert into cabang (id_cabang, nama_toko, alamat, kepala) values ('$id_cabang', '$nama_toko', '$alamat', '$kepala')";
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
	<form action="" method="post">
	<tr>
		<td colspan="3"><center><b>Tambah Cabang</b></center></td>
	</tr>
	<tr>
		<td>ID</td><td><input type="text" name="id_cabang" class="ipt" id="id_cabang" readonly=""></td>
	</tr>
	<tr>
		<td>Nama Toko  </td><td><input type="text" name="nama_toko" class="ipt"></td>
	</tr>
	<tr>
		<td>Alamat  </td><td><input type="text" name="alamat" class="ipt"></td>
	</tr>
	<tr>
		<td>Kepala  </td><td><input type="text" name="kepala" class="ipt"></td>
	</tr>
	<tr>
		<td colspan="3"><center><input type="submit" name="simpan" value="Simpan" class="ipt2"></center></td>
	</tr>
</form>
	<tr>
		<td colspan="4"><center><a href="cabang.php"><button>Mbalek</button></a></center></td>
	</tr>
</table>
</body>
</html>
<script type="text/javascript">
	id_cabang.value = <?= rand();?>
</script>