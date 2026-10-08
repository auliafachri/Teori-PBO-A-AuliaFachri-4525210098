<?php
require_once 'Pasien.php';

class Dokter {
    private $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function merawat(Pasien $pasien) {
        echo "Dokter " . $this->nama . " merawat pasien " . $pasien->getNama() . PHP_EOL;
    }
}
