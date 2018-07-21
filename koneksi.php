<?php
$host ="localhost" ;
$user = "root" ;
$pass = "";
$db = "grabbook";
$konek = mysql_connect ($host, $user, $pass) or die ('gk konek');
mysql_select_db($db, $konek) or die ('database gk ada') ;
?>