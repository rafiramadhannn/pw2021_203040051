<?php
/*
Nama    : Mochamad Rafi Ramadhan
NRP     : 203040051
Shift   : Praktikum PW Jumat 10.00
*/
?>



<?php
    function tumpukanBola($tumpukan) {
        for ( $a = 1; $a <= $tumpukan; $a++ ) {
            for ( $b = 1; $b <= $a; $b++ ) {
                echo "<div class=\"bola\">$a</div>";
            }
            echo "<br>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan 2c</title>
    <style>
         .bola {
            display: inline-block;
            background-color: salmon;
            text-align: center;
            width: 50px;
            height: 50px;
            line-height: 50px;
            border-radius: 100%;
            border: 2px solid black;
            margin: 0px 5px 10px 0px;
        }
        .bungkus {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <?php tumpukanBola(5) ?>
</body>
</html>