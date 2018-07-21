<!DOCTYPE html>
<html>
<head>

	<title>GrabBook</title>
	<link href="icon.png" rel="shortcut icon">
	<link rel="stylesheet" href="style.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>


<div class="container">
	<div class="header">
		<h1 class="judul"> Book Store </h1>
		<h6 class="judul1"> by Mai-Manto-Syarah </h6>
<div>=================================================================</div>				
<ul>
<li><a href="home.php">Home</a></li>
<li><a href="hotthisweek.php">Hot This Week</a></li>
<li>
<div class="dropdown">
  <button class="dropbtn"><a>Genre</a></button>
  <div class="dropdown-content">

	<a href="home.php">Comedy</a>
	<a href="home.php">Horror</a>
	<a href="home.php">Fantasi</a>
	<a href="home.php">Romance</a>
  </div>
</div>
</li>
<li><a href="kritikdansaran.php">Kritik dan Saran</a><li>

	
		</ul>
	</div>

<center><div>=================================================================</div></center>
	<center>
<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="h1.png" style="width:100%">
  <img class="mySlides" src="h2.jpg" style="width:100%">
    <img class="mySlides" src="h4.jpg" style="width:100%">
      <img class="mySlides" src="h5.jpg" style="width:100%">
        <img class="mySlides" src="h6.jpg" style="width:100%">
          <img class="mySlides" src="h7.jpg" style="width:100%">
		  <img class="mySlides" src="h10.jpg" style="width:100%">
		    <img class="mySlides" src="h15.jpg" style="width:100%">
</div>
</center>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000); // Change image every 2 seconds
}
</script>
<div class="content">
	<h1><b>WELCOME!</b></h1>
	<h4><font color="#F08080"> Selamat datang di GrabBook! Karena saya sangat suka membaca buku oleh karena itu saya mendedikasikan untuk membuat website berisikan buku :)
<br>Selamat menikmati! </font></h4>	
</div>	
	
<div class="content">
	<h1><i><b>REVIEWS</b><i></h1>
	<br>
	<br>

	
<p>Romance</p>	
<table>
<tr>
<td> <img id="efek" src="1.png" width="200" height="250" > </td>
<td></td>
<td></td>
<td> <img src="h8.jpg" width="200" height="250"> </td>
<td></td>
<td></td>
<td> <img src="h14.jpg" width="200" height="250"> </td>
</tr>
</table>
<br>
<br>
<br>
<p>Comedy</p>
<table>
<tr>
<td> <img src="h12.png" width="200" height="250"> </td>
<td></td>
<td></td>
<td> <img src="h11.jpg" width="200" height="250"> </td>
<td></td>
<td></td>
<td> <img src="h13.jpg" width="200" height="250"> </td>
</tr>
</table>
<br>
<br>
<br>
<p>Fantasi</p>
<table>
<tr>
<td> <img src="h17.png" width="200" height="250"> </td>
<td></td>
<td></td>
<td> <img src="h16.jpg" width="200" height="250"> </td>
<td></td>
<td></td>
<td> <img src="h18.jpg" width="200" height="250"> </td>
</tr>
</table>
<br>
<br>
<br>
<p>Horror</p>
<table>
<tr>
<td> <img src="h19.jpg" width="200" height="250"> </td>
<td></td>
<td></td>
<td> <img src="h20.jpg" width="200" height="250"> </td>
<td></td>
<td></td>
<td> <img src="h21.jpg" width="200" height="250"> </td>
</tr>
</table>
<br>
<br>
<br>

	
	</div>

		<div class="footer">
	<p class="copy">Copyright &copy 2018. Syarah Adela Shandi.</p>
	</div>
	</body>
</html>
