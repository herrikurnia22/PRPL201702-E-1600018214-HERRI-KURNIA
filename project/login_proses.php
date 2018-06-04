<?php
include '../koneksi.php';
$idcustomer = $_POST['idcustomer'];
$password = md5($_POST['password']);
$login    = mysqli_query($connect, "select * from customer where idcustomer ='$idcustomer' and password='$password'");
$result   = mysqli_num_rows($login);

	if($result>0){
		$user = mysqli_fecth_array($login);
		session_start();
		$_SESSION['idcustomer'] = $user ['idcustomer'];
		header("location:index.php");}
		else{
		header("location:login.php");
		echo "LOGIN GAGAL !!!  ";
	}
?>