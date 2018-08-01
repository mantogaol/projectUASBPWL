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
		<h1 class="judul"> KUBUTAKI </h1>
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
  <img class="mySlides" src="adven.jpg" style="width:100%">
  
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
	<h1><b>Adventure</b></h1>
	<h4><font color="#F08080">
	Adventure adalah sebuah genre bertema petualangan. Sebuah petualangan tidak harus mengembara ke tempat yang jauh, 
	tapi bisa memiliki sebuah peristiwa yang mampu mengubah sesuatu, baik itu diri sendiri atau orang lain. 
	Petualangan adalah kejadian/peristiwa penting yang terjadi dalam hidup seseorang.
<br>Selamat menikmati! </font></h4>	
</div>	
	
<div class="content">
	<h1><i><b>REVIEWS</b><i></h1>

	
<p>Adventure</p>	
<table>
<tr>
<td> <img id="efek" src="a1.jpg" width="250" height="350" > </td>
<td></td>
<td></td>
<td> <img src="a2.jpg" width="250" height="350"> </td>
<td></td>
<td></td>
<td> <img src="a3.jpg" width="250" height="350"> </td>
</tr>

</table>

	</div>

		<div class="footer">
	<p class="copy">Copyright &copy 2018. KUBUTAKI.</p>
	</div>
	</body>
</html>
