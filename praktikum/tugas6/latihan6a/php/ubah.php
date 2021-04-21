<?php
/*
Nama    : Mochamad Rafi Ramadhan
NRP     : 203040051
Shift   : Praktikum PW Jumat 10.00
*/
?>



<?php
require 'functions.php';

$id = $_GET['id'];
$game = query("SELECT * FROM games WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (Ubah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil Di ubah);
                document.location.href = 'admin.php';
                </script>";
    }
}
?>


<h3>Ubah Data</h3>
<form action="" method="post">
    <ul>
        <li>
            <label for="id">Nomor:</label><br>
            <input type="hidden" name="id" id="id" value="<?= $game['id']; ?>"><br><br>
        </li>
        <li>
            <label for="nama">Games :</label><br>
            <input type="text" name="nama" id="nama" required value="<?= $game['nama']; ?>"><br><br>
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
        <button type="submit" name="tambah">Tambah Data</button>
        <button type="submit">
            <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
        </button>
    </ul>
</form>