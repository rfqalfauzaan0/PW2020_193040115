<?php
session_start();
require 'functions.php';
// melakukan pengecekan apakah user sudah melakukan login jika sudah redirect ke halaman login admin 
if(isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit;
}
// cek cookie 
if(isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
    $username = $_COOKIE['username'];
    $hash = $_COOKIE['hash'];

    //ambil username berdasarkan id
    $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username' " );
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if ($hash === hash('sha256' , $row['id'], false)) {
        $_SESSION['username'] = $row['username'];
        header("Location: admin.php");
        exit;
    }
}

// Login
if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    // mencocokan USERNAME dan PASSWORD
    if(mysqli_num_rows($cek_user) > 0) {
        $row = mysqli_fetch_assoc($cek_user);
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] = hash('sha256' , $row['id'] , false);
            // jika remember me dicentang
            if(isset($_POST['remember'])) {
                setcookie('username' , $row['username'] , time() + 60 * 60 * 24);
                $hash = hash('sha256', $row['id']);
                setcookie('hash', $hash, time() + 60 * 60 * 24);
            }

            if (hash('sha256' , $row['id']) == $_SESSION['hash']) {
                header("Location: admin.php");
                die;
            }
        }
        header("Location: ../index.php");
        die;
    }
    $error = true;
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="login.css">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Login</title>
</head>
<body>
   
<div class="row">
        <div class="col s12 m4 offset-m4">
            <div class="card z-depth-5">
                <div class="card-action cyan white-text">
                    <h3 align="center">Silahkan Login</h3>
                </div>
                <form action="" method="post">
                <?php if (isset($error)) : ?>
                      <p style="color : red; font-style : italic;">Username Atau Password               salah</p>
                  <?php endif; ?>
                <div class="card-content">
                    <div class="input-field">
                        <label for="username">Username</label>
                         <input type="text" name="username" class="form_login" placeholder=""Username>
                    </div><br>
                    <div class="input-field">
                        <label for="password">Password</label>
                         <input type="password" name="password" class="form_login" placeholder="Password">
                    </div><br>
                    <div class="input-field">
                        <label for="checkin">
                            <input type="checkbox" id="checkin">
                            <span>Remember me</span>
                        </label>
                    </div><br><br>
                    <div class="input-field">
                        <button class="btn-large waves-effect cyan btn" type="submit" name="submit" style="width: 100%"><a href="admin.php"></a>>input</i>LOGIN</button>
                        <div class="registrasi">
                        <p>Belum punya akun? Registrasi <a href="registasi.php">Disini</a> </p>
                    </div>

                    </div><br>
                </div></form>
            </div>
        </div>
    </div>
</body>
</html>
