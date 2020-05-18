<?php 

    session_start();

    if(!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}
    // menghubungkan dengan file php lainnya
    require 'functions.php';

    // melakukan query
    $pakaian = query("SELECT * FROM pakaian");

if(isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $pakaian = query("SELECT * FROM pakaian WHERE
                Foto LIKE '%$keyword%' OR
                Nama Barang LIKE '%$keyword%' OR
                Merk Barang LIKE '%$keyword%' OR
                Official Store Online LIKE '%$keyword%' OR
                Harga LIKE '%$keyword%'  ");
} else {
    $pakaian = query("SELECT * FROM pakaian");
}
?>

<html>
<head>
    <title>Admin</title>

     <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<!-- navbar -->
        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper">
                
                    <a href="#main" class="brand-logo">Alfa Corp</a>
                    <ul class="right hide-on-med-and-down">
                      <li><a href="#recent">Daftar Apparel Pakaian</a></li>
                     <div class="add">
                         <button class="btn-large waves-effect cyan btn" type="submit" name="submit" style="width: 100%"><a href="tambah.php">Tambah Data</a>/button>>
                        </div>
                        <div class="logout">
                        <button class="btn-large waves-effect cyan btn" type="submit" name="submit" style="width: 100%"><a href="logout.php">logout</a></button>
                      </div>
                       
                </div>
            </ul>
            </nav>
        </div>
       


 <div class="container">
  
  
   <form action="" method="get">
        <input type="text" name="keyword" autofocus>
        <button type="submit" name="cari">Cari</button>
    </form>

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