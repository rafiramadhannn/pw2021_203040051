<?php
/*
Nama    : Mochamad Rafi Ramadhan
NRP     : 203040051
Shift   : Praktikum PW Jumat 10.00
*/
?>

<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
require 'functions.php';
$id = $_GET['id'];

if (hapus($id) > 0)
{
    echo "<script>
            alert('Data Berhasil Di Hapus! ');
            document.location.href = 'admin.php';
            </script>";
} else {
    echo "<script>
            alert('Data Gagal Di Hapus!');
            document.location.href = 'admin.php';
            </script>";
}
?>