<?php
require 'functions.php';

$id = $_GET['id'];

$ntr = query("SELECT * FROM siswa WHERE id = $id")[0];

if (isset($_POST["submit"])) {
	// code...
	

	if (ubah($_POST) > 0 ) {
		// code...
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href='index.php';
			</script>
		";
	} else {
		echo "<script>
				alert('data berhasil diubah!');
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
	<h1>Ubah data</h1>
	<form action="" method="post">	
		<input type="hidden" name="id" value="<?php echo $ntr["id"];	 ?>">
		<ul>
		<li>
			<label for="nama">Nama :</label>
			<input type="text" name="nama" id="nama" required value="<?php echo $ntr["nama"]; ?>">
		</li>
		<li>
			<label for="nis">NIS :</label>
			<input type="text" name="nis" id="nis" value="<?php echo $ntr["nis"]; ?>">
		</li>
		<li>
			<label for="kelas">Kelas :</label>
			<input type="text" name="kelas" id="kelas" value="<?php echo $ntr["kelas"]; ?>">
		</li>
		<li>
			<label for="jurusan">Jurusan :</label>
			<input type="text" name="jurusan" id="jurusan" value="<?php echo $ntr["jurusan"]; ?>">
		</li>
		<li>
			<label for="nilai">Nilai :</label>
			<input type="text" name="nilai" id="nilai" value="<?php echo $ntr["nilai"]; ?>">
		</li>
		<li>
			<label for="gambar">Gambar :</label>
			<input type="text" name="gambar" id="gambar" value="<?php echo $ntr["gambar"]; ?>">
		</li>
		
		<li>
			<button type="submit" name="submit"> Ubah Data!</button>
		</li>
		</ul>






	</form>
</body>
</html>