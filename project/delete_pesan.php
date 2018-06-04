<?php
// membuat koneksi
$konek = new mysqli("localhost","root","","restoran");

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$idpesanan= $_GET['idpesanan'];

$sql = "DELETE FROM pesan WHERE idpesanan='$idpesanan'";
if($konek->query($sql)){
  echo "Data pesan BERHASIL dihapus!<br/>";
}else{
  echo "Data pesan GAGAL dihapus : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tampil_pesan.php'>Daftar Pesan</a>";
?>

<html>
 <body background='abc.jpg'> </html>