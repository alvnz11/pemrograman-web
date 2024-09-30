<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luas Lingkaran</title>
</head>
<body>
    <h1>Menghitung Luas Lingkaran</h1>
    <form action="" method="POST">
        Masukkan jari-jari lingkaran <br> <input type="number" name="jari">
        <input type="submit" value="Hitung">
    </form>

    <?php
        $jari = $_POST['jari'];
        define('pi', 3.14);
        $luas = pi * $jari * $jari;
        echo "Luas lingkaran = $luas";
    ?>
</body>
</html>