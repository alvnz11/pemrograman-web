<?php
$angka = 10;
$angka2 = 5;
$hasil = $angka + $angka2;
echo "Hasil Penjumlaham $angka dan $angka2 adalah $hasil.<br>";

$benar = true;
$salah = false;
echo "Variabel benar: $benar, variabel salah: $salah<br>"; 

//Mendefinisikan konstanta untuk nilai tetap
define("NAMA_SITUS", "WebsiteKu.com");
define("TAHUN_PENDIRIAN", 2023);
echo "Selamat datang di " . NAMA_SITUS . ", situs yang didiran pada tahun " . TAHUN_PENDIRIAN . ".<hr>";
?>