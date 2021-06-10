<?php
// Mochamad Rafi Ramadhan
// 203040051
// Tugas Besar Pemrograman Web
?>

    


<?php 

    session_start();
  
    // Menghubungkan dengan file php lainnya
    require 'php/functions.php';

    // Melakukan query dari database
    $games = query("SELECT * FROM games");

    // tombol cari ditekan
    if( isset($_POST["cari"]) ) {
        $games = cari($_POST["keyword"]);
    }
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>7Gaming</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body style="background-color: lightgray">
    <!--Navbar-->
    <div class="navbar-fixed">
      <nav class="teal lighten-2">
            <div class="container">
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo left">7Gaming</a>
                <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right">
                <li><a href="php/login.php">Login</a></li>
                </ul>
            </div>
        </div>
        </nav>
    </div>

    <!--Sidenav-->
    <ul class="sidenav" id="mobile-nav">
      <li><a href="php/login.php">Login</a></li>
    </ul>

    <div class="search">
        <div class="container">
            <form action="" method="POST">
                <input type="text" name="keyword" placeholder="Cari Games" autocomplete="off" autofocus id="keyword">
                <input type="submit" name="cari" id="tombol-cari"></button>
            </form>
        </div>
    </div>

    <div class="container">
    <h3>Top Games Online Mobile</h3>
    <div id="container">
    <table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Games</th>
            <th scope="col">Gambar</th>
            <th scope="col">Rilis</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Genre</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1?>
        <?php foreach($games as $game) : ?>
                <tr>
                    <th scope="row"><?=$i?></th>
                    <td><?= $game["nama"]?> </td>
                    <td><img width="100px" src="assets/img/<?= $game["img"] ?>" alt="img"></td>
                    <td><?= $game["rilis"]?> </td>
                    <td><?= $game["deskripsi"]?> </td>
                    <td><?= $game["genre"]?> </td>
                </tr>
        <?php
            $i++;
        endforeach;
        ?>
    </tbody>
    </table>
    </div>
    </div>


    
    <!--Footer-->    
    <footer class="teal lighten-2 white-text center">
        <p class="flow-text"><small>Copyright &copy; 2021 - 7Gaming Official.</small></p>
    </footer>
    

    <script src="js/script.js"></script>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        const sidenav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sidenav);
    </script>
</body>
</html>
