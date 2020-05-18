<?php

require 'functions.php';

if(isset($_POST["register"])) {

    if(registrasi($_POST) > 0 ){
    echo "
        <script>
            alert('Registrasi Berhasil');
            document.location.href = 'login.php';
        </script>
    ";
    } else {
        echo "
            <script>
                alert('Registrasi Gagal');
            </script>
        ";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Registasi</title>
        <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<div class="row">
        <div class="col s12 m4 offset-m4">
            <div class="card z-depth-5">
                <div class="card-action cyan white-text">
                    <h3 align="center">Registasi</h3>
                </div>
                  <form action="" method="post">
                <div class="card-content">
                    <div class="input-field">
                        <label for="username">Username</label>
                        <input type="text" id="username">
                    </div><br>
                    <div class="input-field">
                        <label for="password">Password</label>
                        <input type="text" id="password">
                    </div><br>
                    <div class="input-field">
                        <button class="btn-large waves-effect cyan btn" style="width: 100%" type="submit" name="register"></i>Registasi</button>
                    </div><br>
                </div></form>
            </div>
        </div>
    </div>
</body>
</html>
