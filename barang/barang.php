<!DOCTYPE html>
<html>
<head>
	<title>Pe(n)djualan</title>
</head>
<style type="text/css">
	html{
		background-image: url("waifu.jpg");
		background-repeat: no-repeat;
		background-size: 100%;
	}
	table{
		margin-top: 150px;
		border: 1px solid black;
		background-color: rgba(106, 90, 205, 0.5);
		padding: 15px;
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
		<td><b>Sistem Informasi Penjualan</b></td>
	</tr>
	<tr>
		<td><center><a href="list_barang.php"><button>Ndelok</button></a></center></td>
	</tr>
	<tr>
		<td><center><a href="tambah_barang.php"><button>Tambah</button></a></center></td>
	</tr>
	<tr>
		<td><center><a href="../"><button>Mbalek</button></a></center></td>
	</tr>
</table>
</body>
</html>