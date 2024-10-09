<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px;
        }
        header {
            margin-bottom: 20px;
        }
        table {
            width: 50%;
            border-collapse: collapse;
            font-size: 16px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
        $Dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan'
        ];

        // echo "Nama : {$Dosen['nama']} <br>";
        // echo "Domisili : {$Dosen['domisili']} <br>";
        // echo "Jenis Kelamin : {$Dosen['jenis_kelamin']} <br>";
    ?>

    <table>
        <tr>
            <th>Nama</th>
            <th>Domisili</th>
            <th>Jenis Kelamin</th>
        </tr>
        <tr>
            <td><?php echo $Dosen['nama']; ?></td>
            <td><?php echo $Dosen['domisili']; ?></td>
            <td><?php echo $Dosen['jenis_kelamin']; ?></td>
        </tr>
    </table>
</body>
</html>