<?php
require 'functions.php';


if (isset($_POST["submit"])) {
	// code...
	

	if (tambah($_POST) > 0 ) {
		// code...
		echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href='index.php';
			</script>
		";
	} else {
		echo "<script>
				alert('data berhasil ditambahkan!');
				document.location.href='index.php';
			</script>
			";
	}

}
 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h1>Biodata</h1>
	<form action="" method="post">	
		<ul>
		<li>
			<label for="nama">Nama :</label>
			<input type="text" name="nama" id="nama" required>
		</li>
		<li>
			<label for="nis">NIS :</label>
			<input type="text" name="nis" id="nis">
		</li>
		<li>
			<label for="kelas">Kelas :</label>
			<input type="text" name="kelas" id="kelas">
		</li>
		<li>
			<label for="jurusan">Jurusan :</label>
			<input type="text" name="jurusan" id="jurusan">
		</li>
		<li>
			<label for="nilai">Nilai :</label>
			<input type="text" name="nilai" id="nilai">
		</li>
		<li>
			<label for="gambar">Gambar :</label>
			<input type="text" name="gambar" id="gambar">
		</li>
		
		<li>
			<button type="submit" name="submit"> Tambah Data!</button>
		</li>
		</ul>






	</form>
</body>
</html>