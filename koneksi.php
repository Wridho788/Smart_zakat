<?php
$host = "localhost";

$username = "root";
$password = "";
$db_name = "db_smart";

$koneksi = mysqli_connect("$host","root","","$db_name");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>