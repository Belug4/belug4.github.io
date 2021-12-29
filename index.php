<?php 	
require 'functions.php';
$netorer = query("SELECT * FROM siswa");
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>	</title>
</head>
<body>
	<h2>Daftar Siswi SMA Informatika</h2>
	<a href="tambah.php "> Tambah data </a>
	<br><br>					

<table border="1" cellpadding="10" cellspacing="0">	
	<tr>
		<th>No</th>
		<th>Ubah</th>
		<th>Gambar</th>
		<th>Nama</th>
		<th>NIS</th>
		<th>Kelas</th>
		<th>Jurusan</th>
	</tr>
	<?php 	$a = 1; ?>
	<?php foreach ($netorer as $ntr) :?>
	<tr>
		<td><?php echo	$a ; ?></td>
		<td>
			<a href="ubah.php?id=<?php echo $ntr["id"]; ?>">Ubah</a> ||
			<a href="hapus.php?id=<?php echo $ntr["id"]; ?>" onclick="return confirm('yakin?');">Hapus</a>
		</td>
		<td><img src="<?php echo $ntr["gambar"] ?>" width="140px"></s></td>
		<td><?php echo	$ntr["nama"] ; ?></td>
		<td><?php echo	$ntr["nis"] ;  ?></td>
		<td><?php echo	$ntr["kelas"]; ?></td>
		<td><?php echo	$ntr["jurusan"] ; ?></td>
		
	</tr>
	<?php $a++; ?>
	<?php endforeach; ?>	

</table>
</body>
</html>