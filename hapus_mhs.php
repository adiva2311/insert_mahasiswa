<?php 

include 'functions.php';

$id = $_GET["id"];

if( hapus_dsn($id) > 0 ){
	echo "<script>
		alert ('Data Berhasil Dihapus');
		document.location.href = 'dosen.php';
	</script>
	";
} else {
	echo "<script>
		alert ('Data Gagal Dihapus');
		document.location.href = 'mahasiswa.php';
	</script>
	";
}


?>