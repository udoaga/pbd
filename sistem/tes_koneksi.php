<?php
require("koneksi.php");

$hub = open_connection();
if ($hub) {
	echo ("koneksi SUKSES");
} else {
	echo ("koneksi GAGAL");
}

mysqli_close($hub);
?>