<?php
/*
Mochamad Rafi Ramadhan
203040051
https://github.com/rafiramadhannn/pw2021_203040051
Pertemuan 5 - 5 Maret 2021, mohon maaf untuk tugas menyelesaikan video dari pertemuan 3 dan 4 lupa diberi identitas
Mempelajari mengenai Array
*/
?>


<?php
// pengulangan pada array
// for  /  foreach
$angka = [3,2,15,20,11,88,1,45];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan 2</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear {clear: both;}
    </style>
</head>
<body>

<?php for ( $i = 0; $i < count($angka); $i++ ) { ?>
<div class="kotak"><?php echo $angka[$i]; ?></div> 
<?php } ?>

<div class="clear"></div>

<?php foreach( $angka as $a ) { ?>
    <div class="kotak"><?php echo $a; ?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach ( $angka as $a ) : ?>
    <div class="kotak"><?= $a; ?></div>
<?php endforeach; ?>

</body>
</html>