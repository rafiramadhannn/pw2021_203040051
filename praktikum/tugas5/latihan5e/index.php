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
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Top 10 Games Online Mobile</title>
        <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    </head>
    <body>
        <h3>Top 10 Games Online Mobile</h3>
        <div class="container">
        <button><a href="php/admin.php">Edit</a></button>
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