<?php
/*
Mochamad Rafi Ramadhan
203040051
https://github.com/rafiramadhannn/pw2021_203040051
Pertemuan 6 - 12 Maret 2021
Mempelajari mengenai Array Assosiative
*/
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan Array</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: #BADA55;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
        }
        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear {
            clear: both;
        }
    
    </style>
</head>
<body>
    <?php
        $angka = [
            [1,2,3],
            [4,5,6],
            [7,8,9]
        ];
    ?>

    <?php foreach( $angka as $a ) : ?>
    <?php foreach ( $a as $z) : ?>
        <div class="kotak"><?= $z; ?></div>
    <?php endforeach; ?>
    <div class="clear"></div>
    <?php endforeach; ?>





</body>
</html>