<?php 
include 'koneksi.php';
if(isset($_GET['id'])) {
	$id = $_GET['id'];
	$result = mysqli_query($koneksi, "SELECT * FROM event_table WHERE id=$id");
	$d = $result->fetch_assoc();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>EAD EVENT</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		body {
			border:1px solid #0077b6;
			height: 100%;
			margin: 0.7%;
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
		li a:hover {
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
		.containerX {
			display: flex;
			position: center;
			width: 90%;
			margin-right: auto;
			margin-left: auto;
		}
		.containerX .kiri {
			float: left;
			width: 49%;
			border: 1px solid grey;
		}
		.containerX .kanan {
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
	  <li style="float:right"><a href="index.php">Home</a></li>
	</ul>
	<center><h3 style="color: #0077b6">Detail Event!</h3></center>
		
	
		<div class="container" style="background-color: white;box-shadow: 0 1px 16px 0 rgba(0,0,0,0.2);width: 50%">
			<center><img src="gambar/<?= $d['gambar'] ?>" class="card-img-top" style="max-height: 20rem"></center>
		    <h4 class="card-title"> <?= $d['name'] ?></h4>
		    <h5><strong>Deskripsi</strong></h5>
		    <p><?= $d['deskripsi']?></p>
		    <div class="containerdalam" style="display: flex;">
			    <div class="kiridalem" style="width: 50%">
			    	<h5><strong>Informasi Event</strong></h5>
				    <p><i style="font-size:24px;color: orange" class="fa">&#xf073;</i> <?= $d['tanggal']?></p>
				    <p><i style="font-size:24px;color: orange" class="fa">&#xf041;</i> <?= $d['tempat']?></p>
				    <p><i style="font-size:24px;color: orange" class="fa">&#xf017;</i> <?= $d['mulai']?> - <?= $d['berakhir']?></p>
				    <p><strong>Kategori</strong>: <?= $d['kategori']?></p>
				    <h5><strong>HTM: <?= $d['harga']?></strong></h5>
				</div>
				<div class="kanandalam" style="width: 50%">
					<h5><strong>Benefit</strong></h5>
				    <p>&#x2022; <?= $d['benefit']?></p>
				</div>
			</div>
		    
		    <center>
		    <div class="formfoot">
		    	<!-- edit -->
			    <button type="button" class="view_data btn btn-primary btn-md" data-toggle="modal" id="<?php echo $d["id"] ?>" data-target="#editmodal">Edit</button>
		        <!-- delete -->
		        <a type="button" class="btn btn-danger btn-md"  href="cek_hapus_event.php?id=<?php echo $d['id']; ?>" onClick="return confirm('Apakah Anda Yakin?')" >Delete</a>
	        </div>
	        </center>
		 </div>
		 <br><br>

<!-- Modal Tambah Menu -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledyb="exampleModalLabel1" aria-hidden="true" >
  <div class="modal-dialog" role="document" style="width: 70%">
    <div class="modal-content">
      <div class="modal-header">
      <h2>Edit Content Event</h2>
      </div>
      <div class="modal-body">
	      <!-- isi form ini -->
	      <div class="containerX">
			<div class="kiri">
				<br>
				<div class="content">
					<form method="POST" action="cek_edit_event.php" enctype="multipart/form-data">
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<label>Name</label>
						<input type="text" id="name" placeholder="<?php echo $d['name']; ?>" name="name" required >
						<label>Deskripsi</label>
						<textarea type="text" id="deskripsi" placeholder="<?php echo $d['deskripsi']; ?>" name="deskripsi" style="height:100px" required ></textarea> 
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
						<input type="text" id="tempat" placeholder="<?php echo $d['tempat']; ?>" name="tempat">
						<label>Harga</label>
						<input type="text" id="harga" placeholder="<?php echo $d['harga']; ?>" name="harga">
						<label>Benefit</label><br>
						<label><input type="checkbox" name="benefit[]" value="Snacks">Snacks</label>
				         <label><input type="checkbox" name="benefit[]" value="Sertifikat">Sertifikat</label>
				         <label><input type="checkbox" name="benefit[]" value="Souvenir">Souvenir</label>
				         <br><br>
						<div class="formfoot" style="float: right">
							<button type="button" class="btn btn-danger"  onclick="window.location.href='detailevent.php?id=<?php echo $d['id']; ?>'">Cancel</button>
		        			<input  type="submit" class="btn btn-primary" id="save" value="Save Changes" placeholder="Save Changes">
						</div>
					</form>
				</div>
			</div>
		</div>
    </div>
  </div>
</div>
<br><br>

</body>
</html>