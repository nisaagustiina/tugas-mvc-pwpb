<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PEMWEB TUGAS</title>
</head>
<body>
    Hasil dari index array<br>
    <?php
    $jwb = $_POST['jwb'];
    $laman = ['Music','Film','Sainstek','Dll'];
    echo "Laman yang paling sering anda kunjungi ialah ".$laman[$jwb];
    ?>
    <br><a href="array.php">Kembali</a>
</body>
</html>