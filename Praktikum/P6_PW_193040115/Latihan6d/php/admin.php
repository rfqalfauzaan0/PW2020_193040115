<?php 
    // menghubungkan dengan file php lainnya
    require 'functions.php';

    // melakukan query
    $pakaian = query("SELECT * FROM pakaian")
?>

<html>
<head>
    <title>Latihan6a</title>
    <style>
        img{
            width : 150px;
        }
    </style>
</head>
<body>
  <div class="add">
    <a href="tambah.php">Tambah data</a>
  </div>
    <table border="1" cellpadding ="13" cellspacing="0">
        <tr>
            <th>#</th>
            <th>opsi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Nama Barang</th>
            <th>Official Store Online</th>
            <th>Harga</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($pakaian as $pk) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $pk['id'] ?>"><button>Ubah</button></a>
                    <a href="hapus.php?id=<?= $pk['id']?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
                </td>
                <td><img src="../assets/img/<?= $pk['Foto']?>" alt=""></td>
                <td><?= $pk['Nama Barang']?></td>
                <td><?= $pk['Merk barang']?></td>
                <td><?= $pk['Official Store Online']?></td>
                <td><?= $pk['Harga']?></td>
            </tr>
            <?php $i++;?>
        <?php endforeach;?>
    </table>

</body>
</html>