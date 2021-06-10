<?php
// Mochamad Rafi Ramadhan
// 203040051
// Tugas Besar Pemrograman Web
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top 10 Games Online Mobile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
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