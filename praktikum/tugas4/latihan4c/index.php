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
    <title>Latihan 4c</title>
    </head>
    <body>
    <h3>Top 10 Games Online Mobile</h3>
    <div class="container">
        <?php foreach( $games as $game ) : ?>
            <p class="nama">
                <a href="php/detail.php?id= <?= $game['id'] ?>">
                    <?= $game["nama"] ?>
                </a>
            </p>
        <?php endforeach; ?>
    </div>
    </body>
</html> 