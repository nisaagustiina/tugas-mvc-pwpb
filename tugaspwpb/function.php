<?php 
function umur($tgl){
    $lahir = new DateTime($tgl);
    $today = new DateTime();
    $umur = $today->diff($lahir);
    return "$umur->y Tahun $umur->m Bulan $umur->d Hari";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PEMWEB TUGAS</title>
</head>
<body>
    Hasil Hitung Umur
    <p>Tanggal Lahir : 22 Agustus 2002</p>
    <p>Umur : <?= umur('2002-08-22')?></p>
    <a href="index.php">Kembali</a>
</body>
</html>