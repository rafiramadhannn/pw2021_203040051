<?php 
    function cetak_bintang($angka) {
    $angka = 1;
        for ( $a = $angka; $angka <= 3; $a++ ) {
            for ( $b = 0; $b < $a; $b++ ) {
                echo "*";
            }
            echo "<br>";
        }
    }
?>