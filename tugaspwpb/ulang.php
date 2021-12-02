<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PEMWEB TUGAS</title>
    <style>
 		.kotak{
 			width: 50px;
 			height: 50px;
 			background-color: salmon;
 			text-align: center;
 			line-height: 50px;
 			margin: 3px;
 			float: left;
 		.clear {clear:both;}
 		}
 	</style>
</head>
<body>
    hasil dari looping<br>
    <?php 
    $kotak = $_POST['kotak']; 
    $i = 0;
    while($i < $kotak){
        echo "<div class='kotak'>$kotak</div>";
        $i++;
       }
    ?>
    <br><a href="pengulangan.php">Kembali</a>
</body>
</html>