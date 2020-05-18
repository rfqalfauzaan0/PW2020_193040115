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
    <link rel="stylesheet" type="text/css" href="style.css">
      <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
      
        <!-- navbar -->
        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper">
                  <a href="#slide-out" data-target="slide-out" class="sidenav-trigger show-on-large"><i class="material-icons">menu</i></a>
                    <a href="#main" class="brand-logo">Alfa Corp</a>
                    <ul class="right hide-on-med-and-down">
                      <li><a href="#recent">Daftar Apparel Pakaian</a></li>
                      
                </div>
            </nav>
        </div>
    <!-- sidenav -->
      <ul id="slide-out" class="sidenav">
          <div class="user-view"></div>
            <div class="container center">
              <img src="assets/img/logo.jpg" alt="avatar" width="100" class="circle">
              <p class="profession">Daftar Apparel pakian</p>
            </div>
            <div class="blue-sidenav">
                <div class="divider"></div>
    <form action="" method="get">
        <input type="text" name="keyword" autofocus>
        <button type="submit" name="cari">Cari</button>
      </form>
    </div>
</ul>


      <div class ="container">
        <div class="gambar">
            <div class="row">
              <div class="col s12">
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
    </div>
  </div>
</body>
</html>