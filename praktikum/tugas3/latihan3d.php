<?php
/*
Nama    : Mochamad Rafi Ramadhan
NRP     : 203040051
Shift   : Praktikum PW Jumat 10.00
*/
?>



<?php 
    $pemainBola = [
    [
        "nama" => "Cristiano Ronaldo",
        "club" => "Juventus",
        "main" => "100",
        "gol" => "76",
        "assist" => "30"
    ],
    [
        "nama" => "Lionel Messi",
        "club" => "Barcelona",
        "main" => "120",
        "gol" => "80",
        "assist" => "12"
    ],
    [
        "nama" => "Luca Modric",
        "club" => "Real Madrid",
        "main" => "87",
        "gol" => "12",
        "assist" => "48"
    ],
    [
        "nama" => "Mohammad Salah",
        "club" => "Liverpool",
        "main" => "90",
        "gol" => "103",
        "assist" => "8"
    ],
    [
        "nama" => "Neymar Jr",
        "club" => "Paris Saint Germain",
        "main" => "109",
        "gol" => "56",
        "assist" => "15"
    ],
    [
        "nama" => "Sadio Mane",
        "club" => "Liverpool",
        "main" => "63",
        "gol" => "30",
        "assist" => "70"
    ],
    [
        "nama" => "Zlatan Ibrahimovic",
        "club" => "Ac Milan",
        "main" => "100",
        "gol" => "10",
        "assist" => "12"
    ]
];
$totalMain = 0;
$totalGol= 0;
$totalAssist = 0;
foreach ($pemainBola as $pemain => $value) {
    $totalMain += $value['main'];
    $totalGol += $value['gol'];
    $totalAssist += $value['assist'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan 3d</title>
    <style>
        .tabel {
            width: fit-content;
            padding: 10px;
            font-family: arial;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="tabel">
            <table border="1" cellspacing="0" cellpadding="10">
                <td><b>NO</b></td>
                <td><b>NAMA</b></td>
                <td><b>CLUB</b></td>
                <td><b>MAIN</b></td>
                <td><b>GOAL</b></td>
                <td><b>ASSIST</b></td>
                <tr></tr>
                <?php  $nomor = 1; ?>    
                <?php foreach ($pemainBola as $pemain) : ?>  

                        <td><?= $nomor; ?></td>
                        <td><?= $pemain["nama"];?></td>
                        <td><?= $pemain["club"];?></td>
                        <td><?= $pemain["main"];?></td>
                        <td><?= $pemain["gol"];?></td>
                        <td><?= $pemain["assist"];?></td>
                        <tr></tr>  
                        <?php $nomor++; ?>
                <?php endforeach; ?>
                <th>#</th>
                <th colspan="2">
                <center>Jumlah</center>
                </th>
                <th><?= $totalMain ?></th>
                <th><?= $totalGol ?></th>
                <th><?= $totalAssist ?></th>
        </table>
    </div>
</body>
</html>