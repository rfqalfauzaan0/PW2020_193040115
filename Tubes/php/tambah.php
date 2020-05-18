<?php

	    session_start();

    if(!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

    require 'functions.php';

    if(isset($_POST['tambah'])) {
        if(tambah($_POST) > 0) {
            echo "
            <script>
                alert('Data Berhasil ditambahkan!');
                document.location.href = 'admin.php';
            </script>
            ";
        } else {
            echo "
            <script>
                alert('Data Gagal ditambahkan!');
                document.location.href = 'admin.php';
            </script>
            ";
        }
    }
?>

<h2>Form Tambah Data Apparel</h2>
<table cellpadding="10" cellspacing="5" border="1">
	<tr><td>
<h2>Form Tambah Data Apparel</h2>		
<form action="" method="post">
	<ul>
		<li>
			<label for="Foto"> Foto :</label>
			<input type="text" name="Foto" id="Foto" required><br><br>
		</li>
		<li>
			<label for="Nama Barang">Nama Barang :</label>
			<input type="text" name="Nama Barang" id="Nama Barang" required><br><br>
		</li>
		<li>
			<label for="Merk Barang">Merk Barang :</label>
			<input type="text" name="Merk Barang" id="Merk Barang" required><br><br>
		</li>
		<li>
			<label for="Official Store Online">Official Store Online :</label>
			<input type="text" name="Official Store Online" id="Official Store Online" required><br><br>
		</li>
		<li>
			<label for="Harga">Harga :</label>
			<input type="text" name="Harga" id="Harga" required><br><br>
		</li>
		<br>
		<button type="submit" name="tambah">Tambah Data</button>
		<button type="submit">
			<a href="index.php" style="text-decoration: none; color: black;">kembali</a>
		</button>
	</ul>

	</form>
</td>
</tr>
</table>