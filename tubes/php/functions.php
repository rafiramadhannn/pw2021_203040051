<?php
// Mochamad Rafi Ramadhan
// 203040051
// Tugas Besar Pemrograman Web
?>



<?php
    // Fungsi untuk melakukan koneksi ke database
    function koneksi() {
        $conn = mysqli_connect("localhost", "pw20051", "#Akun#203040051#") or die("koneksi ke DB gagal");
        mysqli_select_db($conn, "pw20051_tubes_203040051") or die("Database Salah!");

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
        $img = upload();
        if ( !$img ) {
            return false;
        }
        $rilis = htmlspecialchars($data['rilis']);
        $deskripsi = htmlspecialchars($data['deskripsi']);
        $genre = htmlspecialchars($data['genre']);

        $query = "INSERT INTO games
                    VALUES
                    ('', '$nama', '$img', '$rilis', '$deskripsi', '$genre')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    // fungsi upload
function upload()
{
    $nama_file = $_FILES['img']['name'];
    $tipe_file = $_FILES['img']['type'];
    $ukuran_file = $_FILES['img']['size'];
    $error = $_FILES['img']['error'];
    $tmp_file = $_FILES['img']['tmp_name'];

    // ketika tidak ada file yang dipilih
    if ($error == 4) {
        // echo "<script>
        //         alert('Pilih gambar terlebih dahulu');
        // </script>";
        return 'nophoto.jpg';
    }

    // cek ekstensi file
    $daftar_img = ['jpg', 'jpeg', 'png', 'gif'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));

    if (!in_array($ekstensi_file, $daftar_img)) {
        echo "<script>
                alert('Yang anda pilih BUKAN GAMBAR!');
        </script>";
        return false;
    }

    // cek type file
    if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
        echo "<script>
                alert('Yang anda pilih BUKAN GAMBAR!');
              </script>";
        return false;
    }

    // cek ukuran file
    if ($ukuran_file > 50000000) {
        echo "<script>
                alert('Ukuran file terlalu besar!!!');
              </script>";
        return false;
    }

    // siap upload file
    // generate ulang  nama file gambar baru
    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_file;
    move_uploaded_file($tmp_file, '../assets/img/' . $nama_file_baru);

    return $nama_file_baru;
}
    function hapus($id) {

        $conn = koneksi();
        mysqli_query($conn, "DELETE FROM games WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

    function ubah($data) {
        $conn = koneksi();
        
        $id = ($data["id"]);
        $nama = htmlspecialchars($data["nama"]);
        $img = htmlspecialchars($data["img"]);
        $rilis = htmlspecialchars($data["rilis"]);
        $deskripsi = htmlspecialchars($data["deskripsi"]);
        $genre = htmlspecialchars($data["genre"]);

        $query = "UPDATE games SET 
                    nama = '$nama',
                    img = '$img', 
                    rilis = '$rilis', 
                    deskripsi = '$deskripsi', 
                    genre = '$genre', 
                    WHERE id = $id 
                ";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function cari($keyword) {
        $query = "SELECT * FROM games
                    WHERE
                    nama LIKE '%$keyword%' OR
                    rilis LIKE '%$keyword%' OR
                    genre LIKE '%$keyword%'
                ";
        return query($query);
    }


    function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah digunakan');
            </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
?>