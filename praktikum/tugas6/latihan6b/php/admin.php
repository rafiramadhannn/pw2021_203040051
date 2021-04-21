<?php
/*
Nama    : Mochamad Rafi Ramadhan
NRP     : 203040051
Shift   : Praktikum PW Jumat 10.00
*/
?>



<?php
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
    <title>Top 10 Games Online Mobile</title>
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
    <h3>Top 10 Games Online Mobile</h3>
    <button>
        <a href="tambah.php">Tambah Data</a>
        <form action="" method="GET">
        <input type="text" name="keyword" autofocus>
        <button type="submit" name="cari" class="btn waves-effect waves-light yellow">Cari!</button>
    </form>
    </button>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Opsi</th>
            <th scope="col">Games</th>
            <th scope="col">gambar</th>
            <th scope="col">Rilis</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Genre</th>
        </tr>
    </thead>
    <tbody>
            <?php if (empty($games)) : ?>
            <tr>
                <td colspan="7">
                    <h1>Data Tidak Ditemukan</h1>
                </td>
            </tr>
        <?php else : ?>

        <?php $i = 1?>
        <?php foreach($games as $game) : ?>
                <tr>
                    <th scope="row"><?=$i?></th>
                    <td>
                        <a href="ubah.php?id=<?= $game['id'] ?>"style="color: blue;">Ubah</a>
                        
                        <a href="hapus.php?id=<? $game['id'] ?>" onclick="return confirm('Hapus Data??')"style="color: red;">Hapus</button></a>
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
        <?php endif ?>
    </tbody>
    </table>
    <br>
    <button class="p-3 mb-2 bg-danger text-white"><a href="logout.php" style="text-decoration: none; color: white;">Logout</a></button>


<script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>