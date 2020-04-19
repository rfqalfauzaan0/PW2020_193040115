<?php
// mehubungkan dengan file php lainya
require 'php/functions.php';

//melakukan query
$pakaian = query("SELECT * FROM pakaian");
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
				<?php foreach ($pakaian as $pkin) : ?>
				<tr>
					<td><?= $i ?></td>
					<td><img src="assets/img/<?= $pkin["Foto"]; ?>"></td>
					<td><?= $pkin["Nama Barang"] ?></td>
					<td><?= $pkin["Merk barang"] ?></td>
					<td><?= $pkin["Official Store Online"] ?></td>
					<td><?= $pkin["Harga"] ?></td>
				</tr>
				<?php $i++ ?>
				<?php endforeach ?>

		</table>

		