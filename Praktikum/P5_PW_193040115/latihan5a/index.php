<?php
	// melakukan koneksi ke database
	$conn = mysqli_connect("localhost","root","") or die("koneksi ke DB gagal");

	//memilih database
	mysqli_select_db($conn, "pw_193040115") or die("Database Salah!");

	// query mengambil objek dari table didalam database
	$result = mysqli_query($conn,"SELECT * FROM pakaian");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>193040115</title>
	<link rel="stylesheet" href="css/style.css">
</head>
	<body>
	<div class="container">
		<h1>Daftar Barang Apparel Pakian</h1>
			<table border="1" cellspacing="0" cellpadding="10">
					<td width="10%"><h3>No</h3></td>
					<td width="10%"><h3>Foto</h3></td>
					<td width="10%"><h3>Nama Barang</h3></td>
					<td width="10%"><h3><center>Merk Barang</center></h3></td>
					<td width="10%"><h3>Official Store Online</h3></td>
					<td width="10%"><h3>Harga</h3></td>
			</tr>
				<?php $i = 1 ?>
				<?php while($pakaian = mysqli_fetch_assoc($result)) : ?>
				<tr>
					<td><?= $i ?></td>
					<td><img src="assets/img/<?= $pakaian["Foto"]; ?>"></td>
					<td><?= $pakaian["Nama Barang"] ?></td>
					<td><?= $pakaian["Merk barang"] ?></td>
					<td><?= $pakaian["Official Store Online"] ?></td>
					<td><?= $pakaian["Harga"] ?></td>
				</tr>
				<?php $i++ ?>
				<?php endwhile ?>

		</table>
	</body>
</html>