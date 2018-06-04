<html>
<head>
	<title>ALFA RESTO</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="www3.jpg">
	<br/><br>
	<center><a href="indexawal.php"><img src="images/LOGO.png" alt="logo" width="165" height="74"></a></center>
	<br/>
	<center><h2>Alpa Resto</h2></center>	
	<br/>
	<div class="login">
	<br/>
		<form action="login.php" method="post" onSubmit="return validasi()">
			<div>
				<label>Username:</label>
				<input type="text" name="username" id="username" />
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password" />
			</div>			
			<div>
				<input type="submit" value="Login" class="tombol"> 
				<a class="tombol1" align="right" href="indexawal.php">home </a>
			</div>
				
		</form>
	</div>
</body>
 
<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
 
</script>
<style>
body {
  
  font-family: sans-serif;
}
 
h2 {
  color: #fff;
}
 
.login {
  padding: 1em;
  margin: 2em auto;
  width: 17em;
  background: #fff;
  border-radius: 3px;
}
 
label {
  font-size: 10pt;
  color: #555;
}
 
input[type="text"],
input[type="password"],
textarea {
  padding: 8px;
  width: 95%;
  background: #efefef;
  border: 0;
  font-size: 10pt;
  margin: 6px 0px;
}
 
.tombol {
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
</style>

</html>

