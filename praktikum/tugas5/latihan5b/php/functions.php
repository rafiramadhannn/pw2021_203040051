<?php
/*
Nama    : Mochamad Rafi Ramadhan
NRP     : 203040051
Shift   : Praktikum PW Jumat 10.00
*/
?>



<?php
    // Fungsi untuk melakukan koneksi ke database
    function koneksi() {
        $conn = mysqli_connect("localhost", "root", "");
        mysqli_select_db($conn, "pw_tubes_203040051");

        return $conn;
    }

    // Function untuk melakukan query dan memasukkannya kedalam array
    function query($sql) {
        $conn = koneksi();
        $result = mysqli_query($conn, "$sql");
        $rows = [];
        while ( $row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function tambah($data) {
        $conn = koneksi();

        $nama = htmlspecialchars($data['nama']);
        $img = htmlspecialchars($data['img']);
        $rilis = htmlspecialchars($data['rilis']);
        $deskripsi = htmlspecialchars($data['deskripsi']);
        $genre = htmlspecialchars($data['genre']);

        $query = "INSERT INTO games
                    VALUES
                    ('', '$nama', '$img', '$rilis', '$deskripsi', '$genre')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
?>