<?php
/*
Nama    : Mochamad Rafi Ramadhan
NRP     : 203040051
Shift   : Praktikum PW Jumat 10.00
*/
?>
    


<?php 
    // Menghubungkan dengan file php lainnya
    require 'php/functions.php';

    // Melakukan query dari database
    $games = query("SELECT * FROM games")
?>

<!doctype html>
<html lang="en">
    <head>
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="css/stylesheet.css">
    <title>Latihan 4b</title>
    </head>
    <body>
    <h3>Top 10 Games Online Mobile</h3>
        <div class="container">
        <table cellpadding="10" cellspacing="0" border="1">
        <thead>
            <tr>
                <th class="center">No</th>
                <th class="center">Game</th>
                <th class="center">Gambar</th>
                <th class="center">Rilis</th>
                <th class="center">Deskripsi</th>
                <th class="center">Genre</th>
            </tr>
        </thead>
    <tbody>
        <tr>
            <?php $i = 1 ?>
                <?php foreach( $games as $game ) : ?>
                <tr>
                    <td class="center"><?= $i; ?></td>
                    <td class="center"><?= $game["nama"]; ?></td>
                    <td class="center">
                        <img src="assets/img/<?= $game["img"]; ?>">
                    </td>
                    <td class="center"><?= $game["rilis"]; ?></td>
                    <td class="center"><?= $game["deskripsi"]; ?></td>
                    <td class="center"><?= $game["genre"]; ?></td>
                </tr>
                <?php $i++ ?>
        </tr>
        <?php endforeach; ?>
    </tbody>
    </div>
    </body>
</table>
</html> 