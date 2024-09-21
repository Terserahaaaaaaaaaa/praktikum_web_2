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