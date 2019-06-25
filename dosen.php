<?php 

require 'functions.php';

$dosen = tampil("SELECT * FROM dosen");

?>
<!DOCTYPE html>
<html>
<head>
	<?php include 'head_bootstrap.html'; ?>

	<title>Data Dosen</title>
</head>
<body>
	<!--Navbar-->
	<?php include 'navbar.html' ?>

	<div class="text-md-center" style="margin:20px 0;">
		<h1>Data Dosen</h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md"></div>
			<div class="col-md-10">
				<table class="table text-md-center">
					<thead class="thead-dark">
						<tr>
							<th scope="col">No.</th>
							<th scope="col">Aksi</th>
							<th scope="col">Nama</th>
							<th scope="col">Alamat</th>
						</tr>
					</thead>

					<?php $no = 1; ?>
					<?php foreach( $dosen as $dsn ) : ?>
					<tbody>
						<tr>
							<td scope="row"><?php echo $no++; ?></td>
							<td>
								<a href="edit_dsn.php?id=<?php echo $dsn["id"];?>" onclick = "return confirm ('Yakin Ingin Merubah Data <?php echo $dsn["nama"] ?> ?')">Edit</a> |
								<a href="hapus_dsn.php?id=<?php echo $dsn["id"];?>" onclick = "return confirm ('Yakin Ingin Menghapus <?php echo $dsn["nama"] ?> ?')">Hapus</a>
							</td>
							<td><?php echo $dsn["nama"] ?></td>
							<td><?php echo $dsn["alamat"] ?></td>
						</tr>
					</tbody>
					<?php endforeach; ?>
				</table>
			</div>
			<div class="col-md"></div>
		</div> <!--END ROW-->
	</div><!--END CONTAINER-->

	<div class="container">
		<div class="row">
			<div class="col"></div>
			<div class="col col-md-12">
				<button class="btn btn-secondary" style="margin: 15px 200px;">
					<a class="text-light" href="insert_dosen.php">Tambah Data Dosen</a>
				</button>
			<div class="col"></div>
			</div>
		</div>
	</div>


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Bootstrap JS -->
	<script src="bootstrap/js/jquery-3.4.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>