<html> <body background="www3.jpg">
<?php 
include 'config.php';
 
$username = $_POST['username'];
$password = md5($_POST['password']);
 
$login = mysql_query("select * from customer where username='$username' and password='$password'");
$cek = mysql_num_rows($login);
 
if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:index.php");
}else{ 
	echo"<br><br><br><br>";
	echo"<div class='kotak'>
		<form >
	<h4>
	<center>Login Gagal ...!<br>
	<center>Username dan Password Tidak Valid !<br>
	<a class='tombol' href='menulogin.php'> Login </a>
	<a class='tombol1' href='indexawal.php'> Home </a>
	<br><br>
	</form>
	</div> " ;
	
}
 
?>
<style>

.tombol {
  position : left;
  float : left;
  background: #3498db;
  color: #fff;
  border: 0;
  padding: 5px 8px;
  margin: 20px 0px;
}

.tombol1 {
  position : right;
  float : right;
  background: #3498db;
  color: #fff;
  border: 0;
  padding: 5px 8px;
  margin: 20px 0px;
}
.kotak {
  padding: 1em;
  margin: 2em auto;
  width: 17em;
  background: #fff;
  border-radius: 3px;
}
</style>

</body>
</html> 