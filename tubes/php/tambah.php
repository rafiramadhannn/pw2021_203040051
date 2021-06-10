<?php
// Mochamad Rafi Ramadhan
// 203040051
// Tugas Besar Pemrograman Web
?>




<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
require 'functions.php';

if (isset($_POST['submit'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('Data BERHASIL ditambahkan!');
                document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
                alert('Data GAGAL ditambahkan!');
                document.location.href = 'admin.php';
            </script>";
    }
}
?>


<h3>Tambah Data</h3>
<form action="" method="post" enctype="multipart/form-data">
    <ul>
        <li>
            <label for="nama">Games :</label><br>
            <input type="text" name="nama" id="nama" required><br><br>
        </li>
        <li>
            <label for="img">Gambar :</label><br>
            <input type="file" name="img" id="img" required><br><br>
        </li>
        <li>
            <label for="rilis">Rilis :</label><br>
            <input type="text" name="rilis" id="rilis" required><br><br>
        </li>
        <li>
            <label for="deskripsi">Deskripsi :</label><br>
            <input type="text" name="deskripsi" id="deskripsi" required><br><br>
        </li>
        <li>
            <label for="genre">Genre :</label><br>
            <input type="text" name="genre" id="genre" required><br><br>
        </li>
        <button type="submit" name="submit">Tambah Data</button>
        <button type="submit">
            <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
        </button>
    </ul>
</form>