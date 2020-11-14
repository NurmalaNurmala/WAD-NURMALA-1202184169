<?php 
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['name'];
$deskripsi = $_POST['deskripsi'];
$kategori = $_POST['kategori'];

$date = $_POST['date'];
$rawdate = htmlentities($_POST['date']);
$date = date('Y-m-d', strtotime($rawdate));

$mulai = $_POST['jammulai'];
$berakhir = $_POST['jamakhir'];
$tempat = $_POST['tempat'];
$harga = $_POST['harga'];
$benefit = implode(",", $_POST['benefit']);

// untuk gambar
$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['gambar']['name'];
$ukuran = $_FILES['gambar']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

// menyeleksi data user dengan username dan password yang sesuai
$result = mysqli_query($koneksi,"SELECT * FROM event_table where id='$id'");
$cek = mysqli_num_rows($result);
 
if($cek > 0) { //berarti ada di database
	$gambar = $rand.'_'.$filename;
	move_uploaded_file($_FILES['gambar']['tmp_name'], 'gambar/'.$rand.'_'.$filename);
	mysqli_query($koneksi, "UPDATE `event_table` SET `name`='$nama',`deskripsi`='$deskripsi',`gambar`='$gambar',`kategori`='$kategori',`tanggal`='$date',`mulai`='$mulai',`berakhir`='$berakhir',`tempat`='$tempat',`harga`='$harga',`benefit`='$benefit' WHERE id='$id'");
	header("location:index.php?pesan=berhasiledit");
} else {
	header("location:index.php?pesan=gagaledit");
}
?>