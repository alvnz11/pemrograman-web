<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil penjumlahan $a + $b = $hasilTambah <br>";
echo "Hasil pengurangan $a - $b = $hasilKurang <br>";
echo "Hasil perkalian $a * $b = $hasilKali <br>";
echo "Hasil pembagian $a / $b = $hasilBagi <br>";
echo "Hasil sisa $a % $b = $sisaBagi <br>";
echo "Hasil pangkat $a ** $b = $pangkat <hr>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "$a == $b = $hasilSama <br>";
echo "$a != $b = $hasilTidakSama <br>";
echo "$a < $b = $hasilLebihKecil <br>";
echo "$a > $b = $hasilLebihBesar <br>";
echo "$a <= $b = $hasilLebihKecilSama <br>";
echo "$a >= $b = $hasilLebihBesarSama <hr>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "$a && $b = $hasilAnd <br>";
echo "$a || $b = $hasilOr <br>";
echo "!$a = $hasilNotA <br>";
echo "!$b = $hasilNotB <hr>";

$a += $b;
echo "a += b = $a <br>";
$a -= $b;
echo "a -= b = $a <br>";
$a *= $b;
echo "a *= b = $a <br>";
$a /= $b;
echo "a /= b = $a <br>";
$a %= $b;
echo "a %= b = $a <hr>";

$a = 10;
$hasilIdentik = $a === $b;
$tidakIdentik = $a !== $b;

echo "$a === $b = $hasilIdentik <br>";
echo "$a !== $b = $tidakIdentik <hr>";

$kursiRestoran = 50;
$kursiDipakai = 28;
$kursiKosong = $kursiRestoran - $kursiDipakai;
$persentaseKursiKosong = $kursiKosong / $kursiRestoran * 100;
echo "Kursi kosong = $kursiKosong <br>";
echo "Persentase kursi kosong = $persentaseKursiKosong%"; 
?>