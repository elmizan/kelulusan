<?php
$host = "localhost";
$user = "smpnbeka_root";
$pass = "KTSZuH@i!H!M";
$dbName = "smpnbeka_kelulusan";
mysql_connect($host, $user, $pass);
mysql_select_db($dbName)
or die ("Connect Failed !! : ".mysql_error());
?>