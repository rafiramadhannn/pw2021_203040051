<?php
/*
Nama    : Mochamad Rafi Ramadhan
NRP     : 203040051
Shift   : Praktikum PW Jumat 10.00
*/
?>



<?php
    // Mengecek apakah data ada id yang dikirimkan
    // Jika tidak, maka akan dikembalikan ke halaman index.php
    if( !isset($_GET['id'])) {
        header("location: ../index.php");
        exit;
    }

    require 'functions.php';

    // Mengambil id dari url
    $id = $_GET['id'];

    // Melakukan query dengan parameter id yang diambil dari url
    $games = query("SELECT * FROM games WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="css/style.css">
    <title>latihan 4c</title>
</head>
<body>
    <div class="container">
        <div class="gambar">
            <img src="../assets/img/<?= $games["img"]; ?>">
        </div>
        <div class="keterangan">
            <p>Game : <?= $games["nama"]; ?></p>
            <p>Rilis : <?= $games["rilis"]; ?></p>
            <p>deskripsi : <?= $games["deskripsi"]; ?></p>
            <p>Genre : <?= $games["genre"]; ?></p>
        </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>
</html>