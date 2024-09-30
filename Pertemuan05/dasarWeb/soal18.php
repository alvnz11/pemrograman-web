<?php
$skor = [
    89, 78, 87, 65, 84, 83, 72, 60
];

$totalSkor = 0;

foreach ($skor as $nilai) {
    $totalSkor += $nilai;
}

echo "Total skor pemain adalah: $totalSkor";

if($totalSkor > 500){
    echo "<br>Apakah pemain mendapatkan hadiah tambahan? Ya";
} else {
    echo "<br>Apakah pemain mendapatkan hadiah tambahan? Tidak";
}
?>