<?php 
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "wad_modul2_mala";

	$koneksi = mysqli_connect($host, $user, $pass, $db);

	if(!$koneksi) {
		die("Koneksi gagal : ".mysql_connect_error());
	}
?>