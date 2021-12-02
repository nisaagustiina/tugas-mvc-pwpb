<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PEMWEB TUGAS</title>
    <style>
    .hello:link{
	color: orange;
    }
    
    .hello:hover{
        color: green;
        font-family: arial;
        font-size: 30px;
    }

    .hello:active{
        color: red;
        font-style: italic;
    }

    .hello:visited{
        color: skyblue;
    }
    </style>
</head>
<body>
    <h1>PEMWEB TUGAS</h1>
    <ul>
    <li><a href="index.php">Function</a></li>
    <li><a href="array.php">Array</a></li>
    <li><a href="#" class="hello">Percabangan</a></li>
    <li><a href="pengulangan.php">Pengulangan</a>
    <li><a href="oadl.php">Operasi Aritmatika dan Logika</a></li>
    </ul>
    <h3>Status Hasil Quis</h3>
    Ket :
    <ul>
    <li>A = Baik Sekali</li>
    <li>B = Baik</li>
    <li>C = Cukup</li>
    <li>D = Kurang</li>
    <li>E = Gagal</li></ul>
    <form action="cabang.php" method="post">
    Input nilai : <input type="text" name="nilai"><input type="submit" value="submit">
    </form>
</body>
</html>