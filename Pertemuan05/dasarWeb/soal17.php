<?php
$hargaProduk = 120000;

if($hargaProduk > 100000){
    $diskon = $hargaProduk * 0.2;
    $total = $hargaProduk - $diskon;
    echo "Harga produk: $hargaProduk<br>Total belanja: $total";
} else {
    $total = $hargaProduk;
    echo "Harga produk: $hargaProduk<br>Total belanja: $total";
}
?>