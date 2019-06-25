<!DOCTYPE html>
<html>
<head>
	<?php include 'head_bootstrap.html'; ?>

	<title>Data Kampus</title>
	<style type="text/css">
		body {
			background: url("img/bg.jpg") no-repeat;
			background-size: 1375px 1450px;
		}
	</style>
</head>
<body>
	<!--Navbar-->
	<?php include 'navbar.html'; ?>

	<div  class="text-sm-center text-light">
		<h2 style="padding: 30px;">Data Kampus</h2>
		<p>Jika ingin melihat data kampus, Klik menu <b>"Pilih"</b> di atas.</p>
		<p>Atau pilih dari dua menu di bawah.</p>
		<a class="text-dark" href="mahasiswa.php">
			<button type="button" class="btn btn-light">
				Mahasiswa
			</button>
		</a>
		<br><br>
		<a class="text-dark" href="dosen.php">
			<button type="button" class="btn btn-light">
				Dosen
			</button>
		</a>
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Bootstrap JS -->
	<script src="bootstrap/js/jquery-3.4.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>