<?php
	error_reporting(0);
   $conn = mysql_connect("localhost","root","");
   mysql_select_db("pendjualan1", $conn);

   	if ($_POST["simpan"])
   	{
   		$id_cabang=$_POST['id_cabang'];
   		$nama_toko=$_POST['nama_toko'];
   		$alamat=$_POST['alamat'];
   		$kepala=$_POST['kepala'];
   		
   		$query=mysql_query("UPDATE cabang SET nama_toko='$nama_toko', alamat='$alamat', kepala='$kepala' WHERE id_cabang='$id_cabang'");
   		$f=mysql_query($query);
   		header("location:list_cabang.php");
   	}
   ?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
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
			$s="select * from cabang where id_cabang='".$_GET["id_cabang"]."'";
			$q=mysql_query($s)or die(mysql_error());
			$l=mysql_fetch_array($q);
		?>
	<form action="" method="post">
	<tr>
		<td colspan="4"><center><b>Edit</b></center></td>
	</tr>
	<tr>
		<td>ID : </td><td><input type="text" name="id_cabang" value="<?php echo $l['id_cabang'] ?>" readonly></td>
	</tr>
	<tr>
		<td>Nama Toko : </td><td><input type="text" name="nama_toko" value="<?php echo $l['nama_toko'] ?>"></td>
	</tr>
	<tr>
		<td>Alamat : </td><td><input type="text" name="alamat" value="<?php echo $l['alamat'] ?>"></td>
	</tr>
	<tr>
		<td>Kepala : </td><td><input type="text" name="kepala" value="<?php echo $l['kepala'] ?>"></td>
	</tr>
	<tr>
		<td colspan="3"><center><input type="submit" name="simpan" value="Edit"></center></td>
	</tr>
	</form>
</table>
</body>
</html>