<?php include ('koneksi.php'); ?> 
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

<br>


<div id="login">
        </div >
<center>		
<h1><em>Silahkan berikan Kritikan dan Saran :)</em></h1>		
<br>
<br>
<form action="insert.php" method="post">
			<td>ID User </td>
			<td> : </td><input type="text" name="id_pengunjung" placeholder="0000" size="25"><br>
			<br>
			<td>Nama </td>
			<td> : </td><input type="text" name="nama" placeholder="grabbook" size="25"><br>
			<br>
			E-mail : <input type="email" name="email" placeholder="grabbook@buku.com" size="25" ><br>
			<br>
			Kritik dan Saran : <br>
			<br>
<textarea name="saran" rows="10" cols="55" placeholder="..." warp="soft"></textarea><BR> <BR>

<INPUT TYPE="SUBMIT" VALUE="SUBMIT">

</form>	
</center>	

			</div>
		<div class="footer">
	<p class="copy">Copyright &copy 2018. Syarah Adela Shandi.</p>
	</div>
	</body>
</html>