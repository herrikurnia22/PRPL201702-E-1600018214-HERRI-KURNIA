
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
				 <h5><li><a href="index.php">HOME</a></li>
                <li> <a href="daftar.php">REGISTRASI</a></li>
                <li><a href="pesan.php">ORDER</a></li>
                <li><a href="menu.php">MENU</a></li>
                <li><a href="saran.php">CONTACT</a></li>
				<li><a href="tampil_pesan.php">DAFTAR PESAN</a></li>
				<li><a href="logout.php">LOGOUT</a></li>
				</h5>
            </ul>
        </nav>
      </div> <!--end of header-->
</div> <!-- end of headerwrapper-->


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
	
	<h3><a href="tampil_customer.php">Daftar Customer</a></h3>
 
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
    
    </div>
</div> <!-- end of book online wrapper-->



	
	
	
	
<!--============ COPYRIGHTS ============-->
<div class="bawah">
    <div id="bwh" class="container">
		<center>
 	   <p>Copyright 2018 <a href="#"> Herri Kurnia </a> All Rights Reserved</p>
		</center>
    </div> <!-- end of copyrights-->
</div> <!-- end of website-->
	
	
	</body>
		</html>

