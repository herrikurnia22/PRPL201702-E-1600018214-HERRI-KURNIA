
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

<!--============ ORDER ============-->
<!--
<div class="order">
    <div id="orderline" class="container">
     <center>
	 <h3 class="wow fadeInUp" data-wow-delay="0.3s"> Order / Booking</h3>
    <form action="simpan_pesan.php" method="post">
 <input type="text" class="name wow zoomIn" placeholder="ID Pelanggan" name="idcustomer" onKeyPress="return goodchars(event,'0123456789',this)" title="Isi Dengan Angka" required>
    <input type="text" class="persons wow zoomIn" placeholder="Nama Pemesan" name="namapemesan"  maxlength="30" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)" title="Isi Dengan Huruf" required/> 
    <input type="date" class="from wow zoomIn" placeholder="Tanggal Pemesanan" name="tgl" title="Isi Tanggal Transaksi" required>
	<center>
	<input type="text" class="from1 wow zoomIn" placeholder="Alamat Pemesan" name="alamatpemesan" title="Isi Alamat Pemesan" required >
      </center>
   <center> <button class="ordernow wow fadeInUp"> Submit</button>
    </center>
    </form action="tampil_pesan.php" method="post">
-->	
	



<script language="JavaScript" type="text/javascript">

function jumlah() {
//var myForm = document.form1;
var nasigoreng = 15000 * myForm.order1.value;
var miegoreng = 13000 * myForm.order2.value;
var baksomalang = 15000 * myForm.order3.value;
var satepadang = 15000 * myForm.order4.value;
var esteh = 5000 * myForm.order5.value;
var kopirobusta = 8000 * myForm.order6.value;
var hasil = nasigoreng+miegoreng+baksomalang+satepadang+esteh+kopirobusta;
var jumlah = (nasigoreng/15000)+(miegoreng/13000)+(baksomalang/15000)+(satepadang/15000)+(esteh/5000)+(kopirobusta/8000);

var terbayar = myForm.dibayar.value ;
var kembalian = terbayar - hasil;

myForm.totalbarang.value = jumlah;

if (hasil > 100000) {
    myForm.total.value = hasil;
    myForm.diskon.value = (10*hasil)/100;
    myForm.bayar.value = hasil - eval(myForm.diskon.value);
    myForm.kembalian1.value = terbayar - myForm.bayar.value;
 } else {
    myForm.total.value = hasil;
    myForm.diskon.value = 0;
    document.myForm.bayar.value = hasil - eval(myForm.diskon.value);
    myForm.kembalian1.value = terbayar - myForm.bayar.value;
 }
 //document.myForm.bayar.value = hasil;

} 
function resetForm(){
document.form1.reset();
}
</script>
<center>
<marquee><h4>Promo : Diskon 10 % jika transaksi di atas Rp. 100.000 </h4></marquee>

<form name="myForm"  action="simpan-pesan.php" method="post">
<table border="0">	
<tr>
	<td> Nama Pemesan </td>
	<td> : </td>
	<td> <input type="text" name="username" placeholder="Nama Pemesan" onKeyPress="return goodchars(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)" title="Isi Dengan Huruf" required /></td>
</tr>
<tr>
<tr>
	<td> Alamat </td>
	<td> : </td>
	<td> <input type="text" name="alamat" placeholder=" Alamat Pemesan" required /></td>
</tr>
<tr>
	<td> Tanggal </td>
	<td> : </td>
	<td> <input type="date" name=" tanggal" required /></td>
</tr>
</table>

<table border="2" cellspacing=0 cellpadding=5 >
<colgroup align="center">
<colgroup align="center">
<colgroup align="center">
<thead valign="middle">
<tr>
<th width="35"><font color="black" size="4">No</font>
<th width="200"><font color="black" size="4">Makanan/Minuman</font>
<th width="180"><font color="black" size="4">Harga Satuan</font>
<th width="100"><font color="black" size="4">Pesan</font>
</tr>
<tbody>
<tr>
<td>1<td>Nasi Goreng<td><input type="text" value="15000" disabled="true"/><td>
<input  type="text"  name="order1" placeholder="0" onChange="jumlah()"/>
</tr>
<tr>
<td>2<td>Mie Goreng<td><input type="text" value="13000" disabled="true"/><td>
<input  type="text"  name="order2" value="0" onChange="jumlah()" />
</tr>
<tr>
<td>3<td>Bakso Malang<td><input  type="text"   value="15000" disabled="true"/> <td>
<input  type="text"  name="order3" value="0" onChange="jumlah()"/>
</tr>
<tr>
<td>4<td>Sate Padang<td><input  type="text"   value="15000" disabled="true"/>
<td><input  type="text"  name="order4" value="0" onChange="jumlah()" />
</tr>
<tr>
<td>5<td>Es Teh<td><input  type="text"   value="5000" disabled="true"/> <td>
<input  type="text"  name="order5" value="0" onChange="jumlah()"/>
</tr>
<tr>
<td>6<td>Kopi Robusta<td><input  type="text"   value="8000" disabled="true"/> <td>
<input  type="text"  name="order6" value="0" onChange="jumlah()"/>
</tr>
<tr>
<td colspan=3 align="right">Jumlah Pembayaran<td><input type="text"  id="total" name="total" value="" />
</tr>
<tr>
<td colspan=3 align="right">Jumlah Barang<td><input type="text"  id="totalbarang" name="totalbarang" value="" />
</tr>
<tr>
<td colspan=3 align="right">Diskon<td><input  type="text"  name="diskon"  />
</tr>
<tr>
<td colspan=3 align="right">Total Pembayaran<td><input type="text" name="bayar" value="" />
</tr>
<tr>
<td colspan=3 align="right">Uang Pembayaran<td><input type="text" id="dibayar" name="dibayar" value="" onChange="jumlah()"/>
</tr>
<tr>
<td colspan=3 align="right">Uang Kembalian<td><input type="text" id="kembalian1" name="kembalian1" value=""  />
</tr>
</table>

<input type="reset" value="Reset" onClick="resetForm()" />
<button type="submit" value="Konfirmasi" > Konfirmasi</button>

</form action="tampil_pesan.php" method="post">
<br>
<br>

</center>

</body>
</html> 
	

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
 
<!--	<script>
		function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		}
	</script>	
	-->	
    </div> <!-- end of order id-->
</div>    <!-- end of order order-->

	
	
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

