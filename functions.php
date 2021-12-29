<?php 	
$ai = mysqli_connect("localhost", "root", "", "tensei");

function query($query) {
	global $ai;
	$result = mysqli_query($ai, $query);
	$roses = [];
	while ($rose= mysqli_fetch_assoc($result)) {
		$roses[] = $rose;
	}
	return $roses;
}







function tambah($data){
	global $ai;
	$nama = htmlspecialchars($data["nama"]);
	$nis = htmlspecialchars($data["nis"]);
	$kelas = htmlspecialchars($data["kelas"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$nilai = htmlspecialchars($data["nilai"]);
	$gambar = htmlspecialchars($data["gambar"]);


	$query = "INSERT INTO siswa
	VALUES
	 ('', '$nama', '$nis', '$kelas','$jurusan', '$nilai','$gambar')
	 ";
	mysqli_query($ai, $query);

	return mysqli_affected_rows($ai);
} 


function hapus($id){
	global $ai;
	mysqli_query($ai, "DELETE FROM siswa WHERE id = $id");

	return mysqli_affected_rows($ai);
}





function ubah($data){
	global $ai;
	$id = $data["id"];
	$nama = htmlspecialchars($data["nama"]);
	$nis = htmlspecialchars($data["nis"]);
	$kelas = htmlspecialchars($data["kelas"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$nilai = htmlspecialchars($data["nilai"]);
	$gambar = htmlspecialchars($data["gambar"]);


	$query = "UPDATE siswa SET
	nama = '$nama',
	nis = '$nis',
	kelas = '$kelas',
	jurusan = '$jurusan',
	nilai = '$nilai',
	gambar = '$gambar'
	WHERE id = $id
	";

	mysqli_query($ai, $query);

	return mysqli_affected_rows($ai);
} 





 ?>