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
Membuat class mahasiswa yang mewarisi dari class Universitas  
 
