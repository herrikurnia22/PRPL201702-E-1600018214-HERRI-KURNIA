<html>
<head>
	<link href ="struk.css" rel = "stylesheet" type="text/css" media = "all" />
	<script type="text/javascript">
		
	</script>
</head><center>
<body>
<table border="1">
	<div class="container">
		<h1> Alpa Resto </h1>
		<h2> Total Pembayaran </h2>
		<h3> Jalan Janturan No 237 , Yogyakarta</h3>
		<h2> ==================== </h2>	

<?php
$tgl_skrg = date("d-m-Y");

$host = "localhost";
$username = "root";
$password = "";
$db_name = "restoran";

$konek = new mysqli($host, $username, $password , $db_name);


if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}else {

$idpesanan = $_GET['idpesanan'];

$sql = "select * from pesan where idpesanan = '$idpesanan' ";
$data = $konek->query($sql);
echo "<table border='0'>";

if ($data->num_rows > 0){
	while ($row = $data->fetch_assoc()) {
		echo "<center>";
		echo "<tr>";
		echo "<td>TANGGAL </td>";
		echo "<td> : </td>";
		echo "<td> $tgl_skrg </td>";
		echo "</tr>";
		echo "<td></td>";
		echo "<tr>";
		echo "<td> NAMA PEMESAN </td>";
		echo "<td> : </td>";
		echo "<td>".$row['username']."</td>";
		echo "</tr>";
		echo "<td></td>";
		echo "<tr>";
		echo "<td> Nasi Goreng </td>";
		echo "<td> : </td>";
		echo "<td>".$row['menu1']*15000;
		echo "</td>";
		echo "<td>".$row['menu1']."</td>";
		echo "<td>x 15000</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> Mie Goreng </td>";
		echo "<td> : </td>";
		echo "<td>".$row['menu2']*15000;
		echo "</td>";
		echo "<td>".$row['menu2']."</td>";
		echo "<td>x 13000</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> Bakso Malang </td>";
		echo "<td> : </td>";
		echo "<td>".$row['menu3']*15000;
		echo "</td>";
		echo "<td>".$row['menu3']."</td>";
		echo "<td>x 15000</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> Sate Padang </td>";
		echo "<td> : </td>";
		echo "<td>".$row['menu4']*15000;
		echo "</td>";
		echo "<td>".$row['menu4']."</td>";
		echo "</tr>";
		echo "<td>x 15000</td>";
		echo "<tr>";
		echo "<td> Es Teh</td>";
		echo "<td> : </td>";
		echo "<td>".$row['menu5']*7000;
		echo "</td>";
		echo "<td>".$row['menu5']."</td>";
		echo "<td>x 5000</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td> Kopi Robusta </td>";
		echo "<td> : </td>";
		echo "<td>".$row['menu6']*7000;
		echo "</td>";
		echo "<td>".$row['menu6']."</td>";
		echo "<td>x 8000</td>";
		echo "</tr>";
		echo "<td></td>";
		echo "<tr>";
		echo "<td><b> JUMLAH BARANG </td>";
		echo "<td><b> : </td>";
		echo "<td></td>";
		echo "<td><b>".$row['totalbarang'];
		echo "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td><b> TOTAL HARGA </td>";
		echo "<td><b> : </td>";
		echo "<td></td>";
		echo "<td><b>".$row['bayar'];
		echo "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td><b> UANG PEMBAYARAN </td>";
		echo "<td><b> : </td>";
		echo "<td></td>";
		echo "<td><b>".$row['dibayar'];
		echo "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td><b> UANG KEMBALIAN </td>";
		echo "<td><b> : </td>";
		echo "<td></td>";
		echo "<td><b>".$row['kembalian1'];
		echo "</td>";
		echo "</tr>";
		echo "</table>";
		echo "</center>";
		
	}	
}else{
	echo"Tidak dapat di cetak";
}
	echo"<br>";
echo "<center>";
	echo"<a href='' onClick=window.print();> Print </a>";
echo "</center>";	
	
	

}
$konek->close();
?>
</div>
</table>
</center>
</body>
</html>