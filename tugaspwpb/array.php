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
    <li><a href="#" class="hello">Array</a></li>
    <li><a href="percabangan.php">Percabangan</a></li>
    <li><a href="pengulangan.php">Pengulangan</a>
    <li><a href="oadl.php">Operasi Aritmatika dan Logika</a></li>
    </ul>

    <h3>Mencari indeks Array</h3>
   <p>Kategori laman apa yang lebih sering kamu kunjungi?</p>
   <p>0. Music</p>
   <p>1. Film</p>
   <p>2. Sainstek</p>
   <p>3. Dll</p>
   <form action="arr.php" method="post">
   Masukkan nilai : <input type="text" name="jwb"><input type="submit" value="submit">
   </form>
</body>
</html>