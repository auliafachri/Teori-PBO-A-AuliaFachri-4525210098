<?php
require_once 'Pemain.php';

class Tim {
    private $namaTim;
    private $daftarPemain;

    public function __construct($namaTim, $daftarPemain) {
        $this->namaTim = $namaTim;
        $this->daftarPemain = $daftarPemain;
    }

    public function tampilkanPemain() {
        echo "Tim " . $this->namaTim . " memiliki pemain:" . PHP_EOL;
        foreach ($this->daftarPemain as $pemain) {
            echo "- " . $pemain->getNama() . PHP_EOL;
        }
    }
}
