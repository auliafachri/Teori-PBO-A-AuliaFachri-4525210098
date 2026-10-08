<?php
// File utama untuk menjalankan program
require_once 'Mahasiswa.php';

// // Menggunakan constructor tanpa parameter
// $mhs1 = new Mahasiswa();
// $mhs1->tampilkanInfo();

// echo PHP_EOL;

// // Menggunakan constructor dengan 2 parameter
// $mhs2 = new Mahasiswa("Budi", "12345678");
// $mhs2->setUmur(20); // Mengatur umur menggunakan setter
// $mhs2->tampilkanInfo();

// echo PHP_EOL;

// // Menggunakan constructor dengan 3 parameter
// $mhs3 = new Mahasiswa("Siti", "87654321", 22);
// $mhs3->tampilkanInfo();

$soja = new Mahasiswa();
$soja->tampilkanInfo();

// memberikan value Soja Purnamasari ke property nama dari objek soja
$soja->setNama("Soja Purnamasari");
echo "Nama : " . $soja->getNama() . PHP_EOL;

$soja->setNim("4523210104");
echo "NIM : " . $soja->getNim() . PHP_EOL;

$soja->setUmur(15);
echo "Umur : " . $soja->getUmur() . PHP_EOL;

// Constructor lengkap
$nenden = new Mahasiswa("Nenden Nuraini", "4523210144", 17);
$nenden->tampilkanInfo();
