<?php
// Mochamad Rafi Ramadhan
// 203040051
// Tugas Besar Pemrograman Web
?>



<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
    exit;
}
require 'functions.php';

$id = $_GET["id"];
$game = query("SELECT * FROM games WHERE id = $id")[0];

if (isset($_POST["submit"])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil Di ubah!');
                document.location.href = '../admin.php';
                </script>";
    } else {
        echo "data gagal diubah!";
    }
}
?>


<h3>Ubah Data</h3>
<form action="" method="post">
<input type="hidden" name="id" value="<?= $game['id']; ?>">
    <ul>
        <li>
            <label for="nama">Games :</label><br>
            <input type="text" name="nama" id="nama" required value="<?= $game['nama']; ?>"><br><br>
        </li>
        <li>
            <label for="img">Gambar :</label><br>
            <input type="text" name="img" id="img" required value="<?= $game['img']; ?>"><br><br>
        </li>
        <li>
            <label for="rilis">Rilis :</label><br>
            <input type="text" name="rilis" id="rilis" required value="<?= $game['rilis']; ?>"><br><br>
        </li>
        <li>
            <label for="deskripsi">Deskripsi :</label><br>
            <input type="text" name="deskripsi" id="deskripsi" required value="<?= $game['deskripsi']; ?>"><br><br>
        </li>
        <li>
            <label for="genre">Genre :</label><br>
            <input type="text" name="genre" id="genre" required value="<?= $game['genre']; ?>"><br><br>
        </li>
        <button type="submit" name="submit">Ubah Data</button>
        <button type="submit">
            <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
        </button>
    </ul>
</form>