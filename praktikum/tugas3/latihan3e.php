<?php
/*
Nama    : Mochamad Rafi Ramadhan
NRP     : 203040051
Shift   : Praktikum PW Jumat 10.00
*/
?>



<?php 
$games = [
    [
        "nama" => "PUBG Mobile",
        "gambar" => "pubg.png",
        "rilis" => "23 Maret 2017",
        "deskripsi" => "Intinya adalah bagaimana bisa bertahan hidup dan salah satu game online terbaik 2020 versi Tripzilla Indonesia ini menjadi salah satu game online paling populer untuk dimainkan saat ini. Sembari menunggu kesempatan yang tepat untuk jalan-jalan lagi, tidak ada salahnya menghabiskan waktu dengan memainkan PUBG Mobile. Dijamin seru, lho!",
        "genre" => "Battle Royal"
    ],
    [
        "nama" => "Mobile Legends",
        "gambar" => "mobil-lejen.png",
        "rilis" => "14 Juli 2016",
        "deskripsi" => "Ingin adu strategi dan menguji kesolidan tim kamu dalam bermain game, Mobile Legends adalah game online terbaik 2020 yang wajib kamu mainkan. Game yang sudah diunduh lebih dari empat juta orang ini juga menawarkan virtual joystick, yang memudahkan kamu memainkan game ini. Yang tertarik bisa mencoba langsung, ya!",
        "genre" => "MOBA"
    ],
    [
        "nama" => "Call Of Duty Mobile",
        "gambar" => "codm.png",
        "rilis" => "1 Oktober 2019",
        "deskripsi" => "Game ini menjadi salah satu yang favorit di kalangan gamer online. Saat ini game online terbaik 2020 versi Tripzilla ini juga sudah tersedia versi mobile, jadi bisa dimainkan di smartphone kamu, meski dibutuhkan spesifikasi handphone yang lebih tinggi dari biasanya. Dengan grafis yang lebih tajam, banyak fitur yang ditawarkan, termasuk armory yang lebih canggih dan maps yang lengkap.",
        "genre" => "Battle Royal"
    ],
    [
        "nama" => "Arena Of Valor",
        "gambar" => "aov.png",
        "rilis" => "30 November 2016",
        "deskripsi" => "Kualitas grafis yang mumpuni menjadikan game online ini terlihat lebih realistis. Dengan menampilkan lebih dari 80 hero yang bisa dimainkan di game ini, game multiplayer online battle arena ini mengandalkan tim dan strategi yang cakap untuk bisa meraih kemenangan.",
        "genre" => "MOBA"
    ],
    [
        "nama" => "Free Fire",
        "gambar" => "freefire.png",
        "rilis" => "30 September 2017",
        "deskripsi" => "Karena spek yang lebih ringan, grafis game Free Fire tidak setinggi PUBG atau game lainnya. Namun demikian, game online terbaik 2020 versi Tripzilla ini masih menawarkan keseruan kala memainkannya, mengingat banyak karakter dengan skill berbeda untuk dimainkan selama 10 menit. Cobain, deh!",
        "genre" => "Battle royal"
    ],
    [
        "nama" => "Clash Of Clans",
        "gambar" => "coc.png",
        "rilis" => "2 Agustus 2012",
        "deskripsi" => "Game online yang satu ini termasuk yang populer di kalangan gamer mobile, yang memberikan kesempatan untuk gamer membangun desa dan membentuk kelompok sebelum kemudian menyerang wilayah musuh. Dengan sistem multiplayer, game online terbaik 2020 ini sangat menarik dimainkan bersama-sama.",
        "genre" => "Strategi"
    ],
    [
        "nama" => "Ashphalt 9",
        "gambar" => "ashphalt.png",
        "rilis" => "26 Juli 2018",
        "deskripsi" => "Game balap mobil terbaik yang bisa kamu unduh secara gratis di Playstore adalah Asphalt 9. Dengan kualitas grafis yang mumpuni, game balap ini bisa dimainkan secara online, di mana kamu bisa bertarung melawan orang lain di seluruh dunia yang juga memainkan game yang sama. Dijamin seru!",
        "genre" => "Racing"
    ],
    [
        "nama" => "PES 2020 Mobile",
        "gambar" => "pes.png",
        "rilis" => "10 September 2019",
        "deskripsi" => "Siapa sih yang tidak suka sepakbola? Jika kamu salah satunya, memainkan game online terbaik 2020 ini bisa menjadi cara untuk mengatasi minimnya kesempatan untuk bermain bola di area terbuka. Game buatan Konami ini memiliki gameplay yang mirip dengan versi PC atau console. Kamu juga bisa bertanding secara online, sekaligus memainkan tim kesayangan dan bertemu dengan pemain favorit kamu.",
        "genre" => "Olahraga"
    ],
    [
        "nama" => "Lord Mobile",
        "gambar" => "lord-mobile.png",
        "rilis" => "26 Februari 2016",
        "deskripsi" => "Game strategi RPG lainnya yang bisa kamu mainkan adalah Lords Mobile: Battle of the Empires. Game online terbaik 2020 ini menawarkan gamer mobile untuk membangun kerajaan, membentuk pasukan dan menyerang kerajaan lainnya. Banyak monster dan hero yang bisa kamu pilih untuk membentuk pasukan terbaik kamu sebelum menyerang kerajaan lain. Game ini sudah dimainkan lebih dari 300 juta orang dari seluruh dunia, jadi kamu bisa menguji kemampuan menghadapi banyak orang.",
        "genre" => "RPG"
    ],
    [
        "nama" => "Slither.io",
        "gambar" => "slither.png",
        "rilis" => "27 Maret 2016",
        "deskripsi" => "Game online terbaik 2020 versi Tripzilla Indonesia ini termasuk salah satu game populer dan paling banyak dimainkan saat ini, mengalahkan PUBG dan yang lainnya. Meski memiliki tampilan yang sederhana, kamu bisa bermain dengan seru dan menghadapi lawan, mengatur strategi untuk membuat cacing kamu bertambah besar.",
        "genre" => "Arcade"
    ],
    
]
?>
<!doctype html>
<html lang="en">
    <head>
    <!-- menggunakan bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Latihan 3e - 203040051</title>
    <style>
        h3 {
            text-align: center;
            padding-top: 20px;
        }
    </style>
    </head>
    <body>
    <h3>Top 10 Games Online Mobile</h3>
        <div class="container mt-5 mb-5 text-center">
        <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Game</th>
            <th scope="col">Gambar</th>
            <th scope="col">Rilis</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Genre</th>
            </tr>
        </thead>
    <tbody>
        <?php foreach($games as $game => $name) : ?>
        <tr>
            <td><?= $game+1; ?></td>
            <td><?= $name["nama"]; ?></td>
            <td>
                <img src="img/<?= $name["gambar"]; ?>">
            </td>
            <td><?= $name["rilis"]; ?></td>
            <td><?= $name["deskripsi"]; ?></td>
            <td><?= $name["genre"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    </div>
    </body>
</table>
</html> 