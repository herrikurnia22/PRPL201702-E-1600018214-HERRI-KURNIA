<?php
// membuat koneksi
$konek = new mysqli("localhost","root","","restoran");

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

// membuat table customer
$sql = "CREATE TABLE customer(
  idcustomer INT(15) NOT NULL PRIMARY KEY,
  namacustomer VARCHAR(30) NOT NULL,
  username VARCHAR (30) NOT NULL,
  password VARCHAR(30) NOT NULL,
  alamatcustomer VARCHAR(50) NOT NULL,
  emailcustomer VARCHAR(50)
) ENGINE=InnoDB DEFAULT CHARSET=latin1";

/*
// membuat table menu
$sql = "CREATE TABLE menu(
  idmenu VARCHAR(15) NOT NULL PRIMARY KEY,
  namamenu VARCHAR(30),
  harga int(15)
)";

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
