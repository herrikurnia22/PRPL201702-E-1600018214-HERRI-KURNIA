<?php
include 'koneksi.php';
?>
<html>
 <body background='abc.jpg'> </html>
 
 
<html lang="en">
<head>
	<title>Alpha Resto</title>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <script src="js/jquery.js"></script> 
	<script src="js/jquery.glide.js"></script>
    
    <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/animate.css">
    <script type="text/javascript" src="js/MyJQ.js"></script>
    <script src="js/jquery.localScroll.min.js" type="text/javascript"></script>
	<script src="js/jquery.scrollTo.min.js" type="text/javascript"></script> 
    <script src="js/wow.min.js" type="text/javascript"></script> 

<!-- scroll function -->
<script type="text/javascript">
$(document).ready(function() {
   $('#navigations').localScroll({duration:800});
});
</script>


<script src="js/wow.min.js"></script>
<script>
new WOW().init();
</script>


</head>
<body>


<!--============ Navigation ============-->

<div class="headerwrapper">
	<div id="header" class="container">
		<div class="logo"> <a href="index.php"><img src="images/LOGO.png" alt="logo" width="165" height="74"></a> </div> <!--end of Logo-->
        <nav>
            <ul id="navigations">
                <li><a href="index.php">HOME</a></li>
                <li> <a href="daftar.php">REGISTRASI</a></li>
                <li><a href="pesan.php">ORDER</a></li>
                <li><a href="menu.php">MENU</a></li>
                <li><a href="saran.php">CONTACT</a></li>
				<li><a href="tampil_pesan.php">DAFTAR PESAN</a></li>
            </ul>
        </nav>
      </div> <!--end of header-->
</div> <!-- end of headerwrapper-->

<style>
.pesan{ height:500px; width:100%;  border-top:6px solid rgba(236, 225, 217, 0.4); border-bottom:6px solid rgba(236, 225, 217, 0.4); } 
.pesan{text-align:center;}
.pesan #pesanan{}
.pesan #pesanan h3{ color:#cf0e1e; font-size:20px;  letter-spacing:8px; font-family:Economica-bold; margin-top:30px; margin-bottom:50px;}
 
 .name{background:#383636;  width:200px; height:60px; background-image:url(../images/icon4.png); background-position:7px 7px; background-repeat:no-repeat; border-radius:8px; border:0px; color:white; font-size:25px; font-family:hansen; padding:0 30px;
 line-height:87px; background-position:95% 50%; margin-bottom:20px; float:left;}
 
 .name1{background:#383636;  width:200px; height:60px; background-image:url(../images/icon4.png); background-position:7px 7px; background-repeat:no-repeat; border-radius:8px; border:0px; color:white; font-size:25px; font-family:hansen; padding:0 30px;
 line-height:87px; background-position:95% 50%; margin-bottom:20px; float:right; }
	
 	
 .booknow{ background:#ff5a0b; height:55px; border-radius:10px; border:0px; width:100px; margin-top:20px; border-bottom:5px solid #c84d29; margin-bottom:40px; font-family:OSWALD-BOLD; font-size:30px; color:white; line-height:47px; cursor:pointer;}
 .booknow:active{ top:2px; border-bottom:3px solid #c84d29;}
 .booknow:hover{}
 
 .booknow{position:relative;}

 .kiri {  background-position:95% 50%; margin-bottom:20px; float:left;	}
	
 .kanan{ background-position:95% 50%; margin-bottom:20px; float:right; }

 
</style>

<div class="container" id="orderline">
    <h2 class="wow fadeInUp" data-wow-delay="0.3s"><center> Daftar Pesanan</center></h2>
  <form action="cari_customer.php" method="POST">
    <center><h4><a class="">Masukkan Nama </a>
	<input type="text" class="persons wow zoomIn" name="namacustomer" placeholder="Isi dengan ID / Nama" />
	<input class="booknow wow fadeInUp" type="submit" name="cari" value="search" /></center> 
    </form>
	
<center>

<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
	
</style>
		
	<table border="1">
		<tr>
		<td>Id Customer</td>
		<td>Nama Customer</td>
		<td>Alamat Pemesan </td>
		<td>Email</td>
		<center>
		<td colspan=1><center>Aksi</center></td>
		</tr> 
		
	<?php
	
    $select = mysqli_query($conn, "SELECT * FROM customer");
	
	
	if ($select->num_rows > 0){
	$no = 1; 
  while ($row = $select->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row['idcustomer']."</td>";
    echo "<td>".$row['namacustomer']."</td>";
    echo "<td>".$row['alamatcustomer']."</td>";
	echo "<td>".$row['emailcustomer']."</td>";
   
    echo "<td><a href='delete_customer.php?idcustomer=".$row['idcustomer']."'>Hapus</a></td>";
    echo "</tr>";
  }
}else{
echo '<tr><td colspan="4"> Data Yang Dicari Tidak ada ...!!! <td></tr>';
	}
	 ?>
</table>

</table>

<center><a href='index.php'>Kembali ke Home</a></center>
</center>	<br><br>
	
<!--============ COPYRIGHTS ============-->
<div class="bawah">
    <div id="bwh" class="container">
		<center>
 	   <p>Copyright 2018 <a href=  "#"> Herri Kurnia </a> All Rights Reserved</p>
		</center>
    </div> <!-- end of copyrights-->
</div> <!-- end of website-->
	
	
	</body>
		</html>

