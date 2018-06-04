<?php
// membuat koneksi
$konek = new mysqli("localhost","root","","restoran");

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

//membuat table saran
$sql = "CREATE TABLE saran (
	nama VARCHAR(15)NOT NULL, 
	email VARCHAR(50)NOT NULL,
	komentar VARCHAR(50)NOT NULL
	)";

if($konek->query($sql)){
  echo "Table saran BERHASIL dibuat!<br/>";
}else{
  echo "Table saran GAGAL dibuat : ".$konek->error;
}
$konek->close();
?>
