<?php
/*
Nama    : Mochamad Rafi Ramadhan
NRP     : 203040051
Shift   : Praktikum PW Jumat 10.00
*/
?>



<?php
function hitungDeterminan( $r, $s, $t, $u ) {
    $hasil = ( $r * $u ) - ( $s * $t );

    echo "<table style='border-left: ; border-right: ;' cellspacing = '5' cellpadding = '5'>
        <tr>
            <td> $r </td>
            <td> $s </td>
        </tr>
        <tr>
            <td> $t </td>
            <td> $u </td>
        </tr>
        </table>";
    echo"<b>Determinan dari matriks tersebut adalah $hasil</b>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan 2d</title>
</head>
<body>
    <?php hitungDeterminan( 1, 2, 3, 4 ) ?>
</body>
</html>
