<?php

require '../php/functions.php';
$mahasiswa = cari($_GET['keyword']);
?>
<table border="1" cellpadding="10" cellspacing="0">

  <tr>
    <th>#</th>
    <th>Gambar</th>
    <th>Nama</th>
    <th>Aksi</th>
  </tr>

  <?php if (empty($mahasiswa)) : ?>
    <tr>
      <td colspan="4">
        <p>Data mahasiswa tidak ditemukan!!</p>
      </td>
    </tr>
  <?php endif; ?>
  <?php $i = 1;
  foreach ($mahasiswa as $mhs) : ?>

    <tr>
      <td><?= $i++; ?></td>
      <td><img src="img/<?=$mhs["img"]; ?>" ></td>
      <td><?= $mhs['nama']; ?></td>
      <td>
        <a href="php/detail.php?id=<?= $m['id']; ?>" style="color: black;">Lihat Detail</a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>