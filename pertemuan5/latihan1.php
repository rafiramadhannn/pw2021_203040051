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
// array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah indeks, yang dimulai dari 0


// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];

// menampilkan array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// menampilkan 1 elemen pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];


// menambahkan elemen baru pada array
 var_dump($hari);
 $hari[] = "Kamis";
 $hari[] = "Jum'at";
 echo "<br>";
 var_dump($hari);























?>
