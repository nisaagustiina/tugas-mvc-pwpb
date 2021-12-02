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
    <li><a href="pengulangan.php" class="hello">Pengulangan</a>
    <li><a href="#" class="hello">Operasi Aritmatika dan Logika</a></li>
    </ul>

    <h3>Menghitung Volume Kubus</h3>
    <form action="oadl1.php" method="post">
    <label for="">Masukkan sisi : <input type="text" name="sisi"></label>
    <button type="submit">Submit</button>
    </form>
</body>
</html>