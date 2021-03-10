<?php
/*
Nama    : Mochamad Rafi Ramadhan
NRP     : 203040051
Shift   : Praktikum PW Jumat 10.00
*/
?>



<?php
    function gantiStyle( $tulisan, $style1, $style2 ) {
        return "<div class=\"$style1 $style2\">$tulisan</div>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan 2a</title>
    <style>
        .tulisan {
            font: italic bolder 28px arial;
            color: #8c782d;
        }

        .bungkus {
            border: 1px solid black;
            box-shadow: 0 0 5px rgba(0, 0, 0, 20);
            width: 43%;
            padding: 5px;
        }
    </style>
</head>
<body>
    <?php echo gantiStyle("Selamat datang di praktikum PW", "tulisan", "bungkus") ?>
</body>
</html>