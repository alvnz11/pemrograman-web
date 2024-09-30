<?php
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}

echo "Daftar nilai siswa yang lulus: " . implode(', ' , $nilaiLulus);

$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];

$karyawanPengalamanLimaTahun = [];

foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

echo "<hr>Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(', ' ,$karyawanPengalamanLimaTahun);

$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];

$mataKuliah = 'Fisika';

echo "<hr>Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "<br>Nama: {$nilai[0]}, Nilai: {$nilai[1]}";
}

echo "<hr>";

$total = 0;
$rata = 0;
$daftarNilaiAtas = [];

$daftarNilaiMat = [
    ['Alice', 86],
    ['Bob', 95],
    ['Charlie', 78],
    ['David', 62],
    ['Eva', 90],
];

# Hitung Rata-Rata
foreach ($daftarNilaiMat as $nilai) {
    $total += $nilai[1];
    $rata = $total / 5;
}
echo "Nilai rata-rata: $rata<br>";

# Cek Nilai
foreach ($daftarNilaiMat as $nilai) {
    if ($nilai[1] > $rata) {
        $daftarNilaiAtas[] = $nilai;
    }
}

# Tampilkan Nilai
echo "<br>Nilai yang diatas rata-rata: ";
foreach ($daftarNilaiAtas as $nilai) {
    echo "<br>Nama: {$nilai[0]}, Nilai: {$nilai[1]}";
}
?>