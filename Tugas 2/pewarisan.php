
<?php
include("koneksi.php"); //memasukan data yang diambil dari file koneksi

// membuat class mahasiswa untuk mewarisi class Universitas
class mahasiswa extends Universitas{
    public function __construct(){ //memanggil konstruktor dari class induk (Universitas)
    parent:: __construct();
    }

	// Menyusun query SQL untuk mengambil semua data dari tabel mahasiswa dengan kondisi nim mahasiswa '230102081'
	public function tampilkan (){ //methode polimorphism
		$result = "SELECT * FROM mahasiswa WHERE nim_mhs = '230102081'";
		return $this->mysqli->query($result);
	}
}

// membuat class nilai untuk mewarisi class Universitas
class nilai extends Universitas{
    public function __construct(){ //memanggil konstruktor dari class induk (Universitas)
    parent:: __construct();
    }

	// Menyusun query SQL untuk mengambil semua data dari tabel nilai dengan kondisi nilai lebih besar dari atau sama dengan 3,60 (cumlaude)
	public function tampilkan (){ //methode polimorphism
		$result = "SELECT * FROM nilai WHERE nilai_akhir >= '3.60'";
		return $this->mysqli->query($result);
	}

}

// instansiasi kelas dan pemanggilan methode

//instansiasi class mahasiswa
$mhs = new mahasiswa();
$mahas = $mhs->tampilkan();

//instansiasi class nilai
$n = new nilai();
$ni = $n->tampilkan();