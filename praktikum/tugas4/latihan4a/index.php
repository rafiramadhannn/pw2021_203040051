<?php
/*
Nama    : Mochamad Rafi Ramadhan
NRP     : 203040051
Shift   : Praktikum PW Jumat 10.00
*/
?>
    


<?php 
    // Melakukan koneksi ke database
    $conn = mysqli_connect("localhost", "root", "");

    // Memilih database
    mysqli_select_db($conn, "pw_tubes_203040051");

    // Melakukan querry dari database
    $result = mysqli_query($conn, "SELECT * FROM games");
?>
<!doctype html>
<html lang="en">
    <head>
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="css/stylesheet.css">
    <title>Latihan 4a</title>
    </head>
    <body>
    <h3>Top 10 Games Online Mobile</h3>
        <div class="container">
        <table class="striped border-collapse">
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
        <?php $i = 1 ?>
        <?php while($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td class="center"><?= $i; ?></td>
            <td class="center"><?= $row["nama"]; ?></td>
            <td class="center">
                <img src="assets/img/<?= $row["img"]; ?>">
            </td>
            <td class="center"><?= $row["rilis"]; ?></td>
            <td class="center"><?= $row["deskripsi"]; ?></td>
            <td class="center"><?= $row["genre"]; ?></td>
        </tr>
        <?php $i++ ?>
        <?php endwhile; ?>
    </tbody>
    </div>
    </body>
</table>
</html> 