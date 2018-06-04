<?php
// membuat koneksi
$konek = new mysqli("localhost","root","","restoran");

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}
/*
// membuat table customer
$sql = "CREATE TABLE customer(
  idcustomer VARCHAR(15) NOT NULL,
  namacustomer VARCHAR(30),
  alamatcustomer VARCHAR(50),
  emailcustomer VARCHAR(50),
   PRIMARY KEY (idcustomer)
)";

// membuat table menu
$sql = "CREATE TABLE menu(
  idmenu VARCHAR(15) NOT NULL,
  namamenu VARCHAR(30),
  harga int(15),
   PRIMARY KEY (idmenu)
)";
*/

//membuat table pesan / order
$sql = "CREATE TABLE pesan (
	idpesanan INT (15) NOT NULL PRIMARY KEY,
	username VARCHAR (15) NOT NULL,
	tanggal VARCHAR (15) NOT NULL,
	alamat VARCHAR (50) NOT NULL,
	menu1 int (15) NOT NULL, 
	menu2 int (15) NOT NULL, 
	menu3 int (15) NOT NULL, 
	menu4 int (15) NOT NULL, 
	menu5 int (15) NOT NULL, 
	menu6 int (15) NOT NULL,
	totalbarang int (15) NOT NULL, 
	bayar int (15) NOT NULL
)";



if($konek->query($sql)){
  echo "Table Pesan BERHASIL dibuat!<br/>";
}else{
  echo "Table Pesan GAGAL dibuat : ".$konek->error;
}
$konek->close();
?>
