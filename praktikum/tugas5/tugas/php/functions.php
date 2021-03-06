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

    function hapus($id) {

        $conn = koneksi();
        mysqli_query($conn, "DELETE FROM games WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

    function ubah($data) {
        $conn = koneksi();
        $id = htmlspecialchars($data['id']);
        $nama = htmlspecialchars($data['nama']);
        $img = htmlspecialchars($data['img']);
        $rilis = htmlspecialchars($data['rilis']);
        $deskripsi = htmlspecialchars($data['deskripsi']);
        $genre = htmlspecialchars($data['genre']);

        $query = "UPDATE games SET nama = '$nama', img = '$img', rilis = '$rilis', deskripsi = '$deskripsi', genre = '$genre', WHERE id = '$id' ";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    if (isset($_GET['cari'])) {
        $keyword = $_GET['keyword'];
        $games = query("SELECT * FROM games WHERE
                        nama LIKE '%$keyword%' OR
                        img LIKE '%$keyword%' OR
                        rilis LIKE '%$keyword%' OR
                        deskripsi LIKE '%$keyword%' OR
                        genre LIKE '%$keyword%' ");
    } else {
        $games = query("SELECT * FROM games");
    }
?>