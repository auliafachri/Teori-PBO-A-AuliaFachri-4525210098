<?php
// Kelas Mahasiswa (Parent Class)
class Mahasiswa {

    // Variabel instance
    private $nama;
    private $nim;
    private $umur;

    // PHP tidak punya constructor overloading, jadi 3 constructor di Java
    // digabung jadi 1 constructor dengan nilai default:
    // new Mahasiswa()                      --> semua pakai nilai default
    // new Mahasiswa("Budi", "12345678")    --> umur default 0
    // new Mahasiswa("Siti", "87654321", 22)
    public function __construct($nama = "Belum Diisi", $nim = "Belum Diisi", $umur = 0) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->umur = $umur;
    }

    // Getter dan Setter untuk nama
    public function getNama() {
        return $this->nama;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

    // Getter dan Setter untuk nim
    public function getNim() {
        return $this->nim;
    }

    public function setNim($nim) {
        $this->nim = $nim;
    }

    // Getter dan Setter untuk umur
    public function getUmur() {
        return $this->umur;
    }

    public function setUmur($umur) {
        $this->umur = $umur;
    }

    // Method untuk menampilkan informasi mahasiswa
    public function tampilkanInfo() {
        echo "Nama: " . $this->nama . PHP_EOL;
        echo "NIM: " . $this->nim . PHP_EOL;
        echo "Umur: " . $this->umur . PHP_EOL;
    }
}
