# praktikum_web_2

## **Tugas2 230102081 Tabel Mahasiswa dan Tabel Nilai** ##
### I. Pendahuluan
Praktikum ini bertujuan untuk membuat aplikasi berbasis OOP yang mengelola data mahasiswa dan nilai mereka dari database MySQL. Aplikasi ini akan mencangkup class Universitas yang diambil dari database dengan class turunan class mahasiswa dan class nilai

### II. Deskripsi Kasus
Aplikasi ini mengelola informasi mahasiswa dan nilai mereka, termasuk kemampuan menampilkan informasi mahasiswa yang memiliki nim 230102081 dan menampilkan nilai lebih besar dari atau sama dengan 3,60 

### III. Implementasi
#### 1. Koneksikan Database
Buatlah koneksi ke database mysql 
Dengan membuat class Universitas yang digunakan untuk mengakses dan digunakan untuk mengambil data dari database yang ada di phpmyadmin
##### Gunakan methode get_show() untuk mengambil data dari tabel mahasiswa
##### Gunakan methode tampilan() untuk mengambil data dari tabel nilai

    <?php 
     //class Universitas untuk mengkoneksikan ke database
	class Universitas {
		public $host = 'localhost'; //masukan hostname     //menggunakan visibilitas public karena supaya bisa diakses diluar class   
		public $name = 'root'; //masukan name
		public $pass = ''; 
		public $dbname = 'universitas'; //masukan nama database
		
		public $mysqli;
 
		function __construct (){
 
		$this->mysqli = new mysqli($this->host, $this->name, $this->pass, $this->dbname);
 
		if ($this->mysqli->connect_errno) {
			echo "DATABASE TIDAK ADA !  ";
			exit;
		}
 
	}
 
     //mengambil data dari tabel mahasiswa didatabase
	public function get_show (){
		$data = "SELECT * FROM mahasiswa";
		$hasil = $this->mysqli->query($data);
 
		while ($d = mysqli_fetch_array($hasil)){
			$result[] = $d;
		}
 
		return $result;
	}

     //mengambil data dari tabel nilai didatabase

    public function tampilan (){
		$data = "SELECT * FROM nilai";
		$hasil = $this->mysqli->query($data);
 
		while ($d = mysqli_fetch_array($hasil)){
			$result[] = $d;
		}
 
		return $result;
	}
    }

#### 2. Kelas Mahasiswa
Membuat class mahasiswa yang mewarisi dari class Universitas serta menampilkan table mahasiswa. pengisian tabel mahasiswa dilakukan dengan foreach ($mysqli->get_show() as $show): Mengiterasi hasil yang dikembalikan oleh metode get_show() dari objek $mysqli, yang mengambil data mahasiswa dari database.

	<!DOCTYPE html>
	<html lang="en">
	<head>
	<link 		href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 		rel="stylesheet" integrity="sha384-		QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 		crossorigin="anonymous">
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
		<?php foreach ($mysqli->get_show() as $show) { ?> <!-- Melakukan 	iterasi (looping) melalui hasil yang dikembalikan oleh metode get_show() 	dari objek $mysqli -->
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
	<script  		src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"	 integrity="sha384-		YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 		crossorigin="anonymous"></script>
	</html>

#### 3. Kelas Nilai
Membuat class nilai yang mewarisi dari class Universitas serta menampilkan table nilai. pengisian tabel nilai dilakukan dengan foreach ($mysqli->tampilan () as $show): Mengiterasi hasil yang dikembalikan oleh metode tampilan () dari objek $mysqli, yang mengambil data nilai dari database.

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
		<?php foreach ($mysqli->tampilan () as $show) { ?> <!-- Melakukan 	iterasi (looping) melalui hasil yang dikembalikan oleh metode tampilan() 	dari objek $mysqli -->
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

 
 
