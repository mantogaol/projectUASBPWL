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
		<h1 class="judul">KUBUTAKI</h1>
<div>=================================================================</div>				
<ul>
<li><a href="home.php">Beranda</a></li>
<li><a href="hotthisweek.php">Tren Minggu Ini</a></li>
<li>
<div class="dropdown">
  <button class="dropbtn"><a>Genre</a></button>
  <div class="dropdown-content">

	<a href="adventure.php">Adventure</a>
	<a href="comedi.php">Comedy</a>
	<a href="horor.php">Horror</a>
	<a href="fantasi.php">Fantasi</a>
	<a href="romans.php">Romance</a>
	
  </div>
</div>
</li>
</li>
<li>
<div class="dropdown">
  <button class="dropbtn"><a>Buku</a></button>
  <div class="dropdown-content">

	<a href="bukuterbaru.php">Buku Terbaru</a>
	<a href="bukuterlaris.php">Buku Terlaris</a>
	<a href="bukupopuler.php">Buku Populer</a>	
  </div>
</div>
</li>
<li><a href="kritikdansaran.php">Kritik dan Saran</a><li>

	
		</ul>
	</div>

<center><div>=================================================================</div></center>
	<center>
<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="f4.jpg" style="width:100%">
  
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
	<h1><b>Fantasi</h1>
	<h4><font color="#F08080">
	Fantasi adalah hal yang berhubungan dengan khayalan atau dengan sesuatu yang tidak benar-benar 
	ada dan hanya ada dalam benak atau pikiran saja. Kata lain untuk fantasi adalah imajinasi. yang 
	menggunakan bentuk sihir dan supranatural sebagai salah satu elemen plot, tema dan seting. 
<br></font></h4>	
</div>	
	
<div class="content">
	<h1><i><b>REVIEWS</b><i></h1>

	
<p>Fantasi</p>
<table>
<tr>
<td> <img src="f1.jpg" width="250" height="320"> </td>
<td></td>
<td></td>
<td> <img src="f2.jpg" width="250" height="320"> </td>
<td></td>
<td></td>
<td> <img src="f3.jpg" width="250" height="320"> </td>
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
