<?php
include('koneksi.php');
$a =$_POST ['id_pengunjung'];
$b =$_POST ['nama'];
$c =$_POST ['email'];
$d =$_POST ['saran'];
$query =mysql_query("insert into saran values('$a','$b','$c','$d')") or die (mysql_error("Tidak Tersimpan"));

header("location:home.php?pesan=Selamat update anda sukses");
?>