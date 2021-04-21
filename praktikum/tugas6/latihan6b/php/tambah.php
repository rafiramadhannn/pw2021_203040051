<?php
/*
Nama    : Mochamad Rafi Ramadhan
NRP     : 203040051
Shift   : Praktikum PW Jumat 10.00
*/
?>



<?php
require 'functions.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil Di Tambahkan);
                document.location.href = 'admin.php';
                </script>";
    }
}
?>


<h3>Tambah Data</h3>
<form action="" method="post">
    <ul>
        <li>
            <label for="nama">Games :</label><br>
            <input type="text" name="nama" id="nama" required><br><br>
        </li>
        <li>
            <label for="img">Gambar :</label><br>
            <input type="text" name="img" id="img" required><br><br>
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
        <button type="submit" name="tambah">Tambah Data</button>
        <button type="submit">
            <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
        </button>
    </ul>
</form>