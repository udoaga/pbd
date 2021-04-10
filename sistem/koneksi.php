<?php
function open_connection() {
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$dbname = "pbd_akademik";
	$koneksi = mysqli_connect($hostname,$username,$password,$dbname) ;
	return $koneksi;
}
?>