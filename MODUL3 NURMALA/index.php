<?php 
include 'koneksi.php';
$result = mysqli_query($koneksi, "SELECT * FROM event_table");
$cek = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html>
<head>
	<title>EAD EVENT</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		body {
			border:1px solid #0077b6;
		}
		html, body{
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
			position: center;
			width: 70%;
			margin-right: auto;
			margin-left: auto;
		}
		.container a {
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
		.box-card {
			display: inline-block;
		}

	</style>
</head>
<body>
	<ul>
	  <li><a href="">EAD EVENT</a></li>
	  <li style="float:right"><a href="buatevent.php"><button class="tombol">Buat Event</button></a></li>
	  <li style="float:right"><a class="active" href="index.php">Home</a></li>
	</ul>
	<center>
		<h3 style="color: #0077b6">WELCOME TO EAD EVENT!</h3>
	</center>
	<div class="container">
		<?php if($cek==0) {  ?>
			<h4>No Event Found</h4>
		<?php } else { ?>
		<?php $no=1; foreach( $result as $row ) : ?>
		<div class="box-card" style="background-color: white;box-shadow: 0 1px 16px 0 rgba(0,0,0,0.2);width: 30%;height: 400px;">
			<div class="card" style="width:100%;max-height: 20rem;display: inline-block;">
				<div class="container">
					<center><img src="gambar/<?= $row['gambar'] ?>" class="card-img-top" style="width: 70%;max-height: 10rem"></center>
				    <h3 class="card-title"> <?= $row['name'] ?></h3>
				    <p><i style="font-size:24px;color: orange" class="fa">&#xf073;</i> <?= $row['tanggal']?></p>
				    <p><i style="font-size:24px;color: orange" class="fa">&#xf041;</i> <?= $row['tempat']?></p>
				    <p>Kategori : Event <?= $row['kategori']?></p>
				    <a type="button" class="btn btn-primary" href="detailevent.php?id=<?php echo $row['id']; ?>">Detail</a>
			     </div>
			</div>
			<br><br>
		</div>
		<?php endforeach; ?>
		<?php }?>

	</div>
</body>
</html>