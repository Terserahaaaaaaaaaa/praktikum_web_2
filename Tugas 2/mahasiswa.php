<!DOCTYPE html>
<html lang="en">
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php 
include ("koneksi.php"); //memasukan data yang diambil dari file koneksi
	$mysqli = new Universitas();
?>
<?php
include 'nav.php'; //memasukan navbarnya dari file nav.php
?>
 
 <!-- membuat tabel untuk menampilkan data mahasiswa -->
<table  class="table table-hover"> 
 <thead>
	<tr>
		<th>ID Mahasiswa</th>
		<th>Nim Mahasiswa</th>
		<th>Nama Mahasiswa</th>
		<th>Alamat</th>
		<th>Email</th>
		<th>No Telepon</th>
	</tr>
</thead>

<!-- mengisi tabel mahasiswa dengan data -->
<tbody>
		<?php foreach ($mysqli->get_show() as $show) { ?> <!-- Melakukan iterasi (looping) melalui hasil yang dikembalikan oleh metode get_show() dari objek $mysqli -->
			<tr> 
				<td><?php echo $show['id_mhs'] ?></td>
				<td><?php echo $show['nim_mhs'] ?></td>
				<td><?php echo $show['nama_mhs'] ?></td>
				<td><?php echo $show['alamat'] ?></td>
				<td><?php echo $show['email'] ?></td>
				<td><?php echo $show['no_telp'] ?></td>
				<td>
			</tr>
		<?php } ?>
</tbody>
</table>

</body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>