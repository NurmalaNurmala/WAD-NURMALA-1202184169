<?php 
include 'koneksi.php';
$result = mysqli_query($koneksi, "SELECT * FROM event_table");
?>
<!DOCTYPE html>
<html>
<head>
	<title>EAD EVENT</title>
	<style type="text/css">
		body {
			border:1px solid #0077b6;
			height: 100%;
		}
		ul {
		  list-style-type: none;
		  margin: 0;
		  padding: 0;
		  overflow: hidden;
		  background-color: #0077b6;
		}

		li {
		  float: left;
		}

		li a {
		  display: block;
		  color: white;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		}

		.tombol {
        	background-color: #0077b6;
	        color: white;
	        border: 2px solid white;
	        border-radius: 5px;
	        text-align: center;
	        cursor: pointer;
		}

		.container {
			display: flex;
			position: center;
			width: 90%;
			margin-right: auto;
			margin-left: auto;
		}
		.container .kiri {
			float: left;
			width: 49%;
			border: 1px solid grey;
		}
		.container .kanan {
			margin-left: 1%;
			float: right;
			width: 49%;
			border: 1px solid grey;
		}
		.content {
			position: center;
			width: 90%;
			margin-right: auto;
			margin-left: auto;
		}
		input[type=text], select, textarea{
		  width: 100%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  display: block;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		  box-sizing: border-box;
		}
		input[type=file] {
		  width: 90%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  display: block;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		  box-sizing: border-box;
		}
		input[type=date] {
		  width: 100%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  display: block;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		  box-sizing: border-box;
		}
		input[type=time] {
		  width: 90%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  display: block;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		  box-sizing: border-box;
		}

		.jam {
			width: 100%;
		}
		.jkiri {
			width: 50%;
			float: left;
		}
		.jkanan {
			width: 50%;
			float: right;
		}
		.jkanan input{
			float: right;
		}
		.formfoot {
			float: right;
		}
		.btn {
		  border: none;
		  border-radius: 5px;
		  color: white;
		  padding: 15px 32px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 16px;
		  margin: 4px 2px;
		  cursor: pointer;
		}
		.btn-primary {
			background-color: #0077b6;
		}
		.btn-danger {
			background-color: red;
		}
	</style>
</head>
<body>
	<ul>
	  <li><a href="">EAD EVENT</a></li>
	  <li style="float:right"><a href="buatevent.php"><button class="tombol">Buat Event</button></a></li>
	  <li style="float:right"><a class="active" href="index.php">Home</a></li>
	</ul>
	<div class="container">
		<h2 style="color: #0077b6;width: 90%">Buat Event</h2>
	</div>
	<div class="container">
		<div class="kiri">
			<br>
			<div class="content">
				<form method="POST" action="cek_add_event.php" enctype="multipart/form-data">
					<label>Name</label>
					<input type="text" id="name" placeholder="Name" name="name" required >
					<label>Deskripsi</label>
					<textarea type="text" id="deskripsi" placeholder="Deskripsi" name="deskripsi" style="height:100px" required ></textarea> 
					<label>Upload Gambar</label>
					<input type="file" id="gambar" placeholder="Gambar" name="gambar" required >
					<label>Kategori</label> <br>
					<input type="radio" id="online" name="kategori" value="Online">
					<label for="online">Online</label>
					<input type="radio" id="offline" name="kategori" value="Offline">
					<label for="offline">Offline</label>
					
			</div>
		</div>
		<div class="kanan">
			<br>
			<div class="content">
					<label>Tanggal</label>
					<input type="date" id="date" placeholder="Tanggal" name="date" >
					<div class="jam">
						<div class="jkiri">
							<label>Jam Mulai</label>
							<input type="time" id="jammulai" placeholder="Jam Mulai" name="jammulai" >
						</div>
						<div class="jkanan"> 
							<label style="padding-left: 10%">Jam Berakhir</label>
							<input type="time" id="jamakhir" placeholder="Jam Berakhir" name="jamakhir" >
						</div>
					</div>
					<label>Tempat</label>
					<input type="text" id="tempat" placeholder="Tempat" name="tempat">
					<label>Harga</label>
					<input type="text" id="harga" placeholder="Harga" name="harga">
					<label>Benefit</label><br>
					<label><input type="checkbox" name="benefit[]" value="Snacks">Snacks</label>
			         <label><input type="checkbox" name="benefit[]" value="Sertifikat">Sertifikat</label>
			         <label><input type="checkbox" name="benefit[]" value="Souvenir">Souvenir</label>
			         <br><br>
					<div class="formfoot">
	        			<input  type="submit" class="btn btn-primary" id="save" value="Submit" placeholder="Simpan">
						<button type="button" class="btn btn-danger"  onclick="window.location.href='index.php'">Cancel</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<br><br><br><br><br>
</body>
</html>