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
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!-- My CSS -->
      <link rel="stylesheet" href="css/style.css">
      <link href="css/style-icons.css" type="text/css" rel="stylesheet" media="screen,projection" />
      <link rel="stylesheet" href="css/materialize-social.css">

     <style>
       img {
        width: 150px;
       }
     </style>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <title>Alfa Corp</title>
    <body id="main" class="scrollspy">

      <!-- navbar -->
        <div class="">
            <nav>
                <div class="nav-wrapper">
                  <a href="#slide-out" data-target="slide-out" class="sidenav-trigger show-on-large"><i class="material-icons">menu</i></a>
                    <a href="#main" class="brand-logo">Alfa Corp</a>
                    <ul class="right hide-on-med-and-down">
                        <form action="" method="get">
                        <input type="text" name="keyword" autofocus>
                        <button type="submit" name="cari">Cari</button>
                      </form>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- akhir navbar -->

        <!-- sidenav -->
        <ul id="slide-out" class="sidenav">
          <div class="user-view"></div>
            <div class="container center">
              <img src="assets/img/logo.jpg" alt="avatar" width="100" class="circle">
              <p class="profession">Daftar Apparel Pakaian</p>
            </div>
            <div class="blue-sidenav">
                <div class="divider"></div>
                <form action="" method="get">
        <input type="text" name="keyword" autofocus>
        <button type="submit" name="cari">Cari</button>
      </form>
              <li>
                 <div class="footer" id="footer">
      <a href="php/admin.php" style="color:skyblue;">   KE HALAMAN ADMIN</a>
  </div>

              </li>
                <div class="divider"></div>
            </div>
        </ul>
        <!-- akhir sidenav -->

      

        <!-- main -->
        <div class="main">
          <div class="slider">
              <ul class="slides">
                <li>
                  <img src="assets/img/converse.png">
                </li>
                <li>
                  <img src="assets/img/guten.png">
                </li>
                <li>
                  <img src="assets/img/uniqlo.png">
                </li>
              </ul>
            </div>
         
      <center>
      <?php foreach ($pakaian as $pkin) : ?>
        <p class="nama" >
          <a href="php/detail.php?id=<?= $pkin['id'] ?>">
              <?= $pkin["Nama Barang"] ?>
           
          </a>
        </p>
      <?php endforeach; ?>
    </div>

    </tr>
    <?php 
  ?>
      </center>

      
        <!-- services -->
        <div class="services scrollspy" id="services">
          <div class="container">
            <p class="what">WHAT WE DO?</p>
            <h1>Menjual Barang Apparel Pakaian</h1>
          </div>
            <div class="slider">
              <ul class="slides">
                <li>
                  <img src="assets/img/zilingo.png">
                </li>
                <li>
                  <img src="assets/img/shopee.png">
                </li>
                <li>
                  <img src="assets/img/zalora.png">
                </li>
              </ul>
            </div>
          <div class="container">
            <h1 class="center here">Here are some services we can help you with :</h1>
            <div class="row">
              <div class="col s6 center">
                <h6><i class="tiny material-icons">brightness_1</i>Accessories</h6>
                <h6><i class="tiny material-icons">brightness_1</i>Shoes</h6>
              </div>
              <div class="col s6 center">
                <h6><i class="tiny material-icons">brightness_1</i> Panst</h6>
                <h6><i class="tiny material-icons">brightness_1</i> Clotes</h6>
              </div>
            </div>
          </div>
        </div>
        <!-- akhir services -->

        
        <!-- footer -->
        <div class="footer" id="footer">
          <footer>
            <div class="footer-copyright">
              <div class="container">
                <p class="copy">2019 &copy; Good Art Studio, All Rights Reserved.</p>
              </div>
            </div>
          </footer>
        </div>
        <!-- akhir footer -->

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
            const sidenav = document.querySelectorAll('.sidenav') ;
            M.Sidenav.init(sidenav)

            const scrollspy = document.querySelectorAll('.scrollspy');
            M.ScrollSpy.init(scrollspy, {
              scrollOffset: 55
            });

            const carousel = document.querySelectorAll('.carousel');
            M.Carousel.init(carousel, {
              duration: 50,
              shift: 20,
              indicators: true
            });

            const materialboxed = document.querySelectorAll('.materialboxed');
            M.Materialbox.init(materialboxed);

            var instance = M.Carousel.init({
              fullWidth: true
            });

            const slider = document.querySelectorAll('.slider');
            M.Slider.init(slider, {
              indicators: true,
              height: 500,
              duration: 800,
              interval: 3000
            });

           const parallax = document.querySelectorAll('.parallax')
           M.Parallax.init(parallax)

            const select = document.querySelectorAll('select');
            M.FormSelect.init(select);

            const fixedbtn = document.querySelectorAll('.fixed-action-btn');
            M.FloatingActionButton.init(fixedbtn);
      </script>


    </body>
  </html>


