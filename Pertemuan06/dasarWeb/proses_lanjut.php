<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $selectedBuah = $_POST['buah'];

    if (isset($_POST['warna'])) {
        $selectedWarna = $_POST['warna'];
    } else {
        $selectedWarna = [];
    }
    
    $selectedJenisKelamin = $_POST['jenis_kelamin'];

    echo "Anda Memilih Buah : " . $selectedBuah . "<br>";

    if (!empty($selectedWarna)) {
        echo "Anda memilih Warna : " . implode(", ", $selectedWarna) . "<br>";
    } else {
        echo "Anda tidak memilih warna favorit.<br>";
    }

    echo "Jenis Kelamin Anda : " . $selectedJenisKelamin;
}