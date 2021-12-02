<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PEMWEB TUGAS</title>
</head>
<body>
    Hasil Operasi Aritmatika dan Logika<br>
    <?php 
    $sisi = $_POST['sisi'];
    $hasil = ($sisi*$sisi*$sisi);
    echo "Volume kubus dari $sisi ialah $hasil";
    ?><br>
    <a href="oadl.php">Kembali</a>
</body>
</html>