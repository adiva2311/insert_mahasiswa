<?php  

$conn = mysqli_connect("localhost", "root", "", "test_ilkomp");

function tampil($data){
	global $conn; 

	//Mengambil data dari database 
	$result = mysqli_query($conn, $data);
	//Memasukkannya ke dalam array
	$rows = [];

	while ( $row = mysqli_fetch_assoc($result) ){
		$rows[] = $row;
	}
	return $rows;
}

function tambah ($data) {
	global $conn;

	$nama = $data["nama"];
	$alamat = $data["alamat"];

	$query = "INSERT INTO mahasiswa 
				VALUES
			('', '$nama', '$alamat')
		";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function tambah_dosen($data){
	global $conn;

	$nama = $data["nama"];
	$alamat = $data["alamat"];

	$query = "INSERT INTO dosen 
				VALUES
			('', '$nama', '$alamat')
		";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapus($id){
	global $conn;

	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

	return mysqli_affected_rows($conn);
}

function hapus_dsn($id){
	global $conn;

	mysqli_query($conn, "DELETE FROM dosen WHERE id = $id");

	return mysqli_affected_rows($conn);
}

function ubah($data){
	global $conn;
	
	$id = $data["id"];
	$nama = $data["nama"];
	$alamat = $data["alamat"];

	$query = "UPDATE mahasiswa SET 
				nama = '$nama',
				alamat = '$alamat'
			WHERE 
				id = $id
			";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);	
}

function ubah_dosen($data){
	global $conn;
	
	$id = $data["id"];
	$nama = $data["nama"];
	$alamat = $data["alamat"];

	$query = "UPDATE dosen SET 
				nama = '$nama',
				alamat = '$alamat'
			WHERE 
				id = $id
			";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);	
}

?>