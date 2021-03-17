<?php
/*
Nama    : Mochamad Rafi Ramadhan
NRP     : 203040051
Shift   : Praktikum PW Jumat 10.00
*/
?>



<?php
    $pemainBola = [
        "Cristiano Ronaldo" => "Juventus",
        "Lionel Messi" => "Barcelona",
        "Luca Modric" => "Real Madrid",
        "Mohammad Salah" => "Liverpool",
        "Neymar Jr" => "Paris Saint Germain",
        "Sadio Mane" => "Liverpool",
        "Zlatan Ibrahimovic" => "Ac Milan" 
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan 3c</title>
</head>
<style>
    .tabel {
        border: 1px solid black;
        text-align: left;
        padding: 10px;
        font-family: Arial;
        width: 50%;
    }
</style>
<body>
<div class="tabel">
    <p><b>Daftar pemain bola terkenal dan clubnya</b></p>
        <table>
            <?php foreach ($pemainBola as $pemain => $club) : ?>
                <td><b><?= $pemain; ?></b></td>
                <td>:</td>
                <td><?= $club; ?></td>
                <tr></tr>
            <?php endforeach; ?>
        </table>
</div>
</body>
</html>