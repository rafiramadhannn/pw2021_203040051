<?php
    // Date
    // Untuk menampilkan tanggal dengan format tertentu
    // echo date("l, d-M-Y");

    // Time
    // UNIX Timestamp / EPOCH time
    // detik yang sudah berlalu sejak 1 januari 1970
    // echo time();
    // echo date("d M Y", time()-60*60*24*100);

    // mktime
    // membuat sendiri detik
    // mktime(0,0,0,0,0,0)
    // jam, menit, detik, bulan, tanggal, tahun
    // echo date("l", mktime(0,0,0,11,07,2002));

    // strtotime
    echo date ("l", strtotime("07 nov 2002"));
?>