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
	.mbalek{
		width: 210px;
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
		<td colspan="2"><b>Sistem Informasi Penjualan</b></td>
	</tr>
	<tr>
		<td><center><a href="cabang\cabang.php"><button>Cabang</button></a></center></td>
		<td><center><a href="supplier\supplier.php"><button>Suppler</button></a></center></td>
	</tr>
	<tr>
		<td><center><a href="barang\barang.php"><button>Barang</button></a></center></td>
		<td><center><a href="tumbas\tumbas.php"><button>Tumbas</button></a></center></td>
	</tr>
	<tr>
		<td colspan="2"><center><a href="../"><button class="mbalek">Mbalek</button></a></center></td>
	</tr>
</table>
</body>
</html>