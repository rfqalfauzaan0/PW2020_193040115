<?php
	// menghubungkan dengan file php lainnya
	require 'php/functions.php';

	// melakukan query
	$pakaian = query("SELECT * FROM pakaian");

	//Tugas
	if(isset($_GET['cari'])) {
        $keyword = $_GET['keyword'];
        $pakaian = query("SELECT * FROM pakaian WHERE
                    Foto LIKE '%$keyword%' OR
                    Nama Barang LIKE '%$keyword%' OR
                    Nama Merk LIKE '%$keyword%' OR
                    Official Store Online LIKE '%$keyword%' OR
                    Harga LIKE '%$keyword%'  ");
    } else {
        $pakaian = query("SELECT * FROM pakaian");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Apparel Pakaian</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>


		<form action="" method="get">
        <input type="text" name="keyword" autofocus>
        <button type="submit" name="cari">Cari</button>
    	</form>

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
	    <a href="php/admin.php" style="color:skyblue;">   KE HALAMAN ADMIN</a>
</body>
</html>
