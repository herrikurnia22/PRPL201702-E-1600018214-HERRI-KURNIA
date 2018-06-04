<?php
// membuat koneksi
$konek = new mysqli("localhost","root","","restoran");

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$nama=$_POST['nama'];
$email=$_POST['email'];
$komentar=$_POST['komentar'];

// membuat table customer
$sql = "INSERT INTO saran(nama, email, komentar) VALUES ('$nama','$email','$komentar')";

if($konek->query($sql)){
  echo "data komentar BERHASIL dibuat!<br/>";
}else{
  echo "data komentar GAGAL dibuat : ".$konek->error."<br/>";
}
$konek->close();
echo "<a href='index.php'>Saran sudah tersimpan</a>";
?>

<html>
 <body background='abc.jpg'> </html>