<?php 
include 'conn.php';

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
$result = mysqli_query($koneksi,"SELECT * FROM event_table where name='$nama'");

$cek = mysqli_num_rows($result);
 
if($cek > 0) { //berarti ada di database
	header("location:index.php?pesan=gagaltambah");
} else {
	$gambar = $rand.'_'.$filename;
	move_uploaded_file($_FILES['gambar']['tmp_name'], 'gambar/'.$rand.'_'.$filename);
	mysqli_query($koneksi, "INSERT INTO event_tabel (`name`, `deskripsi`, `gambar`, `kategori`, `tanggal`, `mulai`, `berakhir`, `tempat`, `harga`, `benefit`) VALUES('$nama','$deskripsi','$gambar','$kategori','$date','$mulai','$berakhir','$tempat','$harga','$benefit')");
	header("location:index.php?pesan=berhasiltambah");
}
?>