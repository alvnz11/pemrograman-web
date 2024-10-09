<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
</head>
<body>
    <?php
    # Array untuk menyimpan data siswa
    $dataSiswa = [
        ['Alice', 'Back End'],
        ['Bob', 'Front End'],
        ['Charlie', 'Data Science'],
        ['David', 'Data Analysis'],
        ['Eva', 'Cyber Security'],
    ];

    function tambahDataSiswa($nama, $kursus, &$dataSiswa) {
        if (!empty($nama) && !empty($kursus)) {
            $dataSiswa[] = [$nama, $kursus];
        }
    }
    
    $nama = $_POST['nama'];
    $kursus = $_POST['kursus'];
    tambahDataSiswa($nama, $kursus, $dataSiswa);
    ?>

    <h3>Tambahkan Data Siswa</h3>

    <form action="tugasno23.php" method="post">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama"><br>
        <label for="kursus">Kursus:</label>
        <input type="text" name="kursus" id="kursus"><br>
        <input type="submit" value="Simpan">
    </form>

    <h3>Data Siswa</h3>

    <?php
    # Menampilkan daftar siswa
    foreach ($dataSiswa as $data) {
        echo "Nama: $data[0]<br>Kursus: $data[1]<br><br>";
    }
    ?>
</body>
</html>