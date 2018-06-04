<?php
// membuat koneksi
$konek = new mysqli("localhost","root","","restoran");

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}
 
$host = "localhost";
$username = "root";
$password = "";
$db_name = "restoran";

$konek = new mysqli($host, $username, $password , $db_name);

if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

//$idcustomer = $_POST['idcustomer'];
$username = $_POST['username'];
$tanggal = $_POST['tanggal'];
$alamat = $_POST['alamat'];
$order1 = $_POST['order1'];
$order2 = $_POST['order2'];
$order3 = $_POST['order3'];
$order4 = $_POST['order4'];
$order5 = $_POST['order5'];
$order6 = $_POST['order6'];
$totalbarang = $_POST['totalbarang'];
$bayar = $_POST['bayar'];

 //echo"Bayar =  $bayar";
 
$sql = "INSERT INTO pesan (username,alamat,tanggal,order1,order2,order3,order4,order5,order6,totalbarang,bayar)VALUES ('$username','$alamat','$tanggal','$order1','$order2','$order3','$order4','$order5','$order6','$totalbarang','$bayar')";

//,'$order1','$order2','$order3','$order4','$order5','$order6','$order7','$order8','$order9','$order10','$order11','$order12'
//,101,102,103,104,201,202,203,204,301,302,303,304



if($konek->query($sql)){
  echo "data pesanan BERHASIL dibuat!<br/>";
}else{
  echo "data pesanan GAGAL dibuat : ".$konek->error."<br/>";
}
$konek->close();
echo "<a href='tampil_pesan.php'>Daftar Pesan</a>";
?>
