<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Siswa</title>
    <link rel="stylesheet" href="../public/css/costum.css">
</head>
<body>
    <div class="container">
    <h1>Data Siswa</h1>
    <table border="1">
        <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Prodi</th>
        <th>Jurusan</th>
        <th>Nilai</th>
        </tr>
        <?php foreach($data['ssw'] as $ssw) : ?>
        <tr>
            <td><?= $ssw['nim']?></td>
            <td><?= $ssw['nama']?></td>
            <td><?= $ssw['tempat_lahir']?></td>
            <td><?= $ssw['tanggal_lahir']?></td>
            <td><?= $ssw['prodi']?></td>
            <td><?= $ssw['jurusan']?></td>
            <td><?= $ssw['nilai']?></td>
        </tr>
        <?php endforeach;?>
    </table>
    </div>
</body>
</html>