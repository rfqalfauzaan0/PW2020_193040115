<?php
	// menghubungkan dengan file php lainnya
	require 'php/functions.php';

	// melakukan query
	$pakaian = query("SELECT * FROM pakaian");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Apparel Pakaian</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
			<?php foreach ($pakaian as $pkin) : ?>
				<p class="nama">
					<a href="php/detail.php?id=<?= $pkin['id'] ?>">
							<?= $pkin["Nama Barang"] ?>
					</a>
				</p>
			<?php endforeach; ?>
		</table>
	</div>
</body>
</html>
