<?php
/*
Mochamad Rafi Ramadhan
203040051
https://github.com/rafiramadhannn/pw2021_203040051
Pertemuan 6 - 12 Maret 2021
Mempelajari mengenai Array Assosiative
*/
?>



<?php
// // $mahasiswa = [
// ["Mochamad Rafi Ramadhan", "203040051", "Teknik Informatika", "203040051@mail.unpas.ac.id"],
// ["Yusuf Wahyu Syahroni", "203040052", "Teknik Informatika", "203040052@mail.unpas.ac.id"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri

$mahasiswa = [
    [
        "nama" => "Mochamad Rafi Ramadhan",
        "NRP" => "203040051",
        "Jurusan" => "Teknik Informatika",
        "Email" => "203040051@mail.unpas.ac.id"
    ],
    [
        "nama" => "Yusuf Wahyu Syahroni",
        "NRP" => "203040052",
        "Jurusan" => "Teknik Informatika",
        "Email" => "203040052@mail.unpas.ac.id"
    ]
    ];

    echo $mahasiswa[1]["Email"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NRP : <?= $mhs["NRP"]; ?></li>
        <li>Jurusan : <?= $mhs["Jurusan"]; ?></li>
        <li>Email : <?= $mhs["Email"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>