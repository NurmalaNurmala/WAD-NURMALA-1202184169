<?php 
include 'koneksi.php';
$id   = $_GET['id'];
$result = mysqli_query($koneksi,"DELETE FROM event_table WHERE id = '$id'");
// mengalihkan ke halaman index.php
if($result) {
	header("location:index.php?pesan=terhapus");
} else {
	header("location:index.php?pesan=gagalhapus");
}
?>