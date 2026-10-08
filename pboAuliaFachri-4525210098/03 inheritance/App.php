<?php
require_once 'BangunDatar.php';
require_once 'Lingkaran.php';
require_once 'Persegi.php';
require_once 'Segitiga.php';

$bd = new BangunDatar();

$bd->luas();
$bd->keliling();

// instantiate / membuat objek lingkaran
$lk = new Lingkaran(15);
echo "Luas lingkaran: " . $lk->luas() . PHP_EOL;
echo "keliling lingkaran: " . $lk->keliling() . PHP_EOL;

// instantiate / membuat objek Persegi
$pj = new Persegi(10);
echo "Luas Bujur Sangkar: " . $pj->luas() . PHP_EOL;
echo "keliling Bujur Sangkar: " . $pj->keliling() . PHP_EOL;

// instantiate / membuat objek segitiga
$sg = new Segitiga(10, 8);
echo "Luas Segitiga: " . $sg->luas() . PHP_EOL;

// karena class Segitiga tidak mendefinisikan keliling
// maka ketika sg memanggil keliling(), yang terpanggil
// adalah keliling() yang ada di parent/super class yaitu
// BangunDatar
$sg->keliling();
// echo "keliling Segitiga: " . $sg->keliling() . PHP_EOL;
