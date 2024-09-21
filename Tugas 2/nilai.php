<?php 
include ("koneksi.php"); //memasukan data yang diambil dari file koneksi
	$mysqli = new Universitas();
	
?>
<?php
include 'nav.php'; //memasukan navbarnya dari file nav.php
?>
 
 <!-- membuat tabel untuk menampilkan data mahasiswa -->
<table class="table table-hover">
 <thead>
	<tr>
		<th>ID Nilai</th>
		<th>Nilai</th>
		<th>Nilai Akhir</th>
		<th>Mahasiswa ID</th>
		<th>Matkul ID</th>
		<th>Semester ID</th>
	</tr>
</thead>

<!-- mengisi tabel mahasiswa dengan data -->
<tbody>
		<?php foreach ($mysqli->tampilan () as $show) { ?> <!-- Melakukan iterasi (looping) melalui hasil yang dikembalikan oleh metode tampilan() dari objek $mysqli -->
			<tr>
				<td><?php echo $show['id_nilai'] ?></td>
				<td><?php echo $show['nilai'] ?></td>
				<td><?php echo $show['nilai_akhir'] ?></td>
				<td><?php echo $show['mahasiswa_id'] ?></td>
				<td><?php echo $show['matkul_id'] ?></td>
				<td><?php echo $show['semester_id'] ?></td>
				<td>
			</tr>
		<?php } ?>
</tbody>
</table>