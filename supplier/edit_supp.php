<?php
   $conn = mysql_connect("localhost","root","");
   mysql_select_db("pendjualan1", $conn);

   	if ($_POST["simpan"])
   	{
   		$id_supplier=$_POST['id_supplier'];
   		$nama_supplier=$_POST['nama_supplier'];
   		$alamat=$_POST['alamat'];
   		$telp=$_POST['telp'];
   		
   		$query=mysql_query("UPDATE supplier SET nama_supplier='$nama_supplier', alamat='$alamat', telp='$telp' WHERE id_supplier='$id_supplier'");
   		$f=mysql_query($query);
   		header("location:list_supp.php");
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
			$s="select * from supplier where id_supplier='".$_GET["id_supplier"]."'";
			$q=mysql_query($s)or die(mysql_error());
			$l=mysql_fetch_array($q);
		?>
	<form action="" method="post">
	<tr>
		<td colspan="4"><center><b>Edit</b></center></td>
	</tr>
	<tr>
		<td>ID : </td><td><input type="text" name="id_supplier" value="<?php echo $l['id_supplier'] ?>" readonly></td>
	</tr>
	<tr>
		<td>Nama Toko : </td><td><input type="text" name="nama_supplier" value="<?php echo $l['nama_supplier'] ?>"></td>
	</tr>
	<tr>
		<td>Alamat : </td><td><input type="text" name="alamat" value="<?php echo $l['alamat'] ?>"></td>
	</tr>
	<tr>
		<td>Kepala : </td><td><input type="text" name="telp" value="<?php echo $l['telp'] ?>"></td>
	</tr>
	<tr>
		<td colspan="3"><center><input type="submit" name="simpan" value="Edit"></center></td>
	</tr>
	</form>
</table>
</body>
</html>