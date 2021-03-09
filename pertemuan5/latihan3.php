<?php
/*
Mochamad Rafi Ramadhan
203040051
https://github.com/rafiramadhannn/pw2021_203040051
Pertemuan 5 - 5 Maret 2021, mohon maaf untuk tugas menyelesaikan video dari pertemuan 3 dan 4 lupa diberi identitas
Mempelajari mengenai Array
*/
?>



<?php 
$mahasiswa = [
    [ "Mochamad Rafi Ramadhan", "203040051", "Teknik Informatika", "203040051@mail.unpas.ac.id" ],
    [ "Doddy Ferdiansyah", "033040001", "Teknik Industri", "doddy@yahoo.com" ],
    [ "erik", "023040123", "Teknik Mesin", "erik@gmail.com" ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    
    <h1>Daftar Mahasiswa</h1>
<?php foreach ( $mahasiswa as $mhs  ) : ?>  
<ul>
    <li>Nama : <?= $mhs[0]; ?></li>
    <li>NRP : <?= $mhs[1]; ?></li>
    <li>Jurusan : <?= $mhs[2]; ?></li>
    <li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>
</body>
</html>