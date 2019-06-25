<?php  

require 'functions.php';

if ( isset($_POST["submit"]) ){
	//Jika berhasil
	if ( tambah_dosen($_POST) > 0 ){
		echo "
			<script>
				alert('Data Berhasil Masuk');
				document.location.href = 'dosen.php';
			</script>
			";
	} else {
		echo "
			<script>
				alert('Data Gagal Masuk');
			</script>
			";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<!--Bootstrap-->
	<?php include 'head_bootstrap.html'; ?>

	<title>Tambah Dosen</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!--Navbar-->
	<?php include 'navbar.html'; ?>

	<h1 style="padding: 20px 10px 0 30px">Tambah Data Dosen</h1>

	<div class="container">
		<div class="row">
			<div class="col-md-11">
				<form action="" method="post">
					<div class="form-group">
						<label for="nama">Nama : </label> <br>
						<input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama Anda" autocomplete="off" required>
					</div>
					<div class="form-group">
						<label for="alamat">Alamat : </label> <br>
						<input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat Anda" autocomplete="off" required>
						<small class="form-text text-muted">Masukkan Data Sesuai KTP</small>
					</div>
					<div class="form-group">
						<button name="submit" id="submit" class="btn btn-primary"> Simpan Data Mahasiswa! </button>
					</div>
				</form>
			</div>
			<div class="col-md"></div>
		</div>
	</div>


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Bootstrap JS -->
	<script src="bootstrap/js/jquery-3.4.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>