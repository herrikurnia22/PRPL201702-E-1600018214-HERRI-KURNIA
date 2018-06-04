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
*/

// membuat table menu
$sql = "CREATE TABLE menu(
  idmenu VARCHAR(15) NOT NULL PRIMARY KEY,
  namamenu VARCHAR(30),
  harga int(15)
)";

/*
$sql = "CREATE TABLE  menu(
  idmenu varchar(15) NOT NULL PRIMARY KEY,
  name varchar(255) NOT NULL,
  image varchar(255) NOT NULL,
  price double(10,2) 
)  ";
*/
/*
//membuat table pesan / order
$sql = "CREATE TABLE nilai (
	idcustomer VARCHAR(15)NOT NULL, 
	idmenu VARCHAR(15) NOT NULL, 
	jumlah int (15), 
	FOREIGN KEY (idcustomer) REFERENCES customer(idcustomer),
	FOREIGN KEY (idmenu)REFERENCES pesan(idmenu)
)";
*/
if($konek->query($sql)){
  echo "Table Menu BERHASIL dibuat!<br/>";
}else{
  echo "Table Menu GAGAL dibuat : ".$konek->error;
}
$konek->close();
?>
