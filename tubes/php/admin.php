<?php
/*
Nama    : Mochamad Rafi Ramadhan
NRP     : 203040051
Shift   : Praktikum PW Jumat 10.00
*/
?>



<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
// Menghubungkan dengan file php lainya
require'functions.php';
//melakukan query
$games = query("SELECT * FROM games")
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7Gaming</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body style="background-color: lightgray">
    <h3>Top 10 Games Online Mobile</h3>
    <button class="p-2 mb-2 bg-success">
        <a href="tambah.php" style="color: white">Tambah Data</a>
    </button>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Opsi</th>
            <th scope="col">Games</th>
            <th scope="col">Gambar</th>
            <th scope="col">Rilis</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Genre</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1?>
        <?php foreach($games as $game) : ?>
                <tr>
                    <th scope="row"><?=$i?></th>
                    <td>
                        <a href="ubah.php?id=<?= $game['id'] ?>"style="color: blue;">Ubah</a>
                        
                        <a href="hapus.php?id=<?= $game['id'] ?>" onclick="return confirm('Hapus Data?')"style="color: red;">Hapus</button></a>
                    </td>
                    <td><?= $game["nama"]?> </td>
                    <td><img width="100px" src="../assets/img/<?= $game["img"] ?>" alt="img"></td>
                    <td><?= $game["rilis"]?> </td>
                    <td><?= $game["deskripsi"]?> </td>
                    <td><?= $game["genre"]?> </td>
                </tr>
        <?php
            $i++;
        endforeach;
        ?>
    </tbody>
    </table>
    <br>
    <button class="p-2 mb-2 bg-danger text-white"><a href="logout.php" style="text-decoration: none; color: white;">Logout</a></button>
</body>
</html>