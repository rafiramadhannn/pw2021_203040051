<!-- Nama : Mochamad Rafi Ramadhan -->
<!-- NRP  : 203040051 -->
<!-- Shift: Praktikum PW Jumat 10.00 -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 1c</title>
    <style>
        h3 {
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
    </style>
</head>
<body>
    <?php for ( $a = 1; $a <= 3; $a++ ) : ?>
        <?php for ( $b = 1; $b <= $a; $b++ ) : ?>
            <h3><?= $a; ?></h3>
        <?php endfor; ?>
        <br>
    <?php endfor; ?>
</body>
</html>