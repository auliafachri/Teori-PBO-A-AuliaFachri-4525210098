<?php
require_once 'Mahasiswa.php';

// Kelas MahasiswaInternational (Subclass) yang mewarisi Mahasiswa
class MahasiswaInternational extends Mahasiswa {
    // Variabel tambahan untuk mahasiswa internasional
    private $negaraAsal;

    // 1 constructor dengan nilai default (pengganti 3 constructor di Java)
    public function __construct($nama = "Belum Diisi", $nim = "Belum Diisi", $umur = 0, $negaraAsal = "Belum Diisi") {
        parent::__construct($nama, $nim, $umur); // Memanggil constructor parent
        $this->negaraAsal = $negaraAsal;
    }

    // Getter dan Setter untuk negara asal
    public function getNegaraAsal() {
        return $this->negaraAsal;
    }

    public function setNegaraAsal($negaraAsal) {
        $this->negaraAsal = $negaraAsal;
    }

    // Override method tampilkanInfo untuk menampilkan informasi tambahan
    public function tampilkanInfo() {
        parent::tampilkanInfo(); // Memanggil method tampilkanInfo dari parent
        echo "Negara Asal: " . $this->negaraAsal . PHP_EOL;
    }
}
