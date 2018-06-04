<?php
// membuat koneksi
$konek = new mysqli("localhost","root","","restoran");

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$idcustomer = $_POST['idcustomer'];
$namacustomer= $_POST['namacustomer'];
$alamatcustomer = $_POST['alamatcustomer'];
$emailcustomer= $_POST['emailcustomer'];

$sql = "UPDATE customer SET namacustomer='$namacustomer',alamatcustomer='$alamatcustomer',emailcustomer='$emailcustomer' WHERE idcustomer='$idcustomer'";
if($konek->query($sql)){
  echo "Data customer BERHASIL diedit!<br/>";
}else{
  echo "Data customer GAGAL diedit : ".$konek->error."<br/>";
}

$konek->close();
echo "<a href='tampil_customer.php'>Daftar customer</a>";
?>

<html>
 <body background='abc.jpg'> </html>