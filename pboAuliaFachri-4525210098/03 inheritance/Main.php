<?php
// File utama untuk menjalankan program
require_once 'MahasiswaInternational.php';

// Menggunakan constructor tanpa parameter di MahasiswaInternational
$mhsInt1 = new MahasiswaInternational();
$mhsInt1->setNama("Paolo Dicanio");
$mhsInt1->setNim("INT12345");
$mhsInt1->setUmur(21);
$mhsInt1->setNegaraAsal("Italy");
$mhsInt1->tampilkanInfo();

echo PHP_EOL;

// Menggunakan constructor dengan nama, nim, umur (0 dulu), dan negara
$mhsInt2 = new MahasiswaInternational("Sarah", "INT67890", 0, "Australia");
$mhsInt2->setUmur(22); // Mengatur umur menggunakan setter
$mhsInt2->tampilkanInfo();

echo PHP_EOL;

// Menggunakan constructor dengan 4 parameter (nama, nim, umur, negara)
$mhsInt3 = new MahasiswaInternational("David", "INT54321", 23, "UK");
$mhsInt3->tampilkanInfo();
