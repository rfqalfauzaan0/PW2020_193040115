<?php 
    // mengecek apakah ada id yang dikirimkan
    // jika tidak makan akan dikembalikan ke halakam index.php
    if(!isset($_GET['id'])){
      header("location: ../im\index.php");
    }
    require 'functions.php';

    //mengambil id dari url
    $id = $_GET['id'];

    //melakikan query dengan parameter id uang diambil dari url
    $pakaian = query("SELECT * FROM pakaian WHERE id =$id")[0];
?>
<html>

<head>
    <title>Pakaian</title>
    <link rel="stylesheet" hrefet="style.css">
</head>
<body>
      <div class ="container">
        <div class="gambar">
          <img src="../assets/img/<?= $pakaian["Foto"]; ?>" alt="">
        </div>
      <div class="keterangan">
          <p><?= $pakaian["Nama Barang"];?></p>
          <p><?= $pakaian["Merk barang"];?></p>
          <p><?= $pakaian["Official Store Online"];?></p>
          <p><?= $pakaian["Harga"];?></p>
        </div>
        <button class ="tombol-kembali"><a href="../index.php">kembali</a></button>
      </div>
</body>
</html>