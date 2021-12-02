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
    <li><a href="percabangan.php">Percabangan</a></li>
    <li><a href="#" class="hello">Pengulangan</a>
    <li><a href="oadl.php">Operasi Aritmatika dan Logika</a></li>
    </ul>

    <h3>Pengulangan Angka dan Kotak Sesuai Nilai</h3>
    <form action="ulang.php" method="post">
    Masukkan Nilai : <input type="text" name="kotak"></label>
    <button type="submit">submit</button>
    </form>
</body>
</html>