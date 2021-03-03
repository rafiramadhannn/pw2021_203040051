<!-- Nama : Mochamad Rafi Ramadhan -->
<!-- NRP  : 203040051 -->
<!-- Shift: Praktikum PW Jumat 10.00 -->


   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 1b</title>
</head>
<body>
    
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th></th>
            <?php for ( $i = 1; $i <= 5; $i++ ) : ?>
                <th>Kolom <?= $i; ?></th>
            <?php endfor; ?>
        </tr>
            
            <!-- tambahkan baris kode php untuk menampilkan bagian body table -->
        <?php for ( $i = 1; $i <= 5; $i++ ) : ?>
            <tr>
                <th>Baris <?= $i; ?></th>
                <?php for ( $y = 1; $y <= 5; $y++ ) : ?>
                    <td>Baris <?= $i; ?>, Kolom <?= $y; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>

</body>
</html>