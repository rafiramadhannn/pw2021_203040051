<?php
/*
Nama    : Mochamad Rafi Ramadhan
NRP     : 203040051
Shift   : Praktikum PW Jumat 10.00
*/
?>



<?php 
    session_start();
    session_destroy();
    header("Location: ../index.php");
    die;
?>