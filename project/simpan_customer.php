<?php
// membuat koneksi
$konek = new mysqli("localhost","root","","restoran");

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$namacustomer=$_POST['namacustomer'];
$alamatcustomer=$_POST['alamatcustomer'];
$emailcustomer=$_POST['emailcustomer'];
$username=$_POST['username'];
$password = md5($_POST['password']);

// membuat table customer
$sql = "INSERT INTO customer( namacustomer, alamatcustomer, emailcustomer, username, password) VALUES ('$namacustomer','$alamatcustomer','$emailcustomer','$username','$password')";

if($konek->query($sql)){
  echo "data customer BERHASIL dibuat!<br/>";
}else{
  echo "data customer GAGAL dibuat : ".$konek->error."<br/>";
}
$konek->close();
echo "<a href='index.php'>Berhasil Menjadi Customer Kami</a>";
?>

<html>
 <body background='abc.jpg'> </html>