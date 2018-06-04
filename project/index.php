
 <?php 
include 'config.php';
 
// mengaktifkan session
session_start();
 
// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("location:menulogin.php");
}
 
// menampilkan pesan selamat datang
echo "<center>Hai, selamat datang ". $_SESSION['username'];
 
?>

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
	
	<script language="javascript">
function getkey(e)
{
if (window.event)
   return window.event.keyCode;
else if (e)
   return e.which;
else
   return null;
}
function goodchars(e, goods, field)
{
var key, keychar;
key = getkey(e);
if (key == null) return true;
 
keychar = String.fromCharCode(key);
keychar = keychar.toLowerCase();
goods = goods.toLowerCase();
 
// check goodkeys
if (goods.indexOf(keychar) != -1)
    return true;
// control keys
if ( key==null || key==0 || key==8 || key==9 || key==27 )
   return true;
    
if (key == 13) {
    var i;
    for (i = 0; i < field.form.elements.length; i++)
        if (field == field.form.elements[i])
            break;
    i = (i + 1) % field.form.elements.length;
    field.form.elements[i].focus();
    return false;
    };
// else return false
return false;
}
</script>
   


<!--============ Navigation ============-->

<div class="headerwrapper">
	<div id="header" class="container">
		<div class="logo"> <a href="index.php"><img src="images/LOGO.png" alt="logo" width="165" height="74"></a> </div> <!--end of Logo-->
        <nav>
            <ul id="navigations">
                <h5><li><a href="index.php">HOME</a></li>
                <li> <a href="daftar.php">REGISTRASI</a></li>
                <li><a href="pesan.php">ORDER</a></li>
                <li><a href="#bestdishes">MENU</a></li>
                <li><a href="#copyrights">CONTACT</a></li>
				<li><a href="tampil_pesan.php">DAFTAR PESAN</a></li>
				<li><a href="logout.php">LOGOUT</a></li>
				</h5>
            </ul>
        </nav>
      </div> <!--end of header-->
</div> <!-- end of headerwrapper-->


<!--============ Best Dishes ============-->

<div class="bestdisheswrapper">
    <div id="bestdishes" class="container">
		 <h2 class="wow fadeInUp" data-wow-delay="0.3s">MENU</h2>
		   <div class="slider">
      		    <ul class="slides">
          	 	 <li class="slide">
                    <div class="item">
                          <img src="images/miegoreng.png" width="226" height="225" alt="sliderimg" class="wow flipInX"
                           data-wow-delay=".8s"> 
                          <h3>Mie Goreng</h3>Rp. 13.000 (idmenu mkn2)
                      </div> <!-- end of item-->
                      
                   <div class="item2">
                          <img src="images/esteh.png" width="226" height="225" alt="sliderimg" class="wow flipInX"
                           data-wow-delay=".8s"> 
                          <h3>Es teh</h3>Rp. 5.000 (idmenu mnm1)
                      </div> <!-- end of item-->
                      
                   <div class="item3">
                          <img src="images/nasigoreng.png" width="226" height="225" alt="rimg" class="wow flipInX"
                           data-wow-delay=".8s"> 
                           <h3>Nasi Goreng</h3>Rp. 15.000 (idmenu mkn1)
                      </div> <!-- end of item-->
                  </li>
                   <li class="slide">
                    <div class="item">
                          <img src="images/bakso.png" width="226" height="225" alt="sliderimg" > 
                          <h3>Bakso Malang</h3>Rp. 15.000 (idmenu mkn3)
                      </div> <!-- end of item-->
                      
                   <div class="item2">
                          <img src="images/kopi.png" width="226" height="225" alt="sliderimg"> 
                          <h3>Kopi Robusta</h3>Rp. 8.000 (idmenu mnm2)
                      </div> <!-- end of item-->
                      
                   <div class="item3">
                          <img src="images/sate.jpg" width="226" height="225" alt="sliderimg"> 
                          <h3>Sate Padang</h3>Rp. 15.000 (idmenu mkn4)
                      </div> <!-- end of item-->
                  </li>
                  
             </ul>
      </div> <!-- end of slider-->
    </div> <!-- end of besth dishes-->
</div> <!-- end of bestdishes wrapper-->

<!--============ BOOK ONLINE ============-->

<div class="bookonlinewrapper">
    <div class="container" id="bookonline">
    <h3 class="wow fadeInUp" data-wow-delay="0.3s"> Daftar Member</h3>
  <form action="simpan_customer.php" method="post">
  
	<center><input type="text" class="name wow zoomIn" placeholder="Username" name="username" title="Isi Username" required>
	<input type="password" class="name1 wow zoomIn" placeholder="Password" name="password" title="Isi Password Anda" required>
	<center>
	<input type="email" class="email wow zoomIn" placeholder="Email" name="emailcustomer" title="Isi Dengan Email Anda" required >
    <input type="text" class="persons wow zoomIn" placeholder="Nama" name="namacustomer"  maxlength="30" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',this)" title="Isi Dengan Huruf" required/> 
    <input type="text" class="from wow zoomIn" placeholder="Alamat" name="alamatcustomer" title="Isi Alamat Anda" required>
	
    <button class="booknow wow fadeInUp"> Konfirmasi</button>
    
    </form action="simpan_customer.php" method="post">
    
    
    </div>
</div> <!-- end of book online wrapper-->



<!--============ ORDER 

<div class="order">
    <div id="orderline" class="container">
     <center>
	 <h3 class="wow fadeInUp" data-wow-delay="0.3s"> Order / Booking</h3>
    <form action="simpan_pesan.php" method="post">
   <input type="text" class="name wow zoomIn" placeholder="ID Pelanggan" name="idcustomer" onKeyPress="return goodchars(event,'0123456789',this)" title="Isi Dengan Angka" required>
    <input type="text" class="name1 wow zoomIn" placeholder="ID Menu" name="idmenu" title="Isi Dengan IdMenu Pilihan" required>
    <input type="text" class="persons wow zoomIn" placeholder="Nama Pemesan" name="namapemesan"  maxlength="30" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',this)" title="Isi Dengan Huruf" required/> 
    <input type="text" class="from wow zoomIn" placeholder="Jumlah Pemesanan" name="jumlah" onKeyPress="return goodchars(event,'0123456789',this)" title="Isi Dengan Angka" required>
    <input type="date" class="from wow zoomIn" placeholder="Tanggal Pemesanan" name="tgl" title="Isi Tanggal Transaksi" required>
	<input type="text" class="from wow zoomIn" placeholder="Alamat Pemesan" name="alamatpemesan" title="Isi Alamat Pemesan" required >
       
   <center> <button class="ordernow wow fadeInUp"> Submit</button>
    </center>
    </form action="simpan_pesan.php" method="post">

    </div> <!-- end of order id
</div>    <!-- end of order order
-->

<!--============ FOOTER ============-->


<div class="footerwrapper">
    <footer class="container">
    	<div class="customerreview">
       		 <h2>Location Resto</h2>
          <div class="review">
    		</div> <!-- end of review-->
             
              <div class="clearfix"></div>
			  <a href="https://www.google.com/maps/place/UAD+Kampus+3/@-7.8079723,110.3894654,17z/data=!4m5!3m4!1s0x2e7a5771db7184e3:0x333d3c624a23cbfa!8m2!3d-7.8083925!4d110.3893864">
			  <img src="images/uad.png" width="350px" height= "400px" />
			  </a>
             
              
          <div class="review">
        	</div> <!-- end of review-->               
        </div>
        
		<div class="socialize">
        
      <h2>Socialize</h2>
        <div class="socialimgs">
          <a href="https://web.facebook.com/"><img src="images/fb.png" width="68" height="68" class="facebook"
           alt="fb"></a>
        <a href="https://twitter.com/"><img src="images/twitter.png" width="68" height="68" class="twitter"
        alt="twitter"></a>
        <a href="https://www.youtube.com/"><img src="images/youtube.png" width="68" height="69" class="youtube" alt="youtube"></a>
        <a href="https://accounts.google.com/Login?hl=in"><img src="images/g+.png" width="68" height="68" class="google" alt="g+"></a>
          <a href="https://mail.google.com/"><img src="images/message.png" width="68" height="68" class="message" alt="message"></a>
      </div> <!--end of social imgs-->
      
       </div>
      
      
<div class="sendfeedback">
  	  <h2>Send Feedback</h2>
	   <form action="simpan_saran.php" method="post">
            <form>
            <h6>Nama:</h6>
            <input type="text" class="yourname" placeholder="Nama Anda" name="nama" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)" title="Isi Dengan Huruf" required/>
             <h6>Email :</h6>
            <input type="text" class="mobilenumber" placeholder="Email Anda" name="email">
             <h6>Komentar :</h6>
            <textarea placeholder="isi Saran / Komentar Anda" name="komentar"  title="Isi Dengan Saran Yang Membangun" required></textarea>

			<button>SUBMIT </button>
       	<form action="simpan_saran.php" method="post">
                    
        </div> <!-- end of feedback-->
    
    </footer> <!-- end of footer-->

</div> <!-- end of footer-->




<!--============ COPYRIGHTS ============-->


<div class="copyrightswrapper">
    <div id="copyrights" class="container">
		<center>
 	   <p>Copyright 2018 <a href="#"> Herri Kurnia </a> All Rights Reserved</p>
		</center>
    </div> <!-- end of copyrights-->
</div> <!-- end of website-->
	

<script type="text/javascript">
    $('.sliderwrapper .slider').glide({
		autoplay: 7000,
		animationDuration: 3000,
		arrows: true,
				
		});
</script>
	
<script type="text/javascript">
    $('.bestdisheswrapper .slider').glide({
		autoplay: false,
		animationDuration: 700,
		arrows: true,
		navigation:false,
		});
</script>
	
	</body>

		</html>


<!-- 
  <head>
    <meta charset="utf-8">
    <title>Basis Data</title>
  </head> <center>
	<body background='abc.jpg'>
    <h1>HERRI KURNIA</h1>
	
<table style="width: 900px;">
<tr>
<td><b>Buat Data Base Restoran :</b></td>
</tr>
<tr>
<td><b><a href="databases.php">Buat Database</a></b></td>
</tr>
<tr>
<td><b>Buat Table Form :</b></td>
</tr>
<tr>
<td><b><a href="create_table.php">Buat Table Customer</a></b></td>
</tr>
<tr>
<td><b><a href="create_table_menu.php">Buat Table Menu</a></b></td>
</tr>
<tr>
<td><b><a href="create_table_pesan.php">Buat Table Pesan</a></b></td>
</tr>
<tr>
<td><b><a href="create_table_saran.php">Buat Table Saran</a></b></td>
</tr>
<td><b>Form :</b></td>
</tr>
<tr>
<td><b><a href="tambah_customer.php">Tambah Customer</a></b></td>
</tr>
<tr>
<td><b><a href="tambah_menu.php">Tambah Menu</a></b></td>
</tr>
<tr>
<td><b>Laporan :</b></td>
</tr>
<tr>
<td><b><a href="tampil_customer.php">Lihat Laporan</a></b></td>
</tr>
<tr>
</table>
	</center>
  </body>
</html>
-->
