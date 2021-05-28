<?php
require '../php/functions.php';

$keyword =$_GET["keyword"];

$query = "SELECT * FROM games
            WHERE
            nama LIKE '%$keyword%' OR
            rilis LIKE '%$keyword%' OR
            genre LIKE '%$keyword%'
        ";
$games = query($query);

?>

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