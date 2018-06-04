
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
                <li><a href="menu.php">MENU</a></li>
                <li><a href="saran.php">CONTACT</a></li>
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