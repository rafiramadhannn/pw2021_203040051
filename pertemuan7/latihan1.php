<?php 
    // Mochamad Rafi Ramadhan- 203040051
?>


<?php 
// $_GET
$mahasiswa = [
	[	
		"nrp" => "203040051",
		"nama" => "Mochamad Rafi Ramadhan",
		"email" => "rafiramadhan285@gmail.com",
		"jurusan" => "Teknik Informatika",
		"gambar" => "1.jpg"
	],
	[
		"nama" => "Rafi", 
		"nrp" => "203041200",
		"email" => "rafi@gmail.com",
		"jurusan" => "Teknik Informatika",
		"gambar" => "2.png"
	]
];
?>
<!DOCTYPE html>
<html>
<head>
	<title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
	<li>
		<a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
	</li>
<?php endforeach; ?>
</ul>


</body>
</html>