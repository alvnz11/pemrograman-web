<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operasi 2 Bilangan</title>
</head>
<body>
    <h2>Operasi 2 Bilangan</h2>

    <form action="" method="POST">
        <label for="bil1">Bilangan 1</label>
        <input type="number" name="bil1">
        <br><br>
        <label for="bil2">Bilangan 2</label>
        <input type="number" name="bil2">
        <br><br>
        <input type="submit" value="Hitung">
        <br><br>
    </form>

    <?php
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];

        # Penjumlahan
        $jumlah = $bil1 + $bil2;
        echo "Hasil penjumlahan = $jumlah <br>";

        # Pengurangan
        $kurang = $bil1 - $bil2;
        echo "Hasil pengurangan = $kurang <br>";

        # Perkalian
        $kali = $bil1 * $bil2;
        echo "Hasil perkalian = $kali <br>";

        # Pembagian
        $bagi = $bil1 / $bil2;
        echo "Hasil pembagian = $bagi <br>";
    ?>
</body>
</html>