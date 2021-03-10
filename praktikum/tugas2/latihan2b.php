<?php
/*
Nama    : Mochamad Rafi Ramadhan
NRP     : 203040051
Shift   : Praktikum PW Jumat 10.00
*/
?>



<?php
    $jawabanIsset = "Isset adalah = digunakan untuk memeriksa apakah suatu variabel sudah diatur atau belum. <br><br>";
    $jawabanEmpty = "Empty adalah = sebagai penanda suatu kondisi, untuk mengecek apakah data sudah terisi atau malah kosong.";

    function soal($style) {
        return "<div class=\"$style\">" . $GLOBALS["jawabanIsset"] . $GLOBALS["jawabanEmpty"] . "</div>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan 2b</title>
    <style>
        .style {
            width: fit-content;
            border: 1px solid black;
            font-size: 20px;
            padding: 10px;
        }
    </style>
</head>
<body>
    <?php echo soal("style"); ?>
</body>
</html>