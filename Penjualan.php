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
<li><a href="Penjualan.php">Infografis Perbukuan</a>
	<a href="kritikdansaran.php">Kritik dan Saran</a><li>
	
	
		

		</ul>
	</div>

<center><div>=================================================================</div></center>

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
<?php
//koneksi ke database
$conn = new mysqli("localhost", "root", "", "buku_chart");
if ($conn->connect_errno) {
    echo die("Failed to connect to MySQL: " . $conn->connect_error);
}

$rows = array();
$table = array();
$table['cols'] = array(
	//membuat label untuk nama nya, tipe string
	array('label' => 'Jenis buku', 'type' => 'string'),
	//membuat label untuk jumlah siswa, tipe harus number untuk kalkulasi persentasenya
	array('label' => 'persentase', 'type' => 'number')
);

$rows1 = array();
$tables = array();
$tables['cols'] = array(
	//membuat label untuk nama nya, tipe string
	array('label' => 'Tahun', 'type' => 'number'),
	//membuat label untuk jumlah jual, tipe harus number untuk kalkulasi persentasenya
	array('label' => 'Jumlah', 'type' => 'number')
);

//melakukan query ke database select
$sql = $conn->query("SELECT * FROM penjualanbuku");
//perulangan untuk menampilkan data dari database
while($data = $sql->fetch_assoc()){
	//membuat array
	$temp = array();
	//memasukkan data pertama yaitu nama kelasnya
	$temp[] = array('v' => (string)$data['jenisbuku']);
	//memasukkan data kedua yaitu jumlah siswanya
	$temp[] = array('v' => (int)$data['persentase']);
	//memasukkan data diatas ke dalam array $rows
	$rows[] = array('c' => $temp);
}

//melakukan query ke database select
$sql = $conn->query("SELECT * FROM penerbit_tahun");
//perulangan untuk menampilkan data dari database
while($data2 = $sql->fetch_assoc()){
	//membuat array
	$temp2 = array();
	//memasukkan data pertama yaitu nama kelasnya
	$temp2[] = array('v' => (string)$data2['tahun']);
	//memasukkan data kedua yaitu jumlah siswanya
	$temp2[] = array('v' => (int)$data2['jumlahpenerbit']);
	//memasukkan data diatas ke dalam array $rows
	$rows2[] = array('c' => $temp2);
}

//memasukkan array $rows dalam variabel $table
$table['rows'] = $rows;
//mengeluarkan data dengan json_encode. silahkan di echo kalau ingin menampilkan data nya
$jsonTable = json_encode($table);

//memasukkan array $rows dalam variabel $table
$tables['rows'] = $rows2;
//mengeluarkan data dengan json_encode. silahkan di echo kalau ingin menampilkan data nya
$jsonTables = json_encode($tables);

?>

<html>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

	google.charts.load('current', {'packages':['corechart','bar']});
	google.charts.setOnLoadCallback(drawChart);

	function drawChart() {

		// membuat data chart dari json yang sudah ada di atas
		var data = new google.visualization.DataTable(<?php echo $jsonTable; ?>);
		var data2 = new google.visualization.DataTable(<?php echo $jsonTables; ?>);

		// Set options, bisa anda rubah
		var options = {'title':'',
					   'width':400,
					   'height':300};
	    var option = {'title':'',
	  				  'width':300,
	  				  'height':200};
	  				   

		var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
		chart.draw(data, options);
		var chart2 = new google.visualization.AreaChart(document.getElementById('chart_div2'));
		chart2.draw(data2, option);
		var chart3 = new google.charts.Bar(document.getElementById('chart_div3'));
		chart3.draw(data2, option);
	}

	
    </script>
</head>
<body>
    
	<!--Div yang akan menampilkan chart-->
	
   <table>
	<tr>
		
   	   <td><div class="content">
			<h4><font color="#F08080">Data Jenis Buku yang Diminati</h4>
			</div><div id="chart_div"></div></td>
	    <td><div class="content">
	  <h4><font color="#F08080">Data Perkembangan Jumlah Penerbit</h4></div>
      <div id="chart_div2"></div></td>
     </tr>
	
<div>
</table>
<div class="footer">
	<p class="copy">Copyright &copy 2018. Syarah Adela Shandi.</p>
	</div>
</body>	
</html>