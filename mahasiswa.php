<?php 

require 'functions.php';

$mahasiswa = tampil("SELECT * FROM mahasiswa");

?>
<!DOCTYPE html>
<html>
<head>
	<?php include 'head_bootstrap.html'; ?>

	<title>Data Mahasiswa</title>
</head>
<body>
	<!--Navbar-->
	<?php include 'navbar.html' ?>
	
	<div class="text-sm-center" style="margin:20px 0;">
		<h1>Data Mahasiswa</h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm"></div>
			<div class="col-sm-10">
				<table class="table text-sm-center">
					<thead class="thead-dark">
						<tr>
							<th scope="col">No.</th>
							<th scope="col">Aksi</th>
							<th scope="col">Nama</th>
							<th scope="col">Alamat</th>
						</tr>
					</thead>

					<?php $no = 1; ?>
					<?php foreach( $mahasiswa as $mhs ) : ?>
					<tbody>
						<tr>
							<td scope="row"><?php echo $no++; ?></td>
							<td>
								<a href="edit_mhs.php?id=<?php echo $mhs["id"];?>" onclick = "return confirm ('Yakin Ingin Merubah Data <?php echo $mhs["nama"] ?> ?')">Edit</a> |
								<a href="hapus_mhs.php?id=<?php echo $mhs["id"];?>" onclick = "return confirm ('Yakin Ingin Menghapus <?php echo $mhs["nama"] ?> ?')">Hapus</a>
							</td>
							<td><?php echo $mhs["nama"] ?></td>
							<td><?php echo $mhs["alamat"] ?></td>
						</tr>
					</tbody>
					<?php endforeach; ?>
				</table>
			</div>
			<div class="col-sm"></div>
		</div> <!--END ROW-->
	</div><!--END CONTAINER-->
	

	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<a class="text-light" href="insert_mhs.php">
					<button class="btn btn-secondary" style="margin: 15px 200px;">
						Tambah Data Mahasiswa!
					</button>
				</a>
			</div>
		</div>
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Bootstrap JS -->
	<script src="bootstrap/js/jquery-3.4.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>