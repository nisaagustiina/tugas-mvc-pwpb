<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PEMWEB TUGAS</title>
</head>
<body>
    <?php 
    $nilai = 0;
    $nilai = $_POST['nilai'];

    if($nilai > 65){
        if($nilai == 100){
        echo "Keterangan $nilai ialah A";
        }
        elseif($nilai >= 85) {
            echo "Keterangan $nilai ialah B";
        }
        elseif($nilai > 70){
            echo "Keterangan $nilai ialah C";
        }
        else{
            echo "Keterangan $nilai ialah D";
        }
    }
    else{
        echo "Keterangan $nilai ialah E";
    }
    ?>
    <br><a href="percabangan.php">Kembali</a>
</body>
</html>