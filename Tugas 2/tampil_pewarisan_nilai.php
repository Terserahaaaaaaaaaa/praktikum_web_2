<?php 
include ("pewarisan.php"); //memasukan data yang diambil dari file pewarisan
	$mysqli = new Universitas();
	
?>
<?php
include 'nav.php'; //memasukan navbarnya dari file nav.php
?>
 
 <!-- membuat tabel untuk menampilkan data nilai dengan kriteria lebih besar dari atau sama dengan 3.60 (cumlaude) -->
<table class="table">
 <thead class="table-dark">
	<tr>
		<th>ID Nilai</th>
		<th>Nilai</th>
		<th>Nilai Akhir</th>
		<th>Mahasiswa ID</th>
		<th>Matkul ID</th>
		<th>Semester ID</th>
	</tr>
</thead>

<!-- mengisi tabel nilai dengan data -->
<tbody>

		<?php foreach ($ni as $show) { ?> <!-- Melakukan literasi melalui array $ni, yang diharapkan berisi data nilai yang diambil dari database. -->
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