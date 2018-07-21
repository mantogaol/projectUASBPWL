<!DOCTYPE html>
<html>
<head>

<title>GrabBook</title>
<link href="icon.png" rel="shortcut icon">
<link rel="stylesheet" href="style.css">

<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>


<div class="container">
	<div class="header">
		<h1 class="judul"> Book Reviews </h1>
		<h6 class="judul1"> by syarahadelas </h6>

<ul>
<li><a href="home.php">Home</a></li>
<li><a href="hotthisweek.php">Hot This Week</a></li>

<div class="dropdown">
 <button class="dropbtn"><a>Genre</a></button>
  <div class="dropdown-content">

	<a href="">Comedy</a>
	<a href="">Horror</a>
	<a href="">Fantasi</a>
	<a href="">Romance</a>
  </div>
</div>

<li><a href="kritikdansaran.php">Kritik dan Saran</a><li>

</li>	
	
</ul>
		<script type="text/javascript" src="js/image_slide.js"></script>
		<script type="text/javascript" src="js/jquery.min.js"></script>
			<script text="text/javascript">
			$(document).ready(function(){
			$("#button1").click(function(){
			$("#table1").toggle("slide");
			});
			$("#button2").click(function(){
			$("#table2").toggle("slide");
			});
			});
</script>
<div>
		<center><img src="syarah.jpg" width="230" height="250">
		
		<br>
		<button id="button2">BIODATA</button>
		<table id="table2" style="display:none">
		
		<tr>
			<td> Nama </td>
			<td> : </td>
			<td> Syarah Adela Shandi </td>
		</tr>
		<tr>
			<td> NIM </td>
			<td> : </td>
			<td> 1755301054 </td>
		<tr>
			<td> TTL </td>
			<td> : </td>
			<td> Pekanbaru, 8 Maret 1999</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td> : </td>
			<td> Jl.Pramuka GG.Penegak No.8 </td>
		</tr>
			<tr>
			<td>Email</td>
			<td> : </td>
			<td> syarah17ti@mahasiswa.pcr.ac.id </td>
			</tr>
		
		</center></table>
		</div>

<div class="footer">
	<p class="copy">Copyright &copy 2018. Syarah Adela Shandi.</p>
</div>
</body>
</html>