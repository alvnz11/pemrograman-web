<?php
echo "<h3>Daftar Nilai Siswa</h3>";
$daftarNilai = [
    85, 92, 58, 64, 90, 55, 88, 79, 70, 96
];

sort($daftarNilai);

foreach ($daftarNilai as $siswa) {
    echo "Nilai: {$siswa}<br>";
}
echo "<h3>Rata-rata nilai siswa setelah mengabaikan nilai tertinggi dan terendah</h3>";

$total = 0;

for ($i = 0; $i < count($daftarNilai); $i++) {
    if ($i > 1 && $i < count($daftarNilai) - 2) {
        echo "Nilai: {$daftarNilai[$i]}<br>";
        $total += $daftarNilai[$i];
    }
}

echo "Rata-rata: " . $total / (count($daftarNilai) - 4);
?>