<?php
/*
Nama    : Mochamad Rafi Ramadhan
NRP     : 203040051
Shift   : Praktikum PW Jumat 10.00
*/
?>



<?php
    $pemainBola = [ "Mohammad Salah", "Cristiano Ronaldo", "Lionel Messi", "Zlatan Ibrahimovic", "Neymar Jr" ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan 3b</title>
</head>
<body>
    <h3>Daftar pemain bola terkenal</h3>
    <ol>
        <?php foreach($pemainBola as $pemain) {
            echo "<li>$pemain</li>";
        }
        ?>
    </ol>

    <?php
        array_push($pemainBola, "Luca Modric", "Sadio Mane");
        sort($pemainBola);
    ?>
    <h3>Daftar pemain bola terkenal baru</h3>
    <ol>
        <?php foreach($pemainBola as $pemain) {
            echo "<li>$pemain</li>";
        }
        ?>
    </ol>
</body>
</html>