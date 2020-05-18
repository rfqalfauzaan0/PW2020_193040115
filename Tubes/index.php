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
	
  <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/style.css">


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

	 
			<?php foreach ($pakaian as $pkin) : ?>
				<p class="nama" >
					<a href="php/detail.php?id=<?= $pkin['id'] ?>">
							<?= $pkin["Nama Barang"] ?>
							<?= $pkin["Foto"] ?>
					</a>
				</p>
			<?php endforeach; ?>
		</div>

    </tr>
    <?php 
  
      ?>
       <div class="about scrollspy" id="about">
          <div class="parallax-container">
       <div class="parallax"><img src="assets/img/bg.jpg">

	<div class="footer" id="footer">
	    <a href="php/admin.php" style="color:skyblue;">   KE HALAMAN ADMIN</a>
	</div>


      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
      	 const sidenav = document.querySelectorAll('.sidenav') ;
            M.Sidenav.init(sidenav)

      </script>
</body>
</html>